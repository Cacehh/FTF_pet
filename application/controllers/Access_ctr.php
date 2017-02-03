<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Access_ctr extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form validation library
		$this->load->library('form_validation');

		// Load database
        $this->load->model("Login_model", "hello");
        if(!empty($_SESSION['id']))
            redirect('Admin_ctr');
	}

	//Call login page
	public function index() {
        if($_POST) {
            $result = $this->hello->validate_user($_POST);
            // $user_type = $this->hello->detect_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username,
                    // 'acct_type' => $result->acct_type,
                    // 'user_email' => $result->user_email
                ];

                $this->session->set_userdata($data);
                redirect('Admin_ctr');
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
        echo 'hello';
        $this->load->view('+pages/admin/a_login');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
        // redirect('Admin_ctr');
	}

}

?>