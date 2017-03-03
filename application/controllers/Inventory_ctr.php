<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FIXED METHOD INDENTIONS
class Inventory_ctr extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
		$this->load->model(array('prod_model','prodinv_model', 'petinv_model', 'Inventory_model', 'PetType_model', 'ProdType_model', 'PType_model', 'PrdType_model'));

		if(empty($this->session->userdata('id'))) {
				$this->session->set_flashdata('flash_data', 'Please login First');
				redirect('Access_ctr');
		}

		$type = $this->session->userdata('acct_type');
		if ($type == '1') {
				$this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again HUEHUE</b>');
				redirect('Access_ctr');
		}
	}

	public function index() 
    {
		$data['title'] = 'FTNF | Inventory';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_Inventory_header');

		// $this->load->view('+pages/admin/invView');

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	public function products() 
    {
		//autoload configuration
		$config['base_url'] = site_url('Inventory_ctr/view_products');
		$config['total_rows'] = $this->db->count_all('product');
		$config['per_page'] = "10";

		$this->pagination->initialize($config);

		// getting the product list
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// getting the product list
		$data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);


		$data['title'] = 'FTNF | Products Inventory';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');
		$type = $this->session->userdata('acct_type');
		if ($type == '2') {
		   $this->load->view('+pages/admin/a_Inventory_header');
		} else {
		   $this->load->view('+pages/admin/a_header');
		}

		$this->load->view('+pages/admin/view_products', $data);

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	public function invProdSearch() 
    {
        // getting the search string
		$invProdSearch = ($this->input->post("prodinv_name"))? $this->input->post("prodinv_name") : "NIL";

		// limitation of the products being shown
		$config = array();
		$config['base_url'] = site_url("Inventory_ctr/invProdSearch/$invProdSearch");
		$config['total_rows'] = $this->prodinv_model->get_prodinv_count($invProdSearch);
		$config['per_page'] = "10";

		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		// retrieval of the product list
		$data['prodinvlist'] = $this->prodinv_model->get_prodinv($config['per_page'], $data['page'], $invProdSearch);

		// loading of the view
		$data['title'] = 'FTNF | ';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');

		$type = $this->session->userdata('acct_type');
		if ($type == '2') {
		   $this->load->view('+pages/admin/a_Inventory_header');
		} else {
		   $this->load->view('+pages/admin/a_header');
		}

		$this->load->view('+pages/admin/view_products', $data);

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	public function pets()
		{
        //autoload configuration
        $config['base_url'] = site_url('Inventory_ctr/pets');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['petinvlist'] = $this->petinv_model->get_petinv($config["per_page"], $data['page'], NULL);


        $data['title'] = 'FTNF | Pets Inventory';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$type = $this->session->userdata('acct_type');
		if ($type == '2') {
		   $this->load->view('+pages/admin/a_Inventory_header');
		} else {
		   $this->load->view('+pages/admin/a_header');
		}

        $this->load->view('+pages/admin/view_pets', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }       

    public function invPetSearch()
    {
        // getting the search string
        $invPetSearch = ($this->input->post("petinv_name"))? $this->input->post("petinv_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("Inventory_ctr/invPetSearch/$invPetSearch");
        $config['total_rows'] = $this->petinv_model->get_petinv_count($invPetSearch);
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['petinvlist'] = $this->petinv_model->get_petinv($config['per_page'], $data['page'], $invPetSearch);

        // loading of the view
         $data['title'] = 'FTNF | Pets Inventory';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $type = $this->session->userdata('acct_type');
			if ($type == '2') {
				 $this->load->view('+pages/admin/a_Inventory_header');
			} else {
				 $this->load->view('+pages/admin/a_header');
			}

        $this->load->view('+pages/admin/view_pets');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

	public function addProducts()
	{

        $config['base_url'] = site_url('Inventory_ctr/addProducts');
        $config['total_rows'] = $this->db->count_all('prodtype');
        $config['per_page'] = "50";

        // $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['prodtypelist'] = $this->PrdType_model->get_prodtype($config["per_page"], $data['page'], NULL);

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<script> alert("', '")</script>');

        // //Validating Product Name Field
        $this->form_validation->set_rules('prodname', 'ProdName', 'required|min_length[2]|max_length[25]');

        // //Validating Product Description Name Field
        $this->form_validation->set_rules('desc', 'Description', 'required|min_length[2]|max_length[30]');

        // // //Validating Product Type Field
        // $this->form_validation->set_rules('category', 'Category', 'required|min_length[2]|max_length[20]');

        //  //Validating Product Type Field
        // $this->form_validation->set_rules('type', 'ProductType', 'required|min_length[2]|max_length[20]');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('qty', 'Quantity', 'required|min_length[1]|max_length[10]');

        // //Validating Supply Price Name Field
        $this->form_validation->set_rules('supply', 'SupplyPrice', 'required|min_length[1]|max_length[10]');

        //Validating Markup Price Field
        $this->form_validation->set_rules('markup', 'MUPrice', 'required|min_length[1]|max_length[10]');

         //Validating Markup Price Field
        $this->form_validation->set_rules('amount', 'Amount', 'required|min_length[1]|max_length[10]');

        // EXCLUDE 
        //Validating First Name Field
        // $this->form_validation->set_rules('brand', 'Brand', 'required|min_length[2]|max_length[25]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'FTNF | Add Product';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
           
            $this->load->view('+pages/admin/add_product');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');

        } else {
            //Setting values for table columns
            $data = array(
                'ProdName' => $this->input->post('prodname'),
                'Description' => $this->input->post('desc'),
                'Category' => $this->input->post('category'),
                'Type' => $this->input->post('type'),
                'Quantity' => $this->input->post('qty'),
                'SupplyPrice' => $this->input->post('supply'),
                'MUPrice' => $this->input->post('markup'),
                'Amount' => $this->input->post('amount')
                // 'Brand' => $this->input->post('brand'),
                // 'Timestamp' => $this->input->post('retail')
                // 'Image' => $this->input->post('barsub')
            );
            //Transfering data to Model
            $this->Inventory_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            $data['title'] = 'FTNF | Add Products';

            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
            $this->load->view('+pages/admin/add_product');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
        }
    }

    public function addPets()
    {

        $config['base_url'] = site_url('Inventory_ctr/addPets');
        $config['total_rows'] = $this->db->count_all('pettype');
        $config['per_page'] = "50";

        // $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['pettypelist'] = $this->PType_model->get_pettype($config["per_page"], $data['page'], NULL);

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<script> alert("', '")</script>');

        // //Validating Product Name Field
        $this->form_validation->set_rules('prodname', 'ProdName', 'required|min_length[2]|max_length[25]');

        // //Validating Product Description Name Field
        $this->form_validation->set_rules('desc', 'Description', 'required|min_length[2]|max_length[30]');

        // // //Validating Product Type Field
        // $this->form_validation->set_rules('category', 'Category', 'required|min_length[2]|max_length[20]');

        //  //Validating Product Type Field
        // $this->form_validation->set_rules('type', 'ProductType', 'required|min_length[2]|max_length[20]');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('qty', 'Quantity', 'required|min_length[2]|max_length[10]');

        // //Validating Supply Price Name Field
        $this->form_validation->set_rules('supply', 'SupplyPrice', 'required|min_length[2]|max_length[10]');

        //Validating Markup Price Field
        $this->form_validation->set_rules('markup', 'MUPrice', 'required|min_length[2]|max_length[10]');

        //Validating Markup Price Field
        $this->form_validation->set_rules('amount', 'Amount', 'required|min_length[2]|max_length[10]');

        // EXCLUDE 
        //Validating First Name Field
        // $this->form_validation->set_rules('brand', 'Brand', 'required|min_length[2]|max_length[25]');

        if ($this->form_validation->run() == FALSE) {

        $data['title'] = 'FTNF | Add Pet';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header', $data);

        $this->load->view('+pages/admin/add_pet');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');

        } else {

        //Setting values for table columns
        $data = array(
            'ProdName' => $this->input->post('prodname'),
            'Description' => $this->input->post('desc'),
            'Category' => $this->input->post('category'),
            'Type' => $this->input->post('type'),
            'Quantity' => $this->input->post('qty'),
            'SupplyPrice' => $this->input->post('supply'),
            'MUPrice' => $this->input->post('markup'),
            'Amount' => $this->input->post('amount')
            // 'Brand' => $this->input->post('brand'),
            // 'Timestamp' => $this->input->post('retail')
            // 'Image' => $this->input->post('barsub')
        );

        //Transfering data to Model
        $this->Inventory_model->form_insert($data);
        $data['message'] = 'Data Inserted Successfully';

        $data['title'] = 'FTNF | Add Pets';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/add_pet');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
        }
    }

	public function editPet($prodID) {
		$data['title'] = 'FTNF | ';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');

		$type = $this->session->userdata('acct_type');
		if ($type == '2') {
			$this->load->view('+pages/admin/a_Inventory_header');
		} else {
			$this->load->view('+pages/admin/a_header');
		}

		$data2['petinvlist'] = $this->prodinv_model->edit_prodInv($prodID);
		$this->load->view('+pages/admin/edit_pet', $data2);

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	public function edit_product($editData) {
		$data['title'] = 'FTNF | ';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');
		$type = $this->session->userdata('acct_type');
		if ($type == '2') {
			 $this->load->view('+pages/admin/a_Inventory_header');
		} else {
			 $this->load->view('+pages/admin/a_header');
		}

		$data2['prodinvlist'] = $this->prodinv_model->edit_prodInv($editData);
		$this->load->view('+pages/admin/edit_product', $data2);

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	// Saves Edited fields to the database
    public function saveProd()
    {
        //autoload configuration
        $config['base_url'] = site_url('Inventory_ctr/view_products');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

        $prodID = $_POST['ProdID'];
        $prodName = $_POST['ProdName'];
        $category = $_POST['Category'];
        $amount = $_POST['Amount'];
        $quantity = $_POST['Quantity'];

        $this->prodinv_model->save_editProdInv($prodID, $prodName, $category, $quantity, $amount);

        redirect('/Inventory_ctr/products');
        //FIXX add confirmation that the change was made
    }

	// function to save edited pet information
	public function savePet()
	{
		//autoload configuration
		$config['base_url'] = site_url('Inventory_ctr/pets');
		$config['total_rows'] = $this->db->count_all('product');
		$config['per_page'] = "10";

		$this->pagination->initialize($config);

		// getting the product list
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

		$prodID = $_POST['ProdID'];
		$prodName = $_POST['ProdName'];
		$category = $_POST['Category'];
		$amount = $_POST['Amount'];
		$quantity = $_POST['Quantity'];

		$this->petinv_model->save_editPetInv($prodID, $prodName, $category, $quantity, $amount);

		redirect('/Inventory_ctr/pets');
	}

	// function to save edited product information
	public function invSaveEditProd()
	{
		//autoload configuration
		$config['base_url'] = site_url('Inventory_ctr/view_products');
		$config['total_rows'] = $this->db->count_all('product');
		$config['per_page'] = "10";

		$this->pagination->initialize($config);

		// getting the product list
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

		$prodID = $_POST['ProdID'];
		$prodName = $_POST['ProdName'];
		$category = $_POST['Category'];
		$amount = $_POST['Amount'];
		$quantity = $_POST['Quantity'];

		$this->prodinv_model->save_editProdInv($prodID, $prodName, $category, $quantity, $amount);

		redirect('/Inventory_ctr/products');
	}

	// function to save edited pet information
	public function invSaveEditPet()
	{
		//autoload configuration
		$config['base_url'] = site_url('Inventory_ctr/view_pets');
		$config['total_rows'] = $this->db->count_all('product');
		$config['per_page'] = "10";

		$this->pagination->initialize($config);

		// getting the product list
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

		$data['title'] = 'FTNF | ';
		$this->load->view('snips/a_start', $data);
		$this->load->view('snips/css_materialize');
		$this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/admin/a_Inventory_header');

		$prodID = $_POST['ProdID'];
		$prodName = $_POST['ProdName'];
		$category = $_POST['Category'];
		$amount = $_POST['Amount'];
		$quantity = $_POST['Quantity'];

		$this->prodinv_model->save_editPetInv($prodID, $prodName, $category, $quantity, $amount);

		$this->load->view('snips/js_jquery300');
		$this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');

		redirect('/Inventory_ctr/pets');
	}

	// function to delete products
	public function invDeleteProd($prodID)
	{
		$this->prodinv_model->delete_prodInv($prodID);
		redirect('/Inventory_ctr/products');
	}

	// function to delete pets
	public function invDeletePet($prodID)
	{
		$this->prodinv_model->delete_prodInv($prodID);
		redirect('/Inventory_ctr/pets');
	}

    public function prodType()
    {

        //autoload configuration
        $config['base_url'] = site_url('Inventory_ctr/prodType');
        // $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "10";
        // $this->db->count_all_results('product');
        // $this->db->from('product');

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['typelist'] = $this->Inventory_model->get_prodtype($config["per_page"], $data['page'], NULL);

        $data['title'] = 'FTNF | Product Type';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');

        if ($type == '2') {
            $this->load->view('+pages/admin/a_Inventory_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }
        $this->load->view('+pages/admin/product_type', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function prodTypeSearch() {
        // getting the search string
        $prodTypeSearch = ($this->input->post("prodType_name"))? $this->input->post("prodType_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("Inventory_ctr/prodTypeSearch/$prodTypeSearch");
        $config['total_rows'] = $this->Inventory_model->get_prodtype_count($prodTypeSearch);
        $config['per_page'] = "10";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['typelist'] = $this->Inventory_model->get_prodtype($config['per_page'], $data['page'], $prodTypeSearch);

        $data['title'] = 'FTNF | Product Type';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');

        if ($type == '2') {
            $this->load->view('+pages/admin/a_Inventory_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }
        $this->load->view('+pages/admin/product_type', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function prodTypeNum() {

        //autoload configuration
        $config['base_url'] = site_url('Inventory_ctr/prodTypeNum');
        // $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "10";
        // $this->db->count_all_results('product');
        // $this->db->from('product');

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['typenum'] = $this->Inventory_model->get_prod_num($config["per_page"], $data['page'], NULL);

        $data['title'] = 'FTNF | Product Type';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');

        if ($type == '2') {
            $this->load->view('+pages/admin/a_Inventory_header');
        } else {
            $this->load->view('+pages/admin/a_header');
        }
        $this->load->view('+pages/admin/product_type', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function addPetType() {

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<script> alert("', '")</script>');

        //Validating Product Name Field
        $this->form_validation->set_rules('pettype', 'PetType', 'required|min_length[2]|max_length[15]');

        //Validating Product Type Field
        // $this->form_validation->set_rules('category', 'Category', 'required|min_length[2]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'FTNF | Add Pet Type';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
           
            $this->load->view('+pages/admin/add_pettype');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');

        } else {
            //Setting values for table columns
            $data = array(
                'Type' => $this->input->post('pettype')
            );

            //Transfering data to Model
            $this->PetType_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            $data['title'] = 'FTNF | Add Pet Type';

            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
            $this->load->view('+pages/admin/add_pettype');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
        }

    }

    public function addProdType() {

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<script> alert("', '")</script>');

        //Validating Product Name Field
        $this->form_validation->set_rules('prodtype', 'ProdType', 'required|min_length[2]|max_length[15]');

        //Validating Product Type Field
        // $this->form_validation->set_rules('category', 'Category', 'required|min_length[2]|max_length[20]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'FTNF | Add Product Type';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
           
            $this->load->view('+pages/admin/add_prodtype');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');

        } else {
            //Setting values for table columns
            $data = array(
                'Type' => $this->input->post('prodtype')
            );

            //Transfering data to Model
            $this->ProdType_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            $data['title'] = 'FTNF | Add Product Type';

            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
            $this->load->view('+pages/admin/add_prodtype');
            
            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
        }

    }
}
