<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_ctr extends CI_Controller {

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
				if ($type == '1') {
						$this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again HUEHUE</b>');
						redirect('Access_ctr');
				}
		}

		public function index() {
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


		public function products() {

				//autoload configuration
				$config['base_url'] = site_url('Inventory_ctr/products');
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

				$this->load->view('+pages/admin/products', $data);

				$this->load->view('snips/js_jquery300');
				$this->load->view('snips/js_materialize');
				$this->load->view('snips/z_end');
		}


		public function invProdSearch() {
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
				$this->load->view('+pages/admin/a_Inventory_header');

				$this->load->view('+pages/admin/products', $data);

				$this->load->view('snips/js_jquery300');
				$this->load->view('snips/js_materialize');
				$this->load->view('snips/z_end');
		}

		public function pets() {
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

			$this->load->view('+pages/admin/product_pets', $data);

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
			$this->load->view('+pages/admin/a_Inventory_header');

			$this->load->view('+pages/admin/product_pets');

			$this->load->view('snips/js_jquery300');
			$this->load->view('snips/js_materialize');
			$this->load->view('snips/z_end');
		}

		public function invPet() {
			$data['title'] = 'FTNF | ';
			$this->load->view('snips/a_start', $data);
			$this->load->view('snips/css_materialize');
			$this->load->view('snips/css_materialize_icon');
			$this->load->view('+pages/admin/a_Inventory_header');

			$this->load->view('+pages/admin/invPet');

			$this->load->view('snips/js_jquery300');
			$this->load->view('snips/js_materialize');
			$this->load->view('snips/z_end');
		}

		public function invProduct() {
			$data['title'] = 'FTNF | ';
			$this->load->view('snips/a_start', $data);
			$this->load->view('snips/css_materialize');
			$this->load->view('snips/css_materialize_icon');
			$this->load->view('+pages/admin/a_Inventory_header');

			$this->load->view('+pages/admin/invProduct');

			$this->load->view('snips/js_jquery300');
			$this->load->view('snips/js_materialize');
			$this->load->view('snips/z_end');
		}

		public function addPet() {
				$data['title'] = 'FTNF | ';
				$this->load->view('snips/a_start', $data);
				$this->load->view('snips/css_materialize');
				$this->load->view('snips/css_materialize_icon');
				$this->load->view('+pages/admin/a_Inventory_header');

				$this->load->view('+pages/admin/invAddPet');

				$this->load->view('snips/js_jquery300');
				$this->load->view('snips/js_materialize');
				$this->load->view('snips/z_end');
		}

		public function addProduct() {
				$data['title'] = 'FTNF | ';
				$this->load->view('snips/a_start', $data);
				$this->load->view('snips/css_materialize');
				$this->load->view('snips/css_materialize_icon');
				$this->load->view('+pages/admin/a_Inventory_header');

				$this->load->view('+pages/admin/invAddProd');

				$this->load->view('snips/js_jquery300');
				$this->load->view('snips/js_materialize');
				$this->load->view('snips/z_end');
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
			$this->load->view('+pages/admin/a_Inventory_header');

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
	      $config['base_url'] = site_url('Inventory_ctr/products');
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

	      $this->prodinv_model->save_editProdInv($prodID, $prodName, $category, $quantity, $amount);

	      $this->load->view('snips/js_jquery300');
	      $this->load->view('snips/js_materialize');
	      $this->load->view('snips/z_end');

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
			$config['base_url'] = site_url('Inventory_ctr/products');
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
			$config['base_url'] = site_url('Inventory_ctr/pets');
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
}
