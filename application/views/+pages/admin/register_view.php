  <br><br>
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
                <div class="input-field col s6">
	                    <i class="material-icons prefix">perm_identity</i>
					<!-- First Name -->
					<?php 
						echo form_label('First Name :'); 
					?> 
					<?php 
						echo form_error('fname'); 
					?><br />
					<?php 
						echo form_input(array('id' => 'fname', 'name' => 'fname')); 
					?><br />
				</div>

				<!-- Last Name -->
				 <div class="input-field col s4">
					<?php 
						echo form_label('Last Name :'); 
					?> 
					<?php 
						echo form_error('lname'); 
					?><br />
					<?php 
						echo form_input(array('id' => 'lname', 'name' => 'lname')); 
					?><br />
				</div>

				<!-- Middle Initial -->
				<div class="input-field col s2">
					<?php 
						echo form_label('M.I :'); 
					?> 
					<?php 
						echo form_error('minitial'); 
					?><br />
					<?php 
						echo form_input(array('id' => 'minitial', 'name' => 'minitial')); 
					?><br />
				</div>
			</div>
		</div>

				<!-- User Name -->
				<div class="row">
		            <div class="input-field col s12">
		                <div class="input-field col s5">
                    		<i class="material-icons prefix">assignment_ind</i>
								<?php 
									echo form_label('User Name :'); 
								?> 
								<?php 
									echo form_error('dname'); 
								?><br />
								<?php 
									echo form_input(array('id' => 'dname', 'name' => 'dname')); 
								?><br />
						</div>
					
								<!-- Email -->
						 <div class="input-field col s5">
								<?php 
									echo form_label('Email :'); 
								?> 
								<?php 
									echo form_error('demail'); 
								?><br />
								<?php 
									echo form_input(array('id' => 'demail', 'name' => 'demail')); 
								?><br />
						</div>

								<!-- Account Type -->
						<div class="input-field col s2">

								<?php 
									echo form_label('Account Type :'); 
								?> 
								<?php 
									echo form_error('dacct'); 
								?><br />
								<?php 
									echo form_input(array('id' => 'dacct', 'name' => 'dacct')); 
								?><br />
						</div>
					</div>
				</div>


				<div class="row">
		            <div class="input-field col s10">
		                <div class="input-field col s5">

								<!-- Mobile No. -->
								<?php 
									echo form_label('Mobile No. :'); 
								?> 
								<?php 
									echo form_error('dmobile'); 
								?><br />
								<?php 
									echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); 
								?><br />
						</div>

						<div class="input-field col s5">
								<!-- Password -->
								<?php 
									echo form_label('Password :'); 
								?> 
								<?php 
									echo form_error('dpassword'); 
								?><br />
								<?php 
									echo form_input(array('id' => 'dpassword', 'name' => 'dpassword')); 
								?><br />
						</div>
					</div>
				</div>

								<!-- Submit -->

								<?php 
									echo form_submit(array('id' => 'submit', 'value' => 'Submit')); 
								?>
								<?php 
									echo form_close(); 
								?><br/>

								<div id="fugo">

								</div>
		</div>