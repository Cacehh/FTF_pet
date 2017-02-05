<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class Login_model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('user_password', md5($data['user_password']));
        // $this->db->where('acct_type', $data['acct_type']);
        // $this->db->where('user_email', $data['user_email']);
        return $this->db->get('users')->row();

        // $user_array = array('username' => $username, 'user_password' => $user_password, 'acct_type' => $acct_type);
        // $this->db->where($user_array);
    }    

    public function detect_user() {
        // $result = $this->db->select('acct_type',$data['acct_type']);
        // return $acct_type;

        // $this->db->select('*');
        // $this->db->from('users');
        // $this->db->where('username', $dataa);
        // $this->db->where('acct_type', $dataa);
        // $query = $this->db->get();
        // return $query;

        $sql = $this->db->query('SELECT id FROM users');
        return $sql->result();
    }

    function __destruct() {
        $this->db->close();
    }
}
