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
        $this->load->model(array('register_model', 'Accounts_model', 'AddCustomer_model', 'Customer_model'));
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
          $this->load->view('+pages/admin/register');
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
        $this->load->view('register', $data);
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

        $this->load->view('+pages/admin/dashboard');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function accounts()
    {
       //Autoload configuration
        $config['base_url'] = site_url('Admin_ctr/accounts');
        $config['total_rows'] = $this->db->count_all('users');
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['accountlist'] = $this->Accounts_model->get_account($config["per_page"], $data['page'], NULL);

        $data['title'] = 'FTNF | Accounts';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/accounts', $data);

		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }

    public function searchAccounts()
    {
        // getting the search string
        $searchAccounts = ($this->input->post("account_name"))? $this->input->post("account_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("Admin_ctr/searchAccounts/$searchAccounts");
        $config['total_rows'] = $this->Accounts_model->get_account_count($searchAccounts);
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['accountlist'] = $this->Accounts_model->get_account($config['per_page'], $data['page'], $searchAccounts);

        $data['title'] = 'FTNF | Accounts';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/accounts', $data);

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

   

    public function customers() {
        $config['base_url'] = site_url('Admin_ctr/customers');
        $config['total_rows'] = $this->db->count_all('customers');
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['customerlist'] = $this->Customer_model->get_customer($config["per_page"], $data['page'], NULL);


       $data['title'] = 'FTNF | Customers';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');
        if ($type == '2') {
           $this->load->view('+pages/admin/a_Inventory_header');
        } else {
           $this->load->view('+pages/admin/a_header');
        }

        $this->load->view('+pages/admin/view_customer', $data);

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
        $this->form_validation->set_rules('fname', 'FirstName', 'required|min_length[2]|max_length[25]');

        //Validating Last Name Name Field
        $this->form_validation->set_rules('lname', 'LastName', 'required|min_length[2]|max_length[25]');

        //Validating Middle Name Name Field
        $this->form_validation->set_rules('mname', 'MiddleName', 'required|min_length[1]|max_length[2]');

        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{11}$/]');

        //Validating First Name Field
        $this->form_validation->set_rules('street', 'Street', 'required|min_length[2]|max_length[25]');

        //Validating First Name Field
        $this->form_validation->set_rules('city', 'City', 'required|min_length[2]|max_length[25]');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'FTNF | Add Customer';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);

            $this->load->view('snips/a_start', $data);
            $this->load->view('+pages/admin/add_customer');

            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');

        } else {

        //Setting values for table columns
        $data = array(
            'FirstName' => $this->input->post('fname'),
            'LastName' => $this->input->post('lname'),
            'MiddleName' => $this->input->post('mname'),
            'Customer_Gender' => $this->input->post('gender'),
            'Customer_Email' => $this->input->post('demail'),
            'Customer_Mobile' => $this->input->post('dmobile'),
            'Customer_Street' => $this->input->post('street'),
            'Customer_City' => $this->input->post('city'),
            'Customer_Barsub' => $this->input->post('barsub')
        );

            //Transfering data to Model
            $this->AddCustomer_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            $data['title'] = 'FTNF | Add Customer';

            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
            $this->load->view('snips/a_start', $data);
            $this->load->view('+pages/admin/add_customer');

            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
        }
    }

    public function searchCustomer() {
        // getting the search string
        $customerSearch = ($this->input->post("customer_name"))? $this->input->post("customer_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("Admin_ctr/customerSearch/$customerSearch");
        $config['total_rows'] = $this->Customer_model->get_customer_count($customerSearch);
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['customerlist'] = $this->Customer_model->get_customer($config['per_page'], $data['page'], $customerSearch);

        // loading of the view
         $data['title'] = 'FTNF | Customers';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $type = $this->session->userdata('acct_type');
            if ($type == '2') {
                 $this->load->view('+pages/admin/a_Inventory_header');
            } else {
                 $this->load->view('+pages/admin/a_header');
            }

        $this->load->view('+pages/admin/view_customer');

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
