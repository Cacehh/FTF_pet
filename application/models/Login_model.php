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

        return $this->db->get('users')->row();


    }    

    public function detect_user() {

        // $sql = $this->db->query('SELECT id FROM users');
        // return $sql->result();

        // $data = array();
        // $query = $this->db->get('users');
        // $res   = $query->result();        
        // return $res;
        // $this->db->select("acct_type");
        // $this->db->from('users');
        // $res = $this->db->get();
        // return $res->result();

        // $this->db->select("acct_type");
        // $this->db->from('users');
        // $query = $this->db->get();
        // return $query->result();
        
        $query = $this->db->get('users');
        return $query->result();

        // $this->db->select("post_id,post_title,post_content");
        // $this->db->from('post_tbl');
        // $query = $this->db->get();
        // return $query->result();
    }

    public function role() {
        $query = $this->db->get('roles');
        return $query->result();
    } 

    function __destruct() {
        $this->db->close();
    }
}
