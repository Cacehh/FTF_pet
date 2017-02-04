<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Home.php
 * @author Imron Rosdiana
 */
class Home extends CI_Controller
{

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You don\'t have access!');
            redirect('login_ctr');
        }
    }

    public function index() {
        $this->load->view('home');
        print_r($this->session->all_userdata());
    }

    public function logout() {
        $data = ['id', 'username'];
        $this->session->unset_userdata($data);

        redirect('login_ctr');
    }
}
