<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Access_ctr extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form validation library
		$this->load->library('form_validation');

        // Load database
        $this->load->model("Login_model", "hello");
    }

    //Call login page
    public function index() {
        if($_POST) {
            $result = $this->hello->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username,
                    'acct_type' => $result->acct_type,
                    'fname' => $result->FirstName,
                    'lname' => $result->LastName
                ];
                    $this->session->set_userdata($data);
                    if($this->session->userdata('acct_type') == '3'){
                        redirect('Admin_ctr');
                    } else if ($this->session->userdata('acct_type') == '2') {
                        redirect('Inventory_ctr');
                    } elseif ($this->session->userdata('acct_type') == '1') {
                        redirect('POS_ctr');
                    } else {
                        $this->session->set_flashdata('flash_data', 'Please Contact Administrator');
                        redirect('Access_ctr');
                    }
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password does not exist');
                redirect('Access_ctr');
            }
        }

        print_r($this->session->all_userdata());
        $data['title'] = 'FTNF | Login';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/admin/a_login');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
	}

    public function logout()
    {
        $data = ['id', 'username'];
        $this->session->unset_userdata($data);
        $this->session->set_flashdata('flash_data','You have successfully logged out');

        //Back to login page
        $data['title'] = 'FTNF | Login';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/admin/a_login');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    } 

}

?>