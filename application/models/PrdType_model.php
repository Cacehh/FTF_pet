<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class PrdType_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //function for retrieving the products
    function get_prodtype($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from prodtype where Type like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    //function to get the product count
    function get_prodtype_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from prodtype where Type like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>