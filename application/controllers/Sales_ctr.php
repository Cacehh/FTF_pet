<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_ctr extends CI_Controller {
		public function __construct()
		{
				parent::__construct();
				$this->load->database();
				$this->load->library('pagination');

				if(empty($this->session->userdata('id'))) {
						$this->session->set_flashdata('flash_data', 'Please login First');
						redirect('Access_ctr');
				}
				$type = $this->session->userdata('acct_type');
				if ($type == '1') {
						$this->session->set_flashdata('flash_data', '<b>This is a restricted page. Please login again</b>');
						redirect('Access_ctr');
				}
		}
		public function invoice() {

	        $data['title'] = 'FTNF | Dashboard'; 
	        $this->load->view('snips/a_start', $data);
	        $this->load->view('snips/css_materialize');
	        $this->load->view('snips/css_materialize_icon');
	        $this->load->view('+pages/admin/a_header', $data);

	        $this->load->view('+pages/admin/sales_ledger');

	        $this->load->view('snips/js_jquery300');
	        $this->load->view('snips/js_materialize');
	        $this->load->view('snips/z_end');


		}	
		public function statements() {
		    $data['title'] = 'FTNF | Dashboard'; 
	        $this->load->view('snips/a_start', $data);
	        $this->load->view('snips/css_materialize');
	        $this->load->view('snips/css_materialize_icon');
	        $this->load->view('+pages/admin/a_header', $data);

	        $this->load->view('+pages/admin/sales_ledger');

	        $this->load->view('snips/js_jquery300');
	        $this->load->view('snips/js_materialize');
	        $this->load->view('snips/z_end');



		}		
}
?>