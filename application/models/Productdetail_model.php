<?php
	class Productdetail_model extends CI_Model {
	
		    function __construct(){
				parent::__construct(); // Call the Model constructor
			}
			
			function getSelectedProd($prodId) {
				$query = $this->db->query('SELECT * FROM product WHERE ID='.$prodId.'');
				
				if($query->num_rows() > 0) {
					return $query->result();
				} else {
					return NULL;
				}
			}
			

	}
?>