<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Admin_ctr extends CI_Controller {
    
    public function index()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/web_admin/a_login');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }   
	
	public function register()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/web_admin/a_register');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    } 
	public function forgotpassword()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/web_admin/a_forgotpassword');
		
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }
	
	public function dashboard()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/web_admin/a_header');
		
        $this->load->view('+pages/web_admin/dashboard');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }	

    public function products()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');
        
        $this->load->view('+pages/web_admin/product_items');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    public function addProducts()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');
        
        $this->load->view('+pages/web_admin/add_products');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  
    
    public function pets()
    {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');
        
        $this->load->view('+pages/web_admin/product_pets');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   
    
    public function addPets() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');
        
        $this->load->view('+pages/web_admin/add_pets');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	
	
}