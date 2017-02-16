  <br>
  <main>
    <div class="row">
        <a href="<?php echo base_url()?>index.php/Admin_ctr/accounts">
            <h4 class="offset-s1 col s11 black-text">Register users</h4>
        </a>
    </div>
    <div class="row grey lighten-1">
        <div class="offset-s1 col s8">
            <p class="flow-text">Register new users to use the applicaion</p>
        </div>
    </div>
    <div class="container blue-grey lighten-5 z-depth-3">
    <br><br>
		<?php
			$formattributes = array('class' => 'container col s12 flow-text');
	    	echo form_open('Register_ctr', $formattributes);
    	?>
		<?php  
			if (isset($message)) {
				echo $message;
			}
		?>

		<div class="row">
			<div class="input-field col s12">

			    <!-- First Name -->
			    <div class="input-field col s5">
            	<i class="material-icons prefix">account_circle</i>
					<?php
                        $fname = array(
                            'id'        => 'fname','name' => 'fname','maxlength' => '20',
                            'pattern'   => '.{2,20}','length' => '20','class' => 'validate',
                        );
                        echo form_input($fname);
                    ?>  
                    <label for="first_name" data-error="Must be atleast 2 characters" >First Name</label>
                    <?php echo form_error('first_name'); ?>
				</div>

				<!-- Last Name -->
				 <div class="input-field col s5">
					<?php
                        $lname = array(
                            'id'        => 'lname','name' => 'lname','maxlength' => '20',
                            'pattern'   => '.{2,20}','length' => '20','class' => 'validate',
                        );
                        echo form_input($lname);
                    ?>  
                    <label for="last_name" data-error="Must be atleast 2 characters" >Last Name</label>
                    <?php echo form_error('last_name'); ?>
				</div>

				<!-- Middle Initial -->
				<div class="input-field col s2">
					<?php
                        $minitial = array(
                            'id'        => 'minitial','name' => 'minitial','maxlength' => '1',
                            'pattern'   => '.{1,1}','length' => '1','class' => 'validate',
                        );
                        echo form_input($minitial);
                    ?>  
                    <label for="minitial" data-error="Must be atleast 1 character" >M.I.</label>
                    <?php echo form_error('minitial'); ?>
				</div>
			</div>
		</div>

		<div class="row">
            <div class="input-field col s12">
                <div class="input-field col s4">
                
					<!-- User Name -->
            		<i class="material-icons prefix">account_box</i>
					<?php
                        $dname = array(
                            'id'        => 'dname','name' => 'dname','maxlength' => '15',
                            'pattern'   => '.{3,15}','length' => '15','class' => 'validate',
                        );
                        echo form_input($dname);
                    ?>  
                    <label for="dname" data-error="Must be atleast 3 characters" >Username</label>
                    <?php echo form_error('dname'); ?>	
				</div>
                
				<!-- Mobile number -->
				<div class="input-field col s4">
					<!-- Mobile No. -->
                	<i class="material-icons prefix">local_phone</i>
    				<?php
                        $dmobile = array(
                            'id'        => 'dmobile','name' => 'dmobile','maxlength' => '11',
                            'pattern'   => '.{11,11}','length' => '11','class' => 'validate',
                        );
                        echo form_input($dmobile);
                    ?>  
                    <label for="dmobile" data-error="Must be a valid number" >Number</label>
                    <?php echo form_error('dmobile'); ?>
				</div>
			
				<!-- Account Type -->
				<div class="input-field col s4">
					<i class="material-icons prefix">assignment_ind</i>
					<select id="dacct" name="dacct">
						<option value="0" disabled selected>Type</option>
						<option value="1">Inventory</option>
						<option value="2">POS</option>
						<option value="3">Super Admin</option>
					</select>
					<label>Acct.</label>
				</div>
			</div>
		</div>

		<div class="row">
            <div class="input-field col s12">
                <!-- Email -->
				 <div class="input-field col s6">
					<i class="material-icons prefix">email</i>
    				<?php
                        $demail = array(
                            'id'        => 'demail','name' => 'demail','maxlength' => '30',
                            'pattern'   => '.{5,30}','length' => '30','class' => 'validate',
                        );
                        echo form_input($demail);
                    ?>  
                    <label for="demail" data-error="Must be an email address" >Email</label>
                    <?php echo form_error('demail'); ?>
				</div>

				<div class="input-field col s6">
					<!-- Password -->
					<i class="material-icons prefix">https</i>
    				<?php
                        $dpassword = array(
                            'id'        => 'dpassword','name' => 'dpassword','maxlength' => '30',
                            'pattern'   => '.{3,30}','length' => '30','class' => 'validate', 'type' => 'password'
                        );
                        echo form_input($dpassword);
                    ?>  
                    <label for="dpassword" data-error="Must contain more than 3 characters" >Password</label>
                    <?php echo form_error('dpassword'); ?>
				</div>
			</div>
		</div>

		<?php 
			echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'waves-effect waves-light btn')); 
			echo form_close(); 
		?><br/>

		<div id="fugo">

		</div>
</main>