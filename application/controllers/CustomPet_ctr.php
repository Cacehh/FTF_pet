<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomPet_ctr extends CI_Controller {
    
    public function index()
    {
		$this->load->view('snips/a_start');
		$this->load->view('snips/css_custombuilder');
		$this->load->view('snips/a_headbody');
		$this->load->view('+pages/customPet/index');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_custompet');
		$this->load->view('snips/z_end');
	} 

	public function cat()
    {
		$this->load->view('snips/a_start');
		$this->load->view('snips/css_custombuilder');
		$this->load->view('snips/css_reset');
		$this->load->view('snips/css_custompet');
		$this->load->view('snips/a_headbody');

		$this->load->view('+pages/customPet/cat');
		$this->load->view('snips/js_custompet');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/z_end');
	}

	public function dog()
    {
		$this->load->view('snips/a_start');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/css_custombuilder');
		$this->load->view('snips/css_reset');
		$this->load->view('snips/css_custompet');
		$this->load->view('snips/a_headbody');

		$this->load->view('+pages/customPet/cat');
		$this->load->view('snips/z_end');
	}	

	public function hamster()
    {
		$this->load->view('snips/a_start');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/css_custombuilder');
		$this->load->view('snips/css_reset');
		$this->load->view('snips/css_custompet');
		$this->load->view('snips/a_headbody');

		$this->load->view('+pages/customPet/cat');
		$this->load->view('snips/z_end');
	}

	public function rabbit()
    {
		$this->load->view('snips/a_start');
		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/css_custombuilder');
		$this->load->view('snips/css_reset');
		$this->load->view('snips/css_custompet');
		$this->load->view('snips/a_headbody');

		$this->load->view('+pages/customPet/cat');
		$this->load->view('snips/z_end');
	}

}