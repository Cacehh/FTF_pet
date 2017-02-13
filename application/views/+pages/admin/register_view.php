  <br><br>
	<div class="container blue-grey lighten-5 z-depth-3">
  <br><br>

		<div id="container">
			<?php
			$formattributes = array('class' => 'container col s12 flow-text');
        	echo form_open('Register_ctr', $formattributes);
        	?>
			<?php 
				if (isset($message)) { 
			?>

			<CENTER><h5 style="color:green;">Data inserted successfully</h5></CENTER><br>
			<?php } ?>

		 <div class="row">
            <div class="input-field col s12">
                <div class="input-field col s5">
	                    <i class="material-icons prefix">account_circle</i>
					<!-- First Name -->
					<?php 
						echo form_label('First Name :'); 
						echo form_error('fname'); 
						echo form_input(array('id' => 'fname', 'name' => 'fname')); 
					?><br />
				</div>

				<!-- Last Name -->
				 <div class="input-field col s5">
					<?php 
						echo form_label('Last Name :'); 
						echo form_error('lname'); 
						echo form_input(array('id' => 'lname', 'name' => 'lname')); 
					?>
				</div>

				<!-- Middle Initial -->
				<div class="input-field col s2">
					<?php 
						echo form_label('M.I :'); 
						echo form_error('minitial'); 
						echo form_input(array('id' => 'minitial', 'name' => 'minitial')); 
					?><br />
				</div>
			</div>
		</div>

				<!-- User Name -->
				<div class="row">
		            <div class="input-field col s12">
		                <div class="input-field col s5">
                    		<i class="material-icons prefix">account_box</i>
								<?php 
									echo form_error('dname'); 
									echo form_label('User Name :'); 
									echo form_input(array('id' => 'dname', 'name' => 'dname')); 
								?><br />
						</div>

						<div class="input-field col s5">
		                	<i class="material-icons prefix">local_phone</i>

								<!-- Mobile No. -->
								<?php 
									echo form_error('dmobile'); 
									echo form_label('Mobile No. :'); 
									echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); 
								?><br />
						</div>
					
								<!-- Account Type -->
						<div class="input-field col s2">
							<i class="material-icons prefix">assignment_ind</i>
								<?php 
									echo form_error('dacct'); 
									echo form_label('Type :'); 
									echo form_input(array('id' => 'dacct', 'name' => 'dacct')); 
								?><br />
						</div>
					</div>
				</div>


				<div class="row">
		            <div class="input-field col s12">
		                <!-- Email -->
						 <div class="input-field col s6">
						 	 <i class="material-icons prefix">email</i>
								<?php 
									echo form_error('demail'); 
									echo form_label('Email :'); 
									echo form_input(array('id' => 'demail', 'name' => 'demail')); 
								?><br />
						</div>

						<!-- Password -->
						<div class="input-field col s6">
							<i class="material-icons prefix">https</i>
								<!-- Password -->
								<?php 
									echo form_error('dpassword'); 
									echo form_label('Password :'); 
									echo form_input(array('id' => 'dpassword', 'name' => 'dpassword')); 
								?><br />
						</div>
					</div>
				</div>

								<?php 
									echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'waves-effect waves-light btn')); 
									echo form_close(); 
								?><br/>

								<div id="fugo">

								</div>
		</div>