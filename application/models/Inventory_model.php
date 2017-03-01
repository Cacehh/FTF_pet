<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

	class Inventory_model extends CI_Model{
		function __construct() {
		parent::__construct();
	}

	function form_insert($data){
		// Inserting in Table(product) of Database(ftnf)
		$this->db->insert('product', $data);
	}

	//function for retrieving the products for the POS inventory
    function get_prodtype($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select DISTINCT Type from product where Type like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    //function to get the inventory product count
    function get_prodtype_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select DISTINCT Type, sum(Quantity) from product where Type like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    // function get_prod_num($st = NULL) {
    // 	if ($st == "NIL") $st = "";
    // 	$sql = "select sum(quantity) FROM product";
    // 	$query = $this->db->query($sql);
    //     return $query->result();
    // }
}
?>