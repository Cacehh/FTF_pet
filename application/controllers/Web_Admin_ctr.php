<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Admin_ctr extends CI_Controller {

    public function index()
    {
        $data['title'] = 'FTNF | Login';
        $this->load->view('snips/a_start', $data);
        $data['title'] = 'FTNF | Web Admin';
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/web_admin/a_login');

		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }

	public function register()
    {
        $data['title'] = 'FTNF | Register';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/web_admin/a_register');

		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }
	public function forgotpassword()
    {
        $data['title'] = 'FTNF | Password';
        $this->load->view('snips/a_start', $data);
        $data['title'] = 'FTNF | Web Admin';
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/web_admin/a_forgotpassword');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }

	public function dashboard()
    {
        $data['title'] = 'FTNF | Dashboard';
        $this->load->view('snips/a_start', $data);
        $data['title'] = 'FTNF | Web Admin';
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
		$this->load->view('+pages/web_admin/a_header');

        $this->load->view('+pages/web_admin/dashboard');

		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
    }

    public function products()
    {
        $data['title'] = 'FTNF | Products';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');

        $this->load->view('+pages/web_admin/product_items');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function addProducts()
    {
        $data['title'] = 'FTNF | Add Products';
        $this->load->view('snips/a_start', $data);
        $data['title'] = 'FTNF | Products';
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');

        $this->load->view('+pages/web_admin/add_products2');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function pets()
    {
        $data['title'] = 'FTNF | Pets';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');

        $this->load->view('+pages/web_admin/product_pets');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

    public function addPets() {
        $data['title'] = 'FTNF | Add Pets';
        $this->load->view('snips/a_start', $data);
        $data['title'] = 'FTNF | Pets';
        $this->load->view('snips/a_start' , $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        $this->load->view('+pages/web_admin/a_header');

        $this->load->view('+pages/web_admin/add_pets2');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
    }

}
