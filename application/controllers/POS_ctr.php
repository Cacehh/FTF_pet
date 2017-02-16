<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POS_ctr extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model(array('prod_model','prodinv_model', 'petinv_model'));

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'Please login First');
            redirect('Access_ctr');
        }
        $type = $this->session->userdata('acct_type'); 
        if ($type == '2') {
            $this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again</b>');
            redirect('Access_ctr');
        }
    }
    
    public function index()
    {
      print_r($this->session->all_userdata());

        $data = array(
                'id'      => 'sku_123ABC',
                'qty'     => 1,
                'price'   => 39.95,
                'name'    => 'T-Shirt',
                'coupon'         => 'XMAS-50OFF'
        );

        $this->cart->insert($data);


        $data = array(
            'rowid' => '1164a59fe023937d41e11ddf6871b50c',
            'qty'   => 0
        );

        $this->cart->update($data);
        
        //autoload configuration
        $config['base_url'] = site_url('POS_ctr/index');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "10";
        
        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        // getting the product list
        $data['prodlist'] = $this->prod_model->get_product($config["per_page"], $data['page'], NULL);

        $data['acct_type'] = $this->session->userdata('acct_type'); 
        
        $data['title'] = 'FTNF | Web Register';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');
        if ($type == '1') {
            $this->load->view('+pages/admin/a_POS_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }
        
        $this->load->view('+pages/admin/pos', $data);
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');


    }  

    function search()
    {
        $data['acct_type'] = $this->session->userdata('acct_type'); 
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
        $data['title'] = 'FTNF | Web Register'; 
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');
        if ($type == '1') {
            $this->load->view('+pages/admin/a_POS_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }

        $this->load->view('+pages/admin/pos', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }   

    public function history() {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');
        if ($type == '1') {
            $this->load->view('+pages/admin/a_POS_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }
        
        $this->load->view('+pages/admin/pos_history');
        
        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }	

 //    public function products() {

 //        //autoload configuration
 //        $config['base_url'] = site_url('POS_ctr/products');
 //        $config['total_rows'] = $this->db->count_all('product');
 //        $config['per_page'] = "20";
        
 //        $this->pagination->initialize($config);

 //        // getting the product list
 //        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
 //        // getting the product list
 //        $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);


 //        $data['title'] = 'FTNF | Products Inventory';
 //        $this->load->view('snips/a_start', $data);
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_POS_header');
        
 //        $this->load->view('+pages/admin/products', $data);
        
 //        $this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_materialize');
 //        $this->load->view('snips/z_end');
	// }	

 //    public function invProdSearch() {

 //         // getting the search string
 //        $invProdSearch = ($this->input->post("prodinv_name"))? $this->input->post("prodinv_name") : "NIL";

 //        // limitation of the products being shown
 //        $config = array();
 //        $config['base_url'] = site_url("POS_ctr/invProdSearch/$invProdSearch");
 //        $config['total_rows'] = $this->prodinv_model->get_prodinv_count($invProdSearch);
 //        $config['per_page'] = "10";

 //        $this->pagination->initialize($config);

 //        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

 //        // retrieval of the product list
 //        $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config['per_page'], $data['page'], $invProdSearch);

 //        // loading of the view
 //        $data['title'] = 'FTNF | ';
 //        $this->load->view('snips/a_start', $data);
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_POS_header');
        
 //        $this->load->view('+pages/admin/products', $data);
        
 //        $this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_materialize');
 //        $this->load->view('snips/z_end');
 //    }
    
 //    public function pets()
 //    {
 //         //autoload configuration
 //        $config['base_url'] = site_url('POS_ctr/pets');
 //        $config['total_rows'] = $this->db->count_all('product');
 //        $config['per_page'] = "20";
        
 //        $this->pagination->initialize($config);

 //        // getting the product list
 //        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
 //        // getting the product list
 //        $data['petinvlist'] = $this->petinv_model->get_petinv($config["per_page"], $data['page'], NULL);


 //        $data['title'] = 'FTNF | Pets Inventory';
 //        $this->load->view('snips/a_start', $data);
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_POS_header');
        
 //        $this->load->view('+pages/admin/product_pets', $data);
        
 //        $this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_materialize');
 //        $this->load->view('snips/z_end');
 //    }   

 //     public function invPetSearch() 
 //     {

 //        // getting the search string
 //        $invPetSearch = ($this->input->post("petinv_name"))? $this->input->post("petinv_name") : "NIL";

 //        // limitation of the products being shown
 //        $config = array();
 //        $config['base_url'] = site_url("POS_ctr/invPetSearch/$invPetSearch");
 //        $config['total_rows'] = $this->petinv_model->get_petinv_count($invPetSearch);
 //        $config['per_page'] = "10";

 //        $this->pagination->initialize($config);

 //        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

 //        // retrieval of the product list
 //        $data['petinvlist'] = $this->petinv_model->get_petinv($config['per_page'], $data['page'], $invPetSearch);

 //        // loading of the view
 //         $data['title'] = 'FTNF | Pets Inventory';
 //        $this->load->view('snips/a_start', $data);
 //        $this->load->view('snips/css_materialize');
 //        $this->load->view('snips/css_materialize_icon');
 //        $this->load->view('+pages/admin/a_POS_header');
        
 //        $this->load->view('+pages/admin/product_pets');
        
 //        $this->load->view('snips/js_jquery300');
 //        $this->load->view('snips/js_materialize');
 //        $this->load->view('snips/z_end');
 //    }
    
	
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
        // $this->load->view('snips/a_start', $data);
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
        // $this->load->view('snips/a_start', $data);
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
    			if($this->session->userdata('logged_in'))
		{	
				$cart_info = $_POST['cart'] ;
				foreach( $cart_info as $id => $cart)
				{
				$ProdID = $cart['ProdID'];
				$Amount = $cart['amount'];
				$SubAmount = $Amount * $cart['qty'];

				$qty = $cart['qty'];
		
				$data = array(
				'ProdID' => $ProdID,
				'Price' => $Price,
				'Amount' => $Amount,
				'qty' => $qty
				);
		
				$this->cart->update($data);
				}
				redirect('pos.php');
		}else{
			redirect(base_url(''));
		}		
	}
	

    //function for the shopping cart feature for the POS.
    public function shopcart(){
    	if($this->session->userdata('logged_in')){
    		$insert_data = array( 
    		'ProdID'=>$this->input->post('ProdID'),
    		'ProdName'=>$this->input->post('ProdName'),
    		'Category'=>$this->input->post('Category'),
			'Amount'=>$this->input->post('Amount'),
);
    		//add item into cart
    		$this->cart->insert($insert_data);
    		//function to show the inserted data in the cart.
    		redirect('pos.php');
    	}

    } 

    //function for removing an item in the shopcart in the POS.
    public function remove_from_cart($rowid){
    						// Check rowid value.
					if ($rowid==="all"){
					// Destroy data which store in session.
					$this->cart->destroy();
					}else{
					// Destroy selected rowid in session.
					$data = array(
					'rowid' => $rowid,
					'qty' => 0
					);
					// Update cart data, after cancel.
					$this->cart->update($data);
					}
		
					// This will show cancel data in cart.
					redirect('pos.php');
    }

      
}
