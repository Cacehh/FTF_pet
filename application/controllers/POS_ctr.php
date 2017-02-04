<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POS_ctr extends CI_Controller {
    
    public function index()
    {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/pos');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    public function history() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/pos_history');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function products() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/products');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}	
    
    public function pets()
    {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_pets');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   
    
	
	public function type() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_type');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}	
	
	public function supplier() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_suppliers');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}	
	
// 	public function addSupplier() {
//         $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
//         $this->load->view('snips/css_materialize');
//         $this->load->view('snips/css_materialize_icon');
//         $this->load->view('+pages/admin/a_POS_header');
// //        Change the page
//         $this->load->view('+pages/admin/product_suppliers');
		
// 		$this->load->view('snips/js_jquery300');
//         $this->load->view('snips/js_materialize');
// 		$this->load->view('snips/z_end');
// 	}	
	
	public function brands() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

	$this->load->view('+pages/admin/product_brand');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}
	
	// public function addBrands() {
 //        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_POS_header');
 //        //Change the page
 //        $this->load->view('+pages/admin/product_brand');
		
	// 	$this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_materialize');
	// 	$this->load->view('snips/z_end');
	// }	

    public function tags() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/product_tags');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function getOrder() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_getOrders');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    public function customers() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_customer');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function customerEdit() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

	$this->load->view('+pages/admin/a_customer_edit');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}
    
    public function customerAdd() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_addCustomer');
        $this->load->view('snips/a_start', $data);
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }      
    
    public function orders() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_orders');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    } 

    //function for discount operation for the POS.
    public function discount(){

    }   
}
