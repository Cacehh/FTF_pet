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

    public function detect_user() {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function role() {
        $query = $this->db->get('roles');
        return $query->result();
    } 

    function __destruct() {
        $this->db->close();
    }
}
