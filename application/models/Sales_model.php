<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class Sales_model extends CI_Model {

    function __construct() {
        parent::__construct();

    function getInvoice($data) {
		// test only function
		 $query = $this->db->query(SELECT * from sales);

		 if ($query-> num_rows() > 0 ) {
		 	return $query->result();
		 } else {
		 	return NULL;

		 }
	function getStatements($data) {
		//test function only
		$query = $this->db->query(SELECT * from sales);
		if ($query-> num_rows() > 0 ) {
			return $query->result();
		}else {
			return NULL;
		}

	}

	}
}
?>