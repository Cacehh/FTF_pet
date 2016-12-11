<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctr_POS extends CI_Controller {

public function index() 
{
    $data['title'] = 'FTNF | POS';
    $this->load->view('snips/a_start', $data);
    $this->load->view('snips/css_materialize');
    $this->load->view('snips/css_materialize_icon');
    $this->load->view('+pages/admin/a_header');
                
    $this->load->view('+pages/admin/pos');
        		
    $this->load->view('snips/js_jquery300');
    $this->load->view('snips/js_materialize');
    $this->load->view('snips/z_end');
}	
	
	public function history() 
    {
        $data['title'] = 'FTNF | History';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/pos_history');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
	}
}