<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoggedIn_ctr extends CI_Controller {

	public function viewProducts()
	{
        // Heading Statements
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('snips/css_materialize_admin');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
		//Extra defined statements
		$this->load->view('snips/css_home');
		$this->load->view('snips/js_modernizr');
		$this->load->view('snips/js_jquery211');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/SIMPLE_navi_1');
        
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
        // Main Contents
		$this->load->view('+pages/productList');
		$this->load->view('snips/SIMPLE_navi_2');

		// <BR>
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
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
		$this->load->view('snips/css_materialize_admin');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
		//Extra defined statements
		$this->load->view('snips/css_home');
		$this->load->view('snips/js_modernizr');
		$this->load->view('snips/js_jquery211');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/SIMPLE_navi_1');
        
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
        // Main Contents
		$this->load->view('+pages/productView');
		$this->load->view('snips/SIMPLE_navi_2');

		// <BR>
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
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
		$this->load->view('snips/css_materialize_admin');
        $this->load->view('snips/css_defined');
        $this->load->view('snips/js_modernizr');
		//Extra defined statements
		$this->load->view('snips/css_home');
		$this->load->view('snips/js_modernizr');
		$this->load->view('snips/js_jquery211');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/SIMPLE_navi_1');
        
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
        // Main Contents
		$this->load->view('+pages/wishList');
		$this->load->view('snips/SIMPLE_navi_2');

		// <BR>
		$this->load->view('snips/a_spacer');
		$this->load->view('snips/a_spacer');
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
