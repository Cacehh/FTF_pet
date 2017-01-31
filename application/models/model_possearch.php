/*model_search.php*/

<?php if (! defined('BASEPATH')) exit('No direct script access')

class prodSearch extends CI_Model {
	
	function _construct () {
		parent::_construct();
	}

	public function search($user_name) {
		$this->db->like('user_name', '$user_name', 'both');
		return $this->db->get('users')->result();
	}
}

?>

