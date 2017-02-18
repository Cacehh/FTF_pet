<?php if ( !defined ('BASEPATH')) exit('No direct script access allowed');

class prodinv_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //function for retrieving the products for the POS inventory
    function get_prodinv($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from product where ProdName like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    //function to get the inventory product count
    function get_prodinv_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from product where ProdName like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    //function to edit the chosen product
    function edit_prodInv($data)
    {
      $sql = "select * from product where ProdID = " . $data . " limit 1";
      $query = $this->db->query($sql);
      return $query->result();
    }

    function save_editProdInv($prodID, $prodName, $category, $quantity, $amount)
    {
      $amount = substr($amount, 3); // remove the peso sign from amount
      $sql = "update product set ProdName='".$prodName."', Category='".$category."', Quantity=".$quantity.", Amount=".$amount." where ProdID=" . $prodID;
      $query = $this->db->query($sql);
      //return $query->result();
    }

    // function to delete a product
    function delete_prodInv($prodID)
    {
      $sql = "delete from product where ProdID=" . $prodID;
      $query = $this->db->query($sql);
    }
}
?>
