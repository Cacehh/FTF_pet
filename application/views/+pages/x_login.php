    <div class="formdiv_login z-depth-3 blue lighten-5">
        <div class="container down_d">    
            <?php //echo form_open('loginv'); 
            ?>       
            <!-- Shows error message when an Invalid user logs in -->
            <?php 
//            echo $msg;
            ?>
<!--           Add page destination next to the base url -->
            <form method="POST" action="<?php echo base_url();?>">        
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

				<button class="btn waves-effect waves-blue  blue darken-4 tooltipped indeterminate" data-position="bottom" data-delay="10" data-tooltip="Log In Now!" type="submit" name="action">
					Log in
				</button>

                <p>
                    <?php 
                       echo anchor('landingPage_ctr/forgotpassword','Forgot Password?');
                    ?>
                </p>
			</form>
		</div>
	</div>