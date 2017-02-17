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
			//Title
			$data['title'] = 'Home Page';
			// Heading Statements
			$this->load->view('snips/a_start', $data);
			$this->load->view('snips/css_materialize_icon');
			$this->load->view('snips/css_materialize_admin');
			$this->load->view('snips/css_defined');
			//Extra defined statements
			$this->load->view('snips/css_home');
			$this->load->view('snips/css_reset');
			$this->load->view('snips/js_modernizr');
			$this->load->view('snips/js_jquery211');
			$this->load->view('snips/js_materialize');
			$this->load->view('snips/SIMPLE_navi_1');
			//Main content goes here
			$this->load->view('index_view');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/SIMPLE_navi_2');
			
			// <BR>
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');
			$this->load->view('snips/a_spacer');

			// Footer Statements
			$this->load->view('+pages/z_footer');
			$this->load->view('snips/js_jquerymenuaim');
			$this->load->view('snips/js_main');
			$this->load->view('snips/z_end');
		}	
	
	//ALT INDEX
//	public function index()
//	{
//        // Heading Statements
//        $this->load->view('snips/a_start');
//        $this->load->view('snips/css_materialize_icon');
//        $this->load->view('snips/css_materialize');
//        $this->load->view('snips/css_defined');
//        //Extra defined statements
//        $this->load->view('snips/css_home');
//        $this->load->view('snips/js_modernizr');
//			$this->load->view('snips/js_jquery211');
//			$this->load->view('snips/js_materialize');
//        
//        $this->load->view('snips/aa_nav');
//        
//        // Main Contents
//			$this->load->view('index_view');
//
//			// <BR>
//			$this->load->view('snips/a_spacer');
//			$this->load->view('snips/a_spacer');
//
//        // Footer Statements
//			$this->load->view('+pages/z_footer');
//			$this->load->view('snips/js_jquerymenuaim');
//			$this->load->view('snips/js_main');
//			$this->load->view('snips/js_defined');
//			$this->load->view('snips/z_end');
//	}
    
    public function forgotpassword()
    {
        $this->load->view('+pages/z_header');
        $this->load->view('+pages/x_forgotPass');
		$this->load->view('+pages/z_footer');
    }
    
    public function logreg()
    {
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
        $this->load->view('snips/aa_nav');
        
        // Main Contents
		$this->load->view('+pages/x_login');

        // Footer Statements
		$this->load->view('+pages/z_footer');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_jquerymenuaim');
		$this->load->view('snips/js_main');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/js_defined');
		$this->load->view('snips/z_end');
    }
    
    public function reg() 
    {
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
        $this->load->view('snips/aa_nav');
        
        // Main Contents
		$this->load->view('+pages/x_register');

        // Footer Statements
		$this->load->view('+pages/z_footer');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_jquerymenuaim');
		$this->load->view('snips/js_main');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/js_defined');
		$this->load->view('snips/z_end');
    }
    
    public function admin()
    {
        $this->load->view('+pages/Admin/dashboard');    
    }
    
}
