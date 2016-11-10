<br>
<br>
<br>
<br>
<main>
	<div class="valign-wrapper blue-grey lighten-5 z-depth-3">
		<div class="row">
            <div class="col s5">
				<br>
				<br>
                <h5 class="">Login | Admin <b>Fins, Tails n Feathers</b></h5>
                <form method="POST" action="<?php echo base_url();?>/index.php/Admin_ctr/dashboard">        
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

                    <button class="btn waves-effect waves-orange  orange darken-3 tooltipped indeterminate" data-position="bottom" data-delay="10" data-tooltip="Log In Now!" type="submit" name="action">
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