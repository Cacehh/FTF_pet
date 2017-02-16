<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

	class AddProduct_model extends CI_Model{
		function __construct() {
		parent::__construct();
	}

	function form_insert($data){
		// Inserting in Table(product) of Database(ftnf)
		$this->db->insert('product', $data);
	}
}
?>