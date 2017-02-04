<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('user_password', md5($data['user_password']));
        return $this->db->get('users')->row();
    }

    function __destruct() {
        $this->db->close();
    }
}
