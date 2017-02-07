<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctr extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'Please login First');
            redirect('Access_ctr');
        }

        if($this->session->userdata('acct_type') != '3'){
            $this->session->set_flashdata('flash_data', '<b>This is a restricted page.</b>');
            redirect('Access_ctr');
        }
    }

    public function index()
    {

        print_r($this->session->all_userdata());
        $data['title'] = 'FTNF | Dashboard'; 
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/dashboard');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    // public function logout()
    // {
    //     $data = ['id', 'username'];
    //     $this->session->unset_userdata($data);
    //     $this->session->set_flashdata('flash_data','You have successfully logged out');

    //     //Back to login page
    //     $data['title'] = 'FTNF | Login';
    //     $this->load->view('snips/a_start', $data);
    //     $this->load->view('snips/css_materialize');
    //     $this->load->view('snips/css_materialize_icon');

    //     $this->load->view('+pages/admin/a_login');

    //     $this->load->view('snips/js_jquery300');
    //     $this->load->view('snips/js_materialize');
    //     $this->load->view('snips/z_end');
    // }    
	
	public function register()
    {
        $data['title'] = 'FTNF | Register';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_register');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    } 
	public function forgotpassword()
    {
        $data['title'] = 'FTNF | Forgot Password';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_forgotpassword');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }
	
    public function dashboard()
    {
        $data['title'] = 'FTNF | Dashboard';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');        
        $this->load->view('+pages/admin/dashboard');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function accounts()
    {
        $data['title'] = 'FTNF | Account';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/accounts');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }		
	
	public function salesReport() 
    {
        $data['title'] = 'FTNF | Sales Report';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/report_sales');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}
	
	public function inventoryReport() 
    {
        $data['title'] = 'FTNF | Inventory Report';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/report_inventory');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}	
	
    public function paymentReport() 
    {
        $data['title'] = 'FTNF | Payment Report';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/report_payment');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

    public function orders() 
    {
        $data['title'] = 'FTNF | Orders';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/a_orders');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function getOrder() 
    {
        $data['title'] = 'FTNF | Add Order';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/a_getOrders');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

    public function customers() 
    {
        $data['title'] = 'FTNF | Customer List';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/a_customer');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function customerEdit() 
    {
        $data['title'] = 'FTNF | Edit Customer';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/a_customer_edit');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }
    
    public function customerAdd() 
    {
        $data['title'] = 'FTNF | Add Customer';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/a_addCustomer');
        $this->load->view('snips/a_start', $data);
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  
    
    public function salesLedger() 
    {
        $data['title'] = 'FTNF | Sales Ledger';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');
        
        $this->load->view('snips/a_restrict');   
        $this->load->view('+pages/admin/sales_ledger');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }  

 //    public function calendar() {
 //        $data['title'] = 'FTNF | Login';
 //       $this->load->view('snips/a_start', $data);
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