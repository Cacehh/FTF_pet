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
            $this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again</b>');
            redirect('Access_ctr');
        }

        $this->load->model('register_model', 'AddCustomer_model');
    }

    public function index() 
    {

        // print_r($this->session->all_userdata());
        $data['title'] = 'FTNF | Dashboard'; 
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header', $data);

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

        //Including validation library
            $this->load->library('form_validation');

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            //Validating Name Field
            $this->form_validation->set_rules('fname', 'lname', 'mname', 'username', 'required|min_length[8]|max_length[20]');

            //Validating Email Field
            $this->form_validation->set_rules('demail, Email', 'required|valid_email');

            //Validating Mobile no. Field
            $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{11}$/]');

            //Validating Address Field
            $this->form_validation->set_rules('dpassword', 'Password', 'required|valid_password', 'required|min_length[10]|max_length[50]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('+pages/admin/a_register');
        } else {

        //Setting values for tabel columns
        $data = array(
            'FirstName' => $this->input->post('fname'),
            'LastName' => $this->input->post('lname'),
            'Middle_Name' => $this->input->post('mname'),
            'username' => $this->input->post('username'),
            'user_email' => $this->input->post('demail'),
            'user_email' => $this->input->post('demail'),
            'user_password' => $this->input->post('dpassword')
        );

            //Transfering data to Model
            $this->register_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            //Loading View
            $this->load->view('a_register', $data);
        }


        $data['title'] = 'FTNF | Register';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        		
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
        $data['title'] = 'FTNF | Accounts';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

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

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating First Name Field
        $this->form_validation->set_rules('fname', 'FirstName', 'required|min_length[2]|max_length[40]');

        //Validating Last Name Name Field
        $this->form_validation->set_rules('lname', 'LastName', 'required|min_length[1]|max_length[40]');

         //Validating Phone no. Field
        $this->form_validation->set_rules('dphone', 'Phone No.', 'required|regex_match[/^[0-9]{11}$/]');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{11}$/]');

        //Validating Email Field
            $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Street Field
        $this->form_validation->set_rules('street', 'Street', 'required|min_length[1]|max_length[30]');

        //Validating City Field
        $this->form_validation->set_rules('city', 'City', 'required|min_length[1]|max_length[30]');

        //Validating Barangay/Subdivision Field
        $this->form_validation->set_rules('barsub', 'Barsub', 'required|min_length[1]|max_length[40]');

        //Validating Province Field
        $this->form_validation->set_rules('prov', 'Province', 'required|min_length[1]|max_length[40]');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'FTNF | Add Customer';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);

            $this->load->view('+pages/admin/addCustomer');
            $this->load->view('snips/a_start', $data);
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
            
        } else {

        //Setting values for table columns
        $data = array(
            'First_Name' => $this->input->post('fname'),
            'Last_Name' => $this->input->post('lname'),
            'Customer_Phone' => $this->input->post('dphone'),
            'Customer_Mobile' => $this->input->post('dmobile'),
            'Customer_Email' => $this->input->post('demail'),
            'Customer_Street' => $this->input->post('street'),
            'Customer_City' => $this->input->post('city'),
            'Customer_Brgy' => $this->input->post('barsub'),
            'Customer_Prov' => $this->input->post('prov')
        );

        //Transfering data to Model
        $this->AddCustomer_model->form_insert($data);
        $data['message'] = 'Data Inserted Successfully';
        $data['title'] = 'FTNF | Add Customer';
        $this->load->view('+pages/admin/addCustomer');

        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header', $data);
        $this->load->view('snips/a_start', $data);
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
        }
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