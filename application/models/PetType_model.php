<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

	class PetType_model extends CI_Model{
		function __construct() {
		parent::__construct();
	}

	function form_insert($data){
		// Inserting in Table(register) of Database(ftnf)
		$this->db->insert('pettype', $data);
	}
}
?>