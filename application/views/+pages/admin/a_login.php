<br>
<br>
<br>
<br>
<?php
    // if (isset($this->session->userdata['logged_in'])) {
    //     header("location: http://localhost/login/index.php/user_authentication/user_login_process");
    // }
?>
<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<main>
        <?php
        if (isset($message_display)) {
            echo "<div class='message center'>";
            echo $message_display;
            echo "</div>";
        }
        ?>
    <div class="valign-wrapper blue-grey lighten-5 z-depth-3">
		<div class="row">
            <div class="col s5">
				<br>
				<br>
                <h5 class="">Login | Admin <b>Fins, Tails n Feathers</b></h5>
                <!-- <form method="POST" action="<?php echo base_url();?>/index.php/Admin_ctr/dashboard">  -->
                <?php echo form_open('LoginCheck/user_login_process'); ?>  
                    <?php
                        echo "<div class='error_msg'>";
                        if (isset($error_message)) {
                        echo $error_message;
                        }
                        echo validation_errors();
                        echo "</div>";
                    ?>     
                    <div class="row_1">
                        <div class="input-field col s12">
                            <i class="large material-icons prefix">account_circle</i>
                            <input id="username" type="text" class="validate" maxlength="12" length="12" name="username" size="50">
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field col s12">	
                            <i class=" material-icons prefix ">https</i>
                            <input id="password" type="password" class="validate" maxlength="45" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-orange  orange darken-3 tooltipped indeterminate" data-position="bottom" data-delay="10" data-tooltip="Log In" type="submit" name="action">
                        Log in
                    </button>

                    <p>
                        <?php 
                           echo anchor('Admin_ctr/forgotpassword','Forgot Password?');
                        ?>
                    </p>
                </form>
            </div>
            <div class="col s1"></div>
            <div class="col s1 verticalLine">
                <br> <br>
                <br> <br>
                <br> <br>
                <br> <br>
                <br> <br>
                <br> <br>
            </div>
            <div class="col s5 ">
				<div class="row">
					<br><br>
					<br><br>
					<br>
                	<h5 class="">Setup a new EMPLOYEE account</h5>
                    <br>
                	<a href="<?php echo base_url();?>index.php/Admin_ctr/register" class="waves-effect waves-light btn orange darken-3">Create New Account</a>
				</div>
            </div>
		</div>
	</div>
</main> 