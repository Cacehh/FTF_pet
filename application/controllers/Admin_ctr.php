<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctr extends CI_Controller {
    
    public function index()
    {
        $this->load->view('+pages/admin/a_header');
        $this->load->view('+pages/admin/dashboard');
//        $this->load->view('+pages/admin/z_footer');
    }
}