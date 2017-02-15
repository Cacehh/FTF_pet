<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Product_ctr extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');

        if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'Please login First');
            redirect('Access_ctr');
        }

        if($this->session->userdata('acct_type') == '2'){
            $this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again</b>');
            redirect('Access_ctr');
        }

        $this->load->model(array('prodinv_model', 'petinv_model'));
    }

    public function index()
    {

        ///autoload configuration
        $config['base_url'] = site_url('Admin_Product_ctr/index');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

        $data['title'] = 'FTNF | Summary Page';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        //Index Page for all existing pages
        $this->load->view('+pages/admin/a_products', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function invprodSearch() {

        // getting the search string
        $invProdSearch = ($this->input->post("prodinv_name"))? $this->input->post("prodinv_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("POS_ctr/invProdSearch/$invProdSearch");
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
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_products', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function products() {
       ///autoload configuration
       $config['base_url'] = site_url('Admin_Product_ctr/index');
       $config['total_rows'] = $this->db->count_all('product');
       $config['per_page'] = "20";

       $this->pagination->initialize($config);

       // getting the product list
       $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

       // getting the product list
       $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

       $data['title'] = 'FTNF | Summary Page';
       $this->load->view('snips/a_start', $data);
       $this->load->view('snips/css_materialize');
       $this->load->view('snips/css_materialize_icon');
       $this->load->view('+pages/admin/a_header');

       //Index Page for all existing pages
       $this->load->view('+pages/admin/a_products', $data);

       $this->load->view('snips/js_jquery300');
       $this->load->view('snips/js_materialize');
       $this->load->view('snips/z_end');
    }

	public function pets()
    {
         //autoload configuration
        $config['base_url'] = site_url('Admin_Product_ctr/pets');
        $config['total_rows'] = $this->db->count_all('product');
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['petinvlist'] = $this->petinv_model->get_petinv($config["per_page"], $data['page'], NULL);


        $data['title'] = 'FTNF | Pets Inventory';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_product_pets', $data);

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
        $config['base_url'] = site_url("Admin_Product)ctr/invPetSearch/$invPetSearch");
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
        $this->load->view('+pages/admin/a_POS_header');

        $this->load->view('+pages/admin/a_product_pets');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

  	public function addProducts()
      {
        $data['title'] = 'FTNF | Add Products';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/add_products');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
  	}

    public function addPets()
    {
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

    public function type()
    {
      $data['title'] = 'FTNF | Product Type';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');

      $this->load->view('+pages/admin/product_type');

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
    }

  	public function supplier()
    {
      $data['title'] = 'FTNF | Suppliers';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');

      $this->load->view('+pages/admin/product_suppliers');

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
  	}

  	public function addSupplier()
    {
      $data['title'] = 'FTNF | Add Suppliers';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');
      //Create and change the page
      $this->load->view('+pages/admin/product_suppliers');

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
  	}

  	public function brands()
    {
      $data['title'] = 'FTNF | Brands';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');

      $this->load->view('+pages/admin/product_brand');

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
  	}

  	public function addBrands()
    {
      $data['title'] = 'FTNF | Add Brands';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');
      //Create and change the page
      $this->load->view('+pages/admin/product_brand');

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
  	}

    public function tags()
    {
        $data['title'] = 'FTNF | Tags';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $this->load->view('+pages/admin/product_tags');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function addTags()
    {
        $data['title'] = 'FTNF | Tags';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');
        //Create and change page
        $this->load->view('+pages/admin/product_tags');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
	   }

    public function invEditProd($editData) {
      $data['title'] = 'FTNF | ';
      $this->load->view('snips/a_start', $data);
      $this->load->view('snips/css_materialize');
      $this->load->view('snips/css_materialize_icon');
      $this->load->view('+pages/admin/a_header');

      $data2['prodinvlist'] = $this->prodinv_model->edit_prodInv($editData);
      $this->load->view('+pages/admin/invEditProd', $data2);

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
    }

    public function invEditPet($prodID) {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $data2['petinvlist'] = $this->prodinv_model->edit_prodInv($prodID);
        $this->load->view('+pages/admin/invEditPet', $data2);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
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

      redirect('/Admin_Product_ctr/index');
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

      $this->petinv_model->save_editPetInv($prodID, $prodName, $category, $quantity, $amount);

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');

      redirect('/Admin_Product_ctr/index');
    }

    // function to delete products
    public function invDeleteProd($prodID)
    {
        $this->prodinv_model->delete_prodInv($prodID);
        redirect('/Admin_Product_ctr/products');
    }

    // function to delete pets
    public function invDeletePet($prodID)
    {
        $this->prodinv_model->delete_prodInv($prodID);
        redirect('/Admin_Product_ctr/pets');
    }
}
