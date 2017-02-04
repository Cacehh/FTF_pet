<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Login_ctr extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model("login_model","try");
        // $this->load->model("login_model", "login");
        if(!empty($_SESSION['id']))
            redirect('home');
    }

    public function index() {
        print_r($this->session->all_userdata());

        if($_POST) {
            $result = $this->try->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username
                ];

                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('login_ctr');
            }
        }

        $this->load->view("loginn");
    }
}
