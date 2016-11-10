<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctr extends CI_Controller {
    
    public function index()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_login');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }   
	
	public function register()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_register');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    } 
	public function forgotpassword()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_forgotpassword');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }
	
    public function dashboard()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');
        
        $this->load->view('+pages/admin/dashboard');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function accounts()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');
        
        $this->load->view('+pages/admin/accounts');
        
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }		
	
	public function salesReport() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_header');
		
        $this->load->view('+pages/admin/report_sales');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}
	
	public function inventoryReport() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_header');
		
        $this->load->view('+pages/admin/report_inventory');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}	
	
    public function paymentReport() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');
        
        $this->load->view('+pages/admin/report_payment');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

 //    public function calendar() {
 //        $this->load->view('snips/a_start');
 //        $this->load->view('snips/css_calendar');
 //        $this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_moment');
 //        $this->load->view('snips/js_calendar');
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_header');
        
 //        $this->load->view('+pages/admin/calendar');
        
 //        $this->load->view('snips/js_materialize');
	// 	$this->load->view('snips/z_end');
	// }
}