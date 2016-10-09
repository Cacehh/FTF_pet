<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoggedIn_ctr extends CI_Controller {

	public function viewProducts()
	{
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
        $this->load->view('snips/aa_nav');
        
        // Main Contents
		$this->load->view('+pages/productList');

        // Footer Statements
		$this->load->view('+pages/z_footer');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_jquerymenuaim');
		$this->load->view('snips/js_main');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/js_defined');
		$this->load->view('snips/z_end');
	}
      
    public function productDetails()
    {
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
        $this->load->view('snips/aa_nav');
        
        // Main Contents
		$this->load->view('+pages/productView');

        // Footer Statements
		$this->load->view('+pages/z_footer');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_jquerymenuaim');
		$this->load->view('snips/js_main');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/js_defined');
		$this->load->view('snips/z_end');
    }
    
    public function wishlist()
    {
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
        $this->load->view('snips/aa_nav');
        
        // Main Contents
		$this->load->view('+pages/wishlist');

        // Footer Statements
		$this->load->view('+pages/z_footer');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_jquerymenuaim');
		$this->load->view('snips/js_main');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/js_defined');
		$this->load->view('snips/z_end');
    }
}
