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
                    'username' => $result->username
                ];

                    $this->session->set_userdata($data);
                    
                    if($_SESSION['id'] <= '100')
                    {
                        if($_SESSION['id'] >= '50')
                        {
                            redirect('Admin_Inventory_ctr');
                        } else {
                            redirect('POS_ctr');
                        }
                    }
                    redirect('Admin_ctr',$str);
                    // if($_SESSION['id'] == '100') {
                    //     redirect('Admin_ctr',$str);
                    // } elseif($_SESSION['id'] == '51') {
                    //     redirect('Admin_Inventory_ctr');
                    // } elseif($_SESSION['id'] == '1') {
                    //     redirect('POS_ctr');
                    // }
                // if($id > '50'){
                // }
                
                // if(!empty($str)) {
                    // if($str == "POS") {
                    //     // redirect('','refresh')
                    //     redirect('POS_ctr', $str);
                    // } elseif ($str == "Inventory") {
                    //     redirect('Admin_ctr',$result);
                    // } elseif ($str == "POS") {
                    //     redirect('POS_ctr',$result);
                    // }
                // }
                // $this->load->model->('Login_model');
                // $res = $this->Login_model->detect_user();
                // if($res == 3){
                //     $data['result'] = $res;
                //     $this->session->set_userdata($data);
                //     redirect('Admin_ctr',$result);
                // } else if ($res == 2) {
                //     # code...
                // } elseif ($res == 1) {
                //     # code...
                //     redirect('Admin_ctr',$result);
                // } else {
                //     redirect('Admin_ctr/logout');
                // }
                // $user_type['type'] = $this->Login_model->detect_user();
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password does not exist');
                redirect('Access_ctr');
            }
        }

        print_r($this->session->all_userdata());
        // echo "this is the page for no post";
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