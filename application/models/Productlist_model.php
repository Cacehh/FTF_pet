<?php
	class Productlist_model extends CI_Model {
	
		    function __construct(){
				parent::__construct(); // Call the Model constructor
			}
			
			function getProduct() {
				$query = $this->db->query('SELECT * FROM product WHERE Category= \'Product\'');
				
				if($query->num_rows() > 0) {
					return $query->result();
				} else {
					return NULL;
				}
			}
			

	}
?>