<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Inventory_ctr extends CI_Controller {
    
    public function index() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');

        $this->load->view('+pages/admin_inventory/invView');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  
	
    public function invPet() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invPet');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function invProduct() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invProduct');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }	
	
    public function addPet() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invAddPet');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function addProduct() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invAddProd');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function invEditPet() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invEditPet');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   
    
    public function invEditProd() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin_inventory/a_headerInventory');
        
        $this->load->view('+pages/admin_inventory/invEditProd');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }    
}