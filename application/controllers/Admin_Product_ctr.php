<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Product_ctr extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');

        if($this->session->userdata('acct_type') == '1'){
            $this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again</b>');
            redirect('Access_ctr');
        }

        $this->load->model(array('prodinv_model', 'petinv_model', 'Suppliers_model'));
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
        $type = $this->session->userdata('acct_type');
        $this->load->view('+pages/admin/a_Inventory_header');

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
        $this->load->view('+pages/admin/a_Inventory_header');

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
        $this->load->view('+pages/admin/a_POS_header', $data);

        $this->load->view('+pages/admin/a_product_pets');

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
        $this->load->view('+pages/admin/a_header', $data);

        $this->load->view('+pages/admin/product_type');

		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	public function supplier()
  {
        $config['base_url'] = site_url('Admin_Product_ctr/supplier');
        $config['total_rows'] = $this->db->count_all('suppliers');
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        // getting the product list
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // getting the product list
        $data['supplierlist'] = $this->Suppliers_model->get_supplier($config["per_page"], $data['page'], NULL);


       $data['title'] = 'FTNF | Suppliers';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $type = $this->session->userdata('acct_type');
        if ($type == '2') {
           $this->load->view('+pages/admin/a_Inventory_header');
        } else {
           $this->load->view('+pages/admin/a_header');
        }

        $this->load->view('+pages/admin/product_suppliers', $data);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

	public function addSupplier()
  {

        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating First Name Field
        $this->form_validation->set_rules('supname', 'SupplierName', 'required|min_length[2]|max_length[25]');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('supcontact', 'SupplierContact', 'required|regex_match[/^[0-9]{11}$/]');

        // //Validating Last Name Name Field
        // $this->form_validation->set_rules('supcontact', 'SupplierContact', 'required|min_length[2]|max_length[]');

        //Validating Middle Name Name Field
        $this->form_validation->set_rules('suploc', 'SupplierLocation', 'required|min_length[1]|max_length[35]');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'FTNF | Add Supplier';
            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);

            $this->load->view('snips/a_start', $data);
            $this->load->view('+pages/admin/add_suppliers');

            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');

        } else {

        //Setting values for table columns
        $data = array(
            'Supplier_Name' => $this->input->post('supname'),
            'Supplier_Contact' => $this->input->post('supcontact'),
            'Supplier_Location' => $this->input->post('suploc')
        );

            //Transfering data to Model
            $this->Suppliers_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';

            $data['title'] = 'FTNF | Add Supplier';

            $this->load->view('snips/a_start', $data);
            $this->load->view('snips/css_materialize');
            $this->load->view('snips/css_materialize_icon');
            $this->load->view('+pages/admin/a_header', $data);
            $this->load->view('snips/a_start', $data);
            $this->load->view('+pages/admin/add_suppliers');

            $this->load->view('snips/js_jquery300');
            $this->load->view('snips/js_materialize');
            $this->load->view('snips/z_end');
	       }
  }

  public function supplierSearch() {
        // getting the search string
        $supplierSearch = ($this->input->post("supplier_name"))? $this->input->post("supplier_name") : "NIL";

        // limitation of the products being shown
        $config = array();
        $config['base_url'] = site_url("Admin_Product_ctr/$supplierSearch");
        $config['total_rows'] = $this->Suppliers_model->get_supplier_count($supplierSearch);
        $config['per_page'] = "20";

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        // retrieval of the product list
        $data['supplierlist'] = $this->Suppliers_model->get_supplier($config['per_page'], $data['page'], $supplierSearch);

        // loading of the view
         $data['title'] = 'FTNF | Suppliers';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $type = $this->session->userdata('acct_type');
            if ($type == '2') {
                 $this->load->view('+pages/admin/a_Inventory_header');
            } else {
                 $this->load->view('+pages/admin/a_header');
            }

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
      $this->load->view('+pages/admin/a_invEditProd', $data2);

      $this->load->view('snips/js_jquery300');
      $this->load->view('snips/js_materialize');
      $this->load->view('snips/z_end');
    }

    public function editPet($prodID) {
        $data['title'] = 'FTNF | ';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/admin/a_header');

        $data2['petinvlist'] = $this->prodinv_model->edit_prodInv($prodID);
        $this->load->view('+pages/admin/a_invEditPet', $data2);

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    // function to save edited product information
    // public function invSaveEditProd()
    // {
    //   //autoload configuration
    //   $config['base_url'] = site_url('Inventory_ctr/view_products');
    //   $config['total_rows'] = $this->db->count_all('product');
    //   $config['per_page'] = "10";

    //   $this->pagination->initialize($config);

    //   // getting the product list
    //   $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    //   $data['prodinvlist'] = $this->prodinv_model->get_prodinv($config["per_page"], $data['page'], NULL);

    //   $data['title'] = 'FTNF | ';
    //   $this->load->view('snips/a_start', $data);
    //   $this->load->view('snips/css_materialize');
    //   $this->load->view('snips/css_materialize_icon');
    //   $this->load->view('+pages/admin/a_Inventory_header');

    //   $prodID = $_POST['ProdID'];
    //   $prodName = $_POST['ProdName'];
    //   $category = $_POST['Category'];
    //   $amount = $_POST['Amount'];
    //   $quantity = $_POST['Quantity'];

    //   $this->prodinv_model->save_editProdInv($prodID, $prodName, $category, $quantity, $amount);

    //   $this->load->view('snips/js_jquery300');
    //   $this->load->view('snips/js_materialize');
    //   $this->load->view('snips/z_end');

    //   redirect('/Admin_Product_ctr/index');
    // }

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

      redirect('/Admin_Product_ctr/index');
    }

    // function to delete products
    public function invDeleteProd($prodID)
    {
        $this->prodinv_model->delete_prodInv($prodID);
        redirect('/Admin_Product_ctr/view_products');
    }

    // function to delete pets
    public function invDeletePet($prodID)
    {
        $this->prodinv_model->delete_prodInv($prodID);
        redirect('/Admin_Product_ctr/pets');
    }
}
