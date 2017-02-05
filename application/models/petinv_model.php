<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class petinv_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //function for retrieving the products for the POS inventory
    function get_petinv($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from product where ProdName like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    //function to get the inventory product count
    function get_petinv_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from product where ProdName like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>