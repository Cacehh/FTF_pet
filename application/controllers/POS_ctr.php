<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POS_ctr extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('prod_model');
    }
    
    public function index()
    {
        //autoload configuration
        $config['base_url'] = site_url('POS_ctr/index');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "20";
        
        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        // getting the product list
        $data['prodlist'] = $this->prod_model->get_product($config["per_page"], $data['page'], NULL);

        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/pos', $data);
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    function search()
    {
        // getting the search string
        $search = ($this->input->post("prod_name"))? $this->input->post("prod_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("POS_ctr/search/$search");
        $config['total_rows'] = $this->prod_model->get_product_count($search);
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['prodlist'] = $this->prod_model->get_product($config['per_page'], $data['page'], $search);

        // loading of the view
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/pos', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function history() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/pos_history');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function products() {
        $this->load->view('snips/a_start');
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
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_pets');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   
    
	
	public function type() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_type');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}	
	
	public function supplier() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');
        
        $this->load->view('+pages/admin/product_suppliers');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}	
	
// 	public function addSupplier() {
//         $this->load->view('snips/a_start');
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
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

	$this->load->view('+pages/admin/product_brand');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}
	
	// public function addBrands() {
 //        $this->load->view('snips/a_start');
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
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/product_tags');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function getOrder() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_getOrders');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    public function customers() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_customer');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function customerEdit() {
        $this->load->view('snips/a_start');
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

	$this->load->view('+pages/admin/a_customer_edit');
		
	$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
	$this->load->view('snips/z_end');
	}
    
    public function customerAdd() {
        $this->load->view('snips/a_start');
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
        $this->load->view('snips/a_start');
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
