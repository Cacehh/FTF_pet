<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //function for retrieving the products for the POS inventory
    function get_customer($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from customers where FirstName like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    //function to get the inventory product count
    function get_customer_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from customers where FirstName like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}