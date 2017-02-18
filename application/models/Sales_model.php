<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class Sales_model extends CI_Model {

    function __construct() {
        parent::__construct();

    function form_get($data){
		// test only function
		$this->db->insert('invoice', $data);
	}
}
?>