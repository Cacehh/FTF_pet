<br>
<main>
   <div class="row">
      <h4 class="offset-s1 col s11">Add Customer</h4>
   </div>
   <div class="row grey lighten-1">
      <div class="offset-s1 col s11">
          <p class="flow-text">Add a new customers details and information</p>
      </div>
   </div>

	<div class="container">
          <?php
          $formattributes = array('class' => 'container col s12 flow-text');
            echo form_open('Admin_ctr', $formattributes);
            ?>
          <?php 
            if (isset($message)) { 
          ?>

          <CENTER><h5 style="color:green;">Data inserted successfully</h5></CENTER><br>
          <?php } ?>

          <ul class="collapsible" data-collapsible="expandable">
            <li>
              <div class="collapsible-header"><i class="material-icons">perm_identity</i>Customer Details</div>
              <div class="collapsible-body">
                    <div class="container">

                        <form class="col s12">
                            <div class="row">
                                <h5>Customer Code: 00023</h5>
                            </div>
                            
                            <div class="row">

                                <div class="input-field col s6 ">
                                  <i class="material-icons prefix">account_circle</i>

                                	<?php
				                        $fname = array(
				                            'id'        => 'fname','name' => 'fname','maxlength' => '20',
				                            'pattern'   => '.{2,20}','length' => '20','class' => 'validate',
				                        );
				                        echo form_input($fname);
			                       	?>  
			                    <label for="fname" data-error="Must be atleast 2 characters" >First Name</label>
			                    <?php echo form_error('fname'); ?>

                                  <?php 
                                  // echo form_label('First Name'); 
                                  // echo form_error('fname'); 
                                  // echo form_input(array('id' => 'fname', 'name' => 'fname')); 
                                  ?><br />

                                </div>

                                <div class="input-field col s6">
                                  <i class="material-icons prefix">account_circle</i>

                                <?php
			                        $lname = array(
			                            'id'        => 'lname','name' => 'lname','maxlength' => '20',
			                            'pattern'   => '.{2,20}','length' => '20','class' => 'validate',
			                        );
			                        echo form_input($lname);
			                    ?>  
			                    <label for="lname" data-error="Must be atleast 2 characters" >Last Name</label>
			                    <?php echo form_error('lname'); ?>

                                  <?php 
                                  // echo form_label('Last Name'); 
                                  // echo form_error('lname'); 
                                  // echo form_input(array('id' => 'lname', 'name' => 'lname')); 
                                  ?>
                                </div>
                            </div>
                        
                            <!-- <div class="row">
                                <div class="col s6">
                                  <input name="gender" type="radio" id="male" />
                                  <label for="male">Male</label>
                                </div>
                                
                                <div class="col s6">
                                  <input name="gender" type="radio" id="female" />
                                  <label for="female">Female</label>
                                </div>
                            </div> -->
                        </form> 
                  </div>
               </div>
            </li>
              
            <li>
              <div class="collapsible-header"><i class="material-icons">info</i>Contact Information</div>
                <div class="collapsible-body">
                    
                    <div class="container">
                      <div class="row">
                          
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6 ">
                                  <i class="material-icons prefix">phone</i>

                                  <?php
			                        $dmobile = array(
			                            'id'        => 'dphone','name' => 'dphone','maxlength' => '11',
			                            'pattern'   => '.{11,11}','length' => '11','class' => 'validate',
			                        );
			                        echo form_input($dmobile);
			                      ?>  
			                    <label for="dphone" data-error="Must be a valid number" >Number</label>
			                    <?php echo form_error('dphone'); ?>

                                    <?php 
                                    // echo form_error('dphone'); 
                                    // echo form_label('Phone Number'); 
                                    // echo form_input(array('id' => 'dphone', 'name' => 'dphone')); 
                                    ?><br />

                                  <!-- input id="phone_num" type="text" class="validate">
                                  <label for="phone_num">Phone</label> -->
                                </div>

                                <div class="input-field col s6">
                                  <i class="material-icons prefix">phonelink_ring</i>

                                  <?php
			                        $dmobile = array(
			                            'id'        => 'dmobile','name' => 'dmobile','maxlength' => '11',
			                            'pattern'   => '.{11,11}','length' => '11','class' => 'validate',
			                        );
			                        echo form_input($dmobile);
			                      ?>  
			                    <label for="dmobile" data-error="Must be a valid number" >Number</label>
			                    <?php echo form_error('dmobile'); ?>

                                  <?php 
                                  // echo form_error('dmobile'); 
                                  // echo form_label('Mobile Number'); 
                                  // echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); 
                                  ?><br />

                                  <!-- <input id="mobile_num" type="text" class="validate">
                                  <label for="mobile_num">Mobile</label> -->
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="input-field col s12">
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

                                  <?php 
                                  // echo form_error('demail'); 
                                  // echo form_label('Email'); 
                                  // echo form_input(array('id' => 'demail', 'name' => 'demail')); 
                                  ?><br />

                                  <!-- <input id="email" type="text" class="validate">
                                  <label for="email">E-mail</label> -->
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                
                </div>
            </li>
              
            <li>
              <div class="collapsible-header"><i class="material-icons">home</i>Address</div>
                <div class="collapsible-body">
                    <div class="container">
                      <div class="row">
                          
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">streetview</i>

                                  <?php
				                        $street = array(
				                            'id'        => 'street','name' => 'street','maxlength' => '30',
				                            'pattern'   => '.{2,30}','length' => '30','class' => 'validate',
				                        );
				                        echo form_input($street);
			                       	?>  
			                    <label for="street" data-error="Must be atleast 2 characters" >Street</label>
			                    <?php echo form_error('street'); ?>

                                  <?php 
                                  // echo form_label('Street'); 
                                  // echo form_error('street'); 
                                  // echo form_input(array('id' => 'street', 'name' => 'street')); 
                                  ?><br />

                                  <!-- <input id="street" type="text" class="validate">
                                  <label for="street">Street</label> -->
                                </div>

                                <div class="input-field col s6">
                                  <i class="material-icons prefix">location_on</i>

                                  <?php
				                        $city = array(
				                            'id'        => 'city','name' => 'city','maxlength' => '20',
				                            'pattern'   => '.{2,20}','length' => '20','class' => 'validate',
				                        );
				                        echo form_input($city);
			                       	?>  
			                    <label for="city" data-error="Must be atleast 2 characters" >City</label>
			                    <?php echo form_error('city'); ?>

                                  <?php 
                                  // echo form_label('City'); 
                                  // echo form_error('city'); 
                                  // echo form_input(array('id' => 'city', 'name' => 'city')); 
                                  ?><br />

                                 <!--  <input id="city" type="text" class="validate">
                                  <label for="city">City</label> -->
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">home</i>

                                  <?php
				                        $barsub = array(
				                            'id'        => 'barsub','name' => 'barsub','maxlength' => '30',
				                            'pattern'   => '.{2,30}','length' => '30','class' => 'validate',
				                        );
				                        echo form_input($barsub);
			                       	?>  
			                    <label for="barsub" data-error="Must be atleast 2 characters" >Barangay/Subdivision</label>
			                    <?php echo form_error('barsub'); ?>

                                  <?php 
                                  // echo form_label('Barangay/Subdivision'); 
                                  // echo form_error('barsub'); 
                                  // echo form_input(array('id' => 'barsub', 'name' => 'barsub')); 
                                  ?><br />

                                 <!--  <input id="brngysub" type="text" class="validate">
                                  <label for="brngysub">Barangay/Subdivision</label> -->
                                </div>
                                
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">my_location</i>

                                  <?php
				                        $prov = array(
				                            'id'        => 'prov','name' => 'prov','maxlength' => '30',
				                            'pattern'   => '.{2,30}','length' => '30','class' => 'validate',
				                        );
				                        echo form_input($prov);
			                       	?>  
			                    <label for="first_name" data-error="Must be atleast 2 characters" >Province</label>
			                    <?php echo form_error('prov'); ?>

                                  <?php 
                                  // echo form_label('Province'); 
                                  // echo form_error('prov'); 
                                  // echo form_input(array('id' => 'prov', 'name' => 'prov')); 
                                  ?><br />

                                 <!--  <input id="province" type="text" class="validate">
                                  <label for="province">Province</label> -->
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                </div>
            </li>
          </ul>
        
        <div class = "row right">

        	<!-- <?php 
				echo form_submit(array('id' => 'cancel', 'value' => 'Cancel', 'class'=>'waves-effect waves-light btn')); 
				echo form_close(); 
			?><br/> -->

			<?php 
				echo form_submit(array('id' => 'submit', 'value' => 'Save', 'class'=>'waves-effect waves-light btn')); 
				echo form_close(); 
			?><br/>

            <!-- <a class="waves-effect waves-light btn deep-orange darken-1">Cancel</a> -->

            <?php 
            // echo form_submit(array('id' => 'submit', 'value' => 'Save', 'class'=>'waves-effect waves-light btn deep-orange darken-1')); 
            // echo form_close(); 
            ?><br/>

            <div id="fugo">

            </div>
        </div>
   </div>
</main>
<br>