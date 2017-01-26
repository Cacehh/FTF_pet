
<!-- PHP function to check sessions to pages that would include the code below -->
<?php
if (isset($this->session->userdata['logged_in'])) {
	$username = ($this->session->userdata['logged_in']['username']);
	// $email = ($this->session->userdata['logged_in']['email']);
} else {
	header("location: index");
	
}
?>
