<?php


Class Access_ctr extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form validation library
		$this->load->library('form_validation');

		// Load database
		$this->load->model('login_database');
	}

	//Call login page
	public function index() {
        $data['title'] = 'FTNF | Login';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/admin/a_login');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
	}

	//Call register page
	public function user_registration() {
        $data['title'] = 'FTNF | Register';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');
        
        $this->load->view('+pages/admin/a_register');
		
		$this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
		$this->load->view('snips/z_end');
	}

	// Validate and store registration data in database
	public function user_registration_check() {

		// Check validation for user input in SignUp form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		// $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
/*		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
			'user_name' => $this->input->post('username'),
			// 'user_email' => $this->input->post('email_value'),
			'user_password' => $this->input->post('password')
			);
			$result = $this->login_database->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('login_form', $data);
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->load->view('registration_form', $data);
			}
		}*/
	}

	// Check for user login process
	public function process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				//Load main Dashboard
		        $data['title'] = 'FTNF | Dashboard';
		        $this->load->view('snips/a_start', $data);
		        $this->load->view('snips/css_materialize');
		        $this->load->view('snips/css_materialize_icon');
		        $this->load->view('+pages/admin/a_header');
		        
		        //Restrict for session handling
		        $this->load->view('snips/a_restrict');
		        $this->load->view('+pages/admin/dashboard');
		        
		        $this->load->view('snips/js_jquery300');
		        $this->load->view('snips/js_materialize');
		        $this->load->view('snips/z_end');
			}else{
				//Back to login page
		        $data['title'] = 'FTNF | Login';
		        $this->load->view('snips/a_start', $data);
		        $this->load->view('snips/css_materialize');
		        $this->load->view('snips/css_materialize_icon');

		        $this->load->view('+pages/admin/a_login');

		        $this->load->view('snips/js_jquery300');
		        $this->load->view('snips/js_materialize');
		        $this->load->view('snips/z_end');
			}
		} else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			$result = $this->login_database->login($data);
			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);
				if ($result != false) {
					$session_data = array(
					'username' => $result[0]->user_name
					// 'email' => $result[0]->user_email,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					//Load main Dashboard
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
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password',
				'title' => 'FTNF | Login'
				);
				//Back to login page
		        // $data['title'] = 'FTNF | Login';
		        $this->load->view('snips/a_start', $data);
		        $this->load->view('snips/css_materialize');
		        $this->load->view('snips/css_materialize_icon');

		        $this->load->view('+pages/admin/a_login', $data);

		        $this->load->view('snips/js_jquery300');
		        $this->load->view('snips/js_materialize');
		        $this->load->view('snips/z_end');
			}
		}
	}

	// Logout from admin page
	public function logout() {
		$this->session->sess_destroy();
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		unset($_SESSION['username']);
		$this->session->unset_userdata('logged_in', $sess_array);
		// $this->session->unset_userdata('logged_in');
		$data['message_display'] = 'Successfully Logged out';

		//Back to login page
        $data['title'] = 'FTNF | Login';
        $this->load->view('snips/a_start', $data);
        $this->load->view('snips/css_materialize');
        $this->load->view('snips/css_materialize_icon');

        $this->load->view('+pages/admin/a_login');

        $this->load->view('snips/js_jquery300');
        $this->load->view('snips/js_materialize');
        $this->load->view('snips/z_end');
	}
}

?>