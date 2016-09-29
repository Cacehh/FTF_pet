<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage_ctr extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('+pages/z_header');
		$this->load->view('index_view');
//        $this->load->view('+pages/x_register');
//		$this->load->view('+pages/x_login');
		$this->load->view('+pages/z_footer');
	}
    
    public function forgotpassword()
    {
        $this->load->view('+pages/z_header');
        $this->load->view('+pages/x_forgotPass');
		$this->load->view('+pages/z_footer');
    }
    
    public function logreg()
    {
        $this->load->view('+pages/z_header');
        $this->load->view('+pages/x_login');
		$this->load->view('+pages/z_footer');
    }
    
    
}
