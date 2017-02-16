  <main>
  <br><br>
  <div class="container blue-grey lighten-5 z-depth-3">
  <br><br>

  <div id="container">
    <?php
      $formattributes = array('class' => 'container col s12 flow-text');
        echo form_open('Admin_ctr/customerAdd', $formattributes);
      ?>
    <?php  
      if (isset($message)) {
        echo $message;
      }
    ?>

    <div class="row">

    <h4>Add Customer Account</h4>

      <div class="input-field col s12">

          <!-- First Name -->
          <div class="input-field col s4">
              <i class="material-icons prefix">account_circle</i>
                   <?php
                        $fname = array(
                            'id'        => 'fname','name' => 'fname','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($fname);
                    ?>  
                    <label for="fname" data-error="Must be atleast 2 characters" >First Name</label>
                    <?php echo form_error('fname'); ?>
           </div>

         <!-- Last Name -->
         <div class="input-field col s4">
                    <?php
                        $lname = array(
                            'id'        => 'lname','name' => 'lname','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($lname);
                    ?>  
                    <label for="lname" data-error="Must be atleast 2 characters" >Last Name</label>
                    <?php echo form_error('lname'); ?>
        </div>

         <!-- Middle Initial -->
         <div class="input-field col s4">
                    <?php
                        $mname = array(
                            'id'        => 'mname','name' => 'mname','maxlength' => '2',
                            'pattern'   => '.{1,2}','length' => '2','class' => 'validate',
                        );
                        echo form_input($mname);
                    ?>  
                    <label for="lname" data-error="Must be atleast 2 characters" >M.I</label>
                    <?php echo form_error('mname'); ?>
        </div>

      </div>

       <div class="input-field col s12">

          <!-- Gender Type -->
          <div class="input-field col s3">
              <i class="material-icons prefix">person_pin</i>
              <select id="gender" name="gender">
                <option value="Choose" disabled selected>Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <label>Gender</label>
          </div>

          <div class="input-field col s5">
              <i class="material-icons prefix">email</i>
                   <?php
                        $demail = array(
                            'id'        => 'demail','name' => 'demail','maxlength' => '30',
                            'pattern'   => '.{2,30}','length' => '30','class' => 'validate',
                        );
                        echo form_input($demail);
                    ?>  
                    <label for="fname" data-error="Must be atleast 2 characters" >E-mail</label>
                    <?php echo form_error('demail'); ?>
           </div>

           <!-- Mobile number -->
          <div class="input-field col s4">
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
       </div>

        <div class="input-field col s12">
             <div class="input-field col s6">
                  <i class="material-icons prefix">my_location</i>
                    <?php
                        $street = array(
                            'id'        => 'street','name' => 'street','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($street);
                    ?>  
                    <label for="street" data-error="Must be atleast 2 characters" >Street</label>
                    <?php echo form_error('street'); ?>
              </div>

              <div class="input-field col s6">
                  <i class="material-icons prefix">business</i>
                    <?php
                        $city = array(
                            'id'        => 'city','name' => 'city','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($city);
                    ?>  
                    <label for="city" data-error="Must be atleast 2 characters" >City</label>
                    <?php echo form_error('city'); ?>
              </div>
        </div>

        <div class="input-field col s12">
            <div class="input-field col s12">
                  <i class="material-icons prefix">room</i>
                    <?php
                        $barsub = array(
                            'id'        => 'barsub','name' => 'barsub','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($barsub);
                    ?>  
                    <label for="street" data-error="Must be atleast 2 characters" >Barangay/Subdivision</label>
                    <?php echo form_error('barsub'); ?>
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
</main>