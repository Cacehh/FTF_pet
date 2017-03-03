<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

	class Suppliers_model extends CI_Model{
		function __construct() {
		parent::__construct();
	}

	function form_insert($data){
		// Inserting in Table(product) of Database(ftnf)
		$this->db->insert('suppliers', $data);
	}

	//function for retrieving the products for the POS inventory
    function get_supplier($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from suppliers where Supplier_Name like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    //function to get the inventory product count
    function get_supplier_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from suppliers where Supplier_Name like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
