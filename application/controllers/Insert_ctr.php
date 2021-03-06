<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class Insert_ctr extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('Insert_model');
		}

		function index() {
			//Including validation library
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			//Validating First Name Field
			$this->form_validation->set_rules('fname', 'FirstName', 'required|min_length[1]|max_length[40]');

			//Validating Last Name Name Field
			$this->form_validation->set_rules('lname', 'LastName', 'required|min_length[1]|max_length[40]');

			//Validating Middle Name Field
			$this->form_validation->set_rules('minitial', 'MiddleInitial', 'required|min_length[1]|max_length[1]');

			//Validating Username Field
			$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

			//Validating Email Field
			$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

			$this->form_validation->set_rules('dacct', 'AccountType', 'required|min_length[1]|max_length[1]');

			//Validating Mobile no. Field
			$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{11}$/]');

			//Validating Password Field
			$this->form_validation->set_rules('dpassword', 'Password', 'required|min_length[3]|max_length[30]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('+pages/admin/insert_view');

		} else {

		//Setting values for tabel columns
		$data = array(
			'FirstName' => $this->input->post('fname'),
			'LastName' => $this->input->post('lname'),
			'MiddleInitial' => $this->input->post('minitial'),
			'username' => $this->input->post('dname'),
			'user_email' => $this->input->post('demail'),
			'acct_type' => $this->input->post('dacct'),
			'user_mobile' => $this->input->post('dmobile'),
			'user_password' => $this->input->post('dpassword')
		);

			//Transfering data to Model
			$this->Insert_model->form_insert($data);
			$data['message'] = 'Data Inserted Successfully';

			//Loading View
			$this->load->view('+pages/admin/insert_view', $data);
		}
	}	
}
?>