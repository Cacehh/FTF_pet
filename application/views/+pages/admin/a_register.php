  <br><br>
  <br><br>
	<div class="container blue-grey lighten-5 z-depth-3">
  <br><br>

	<?php
        $formattributes = array('class' => 'container col s12 flow-text');
        echo form_open('Admin_ctr', $formattributes);
    ?>
        <?php if (isset($message)) { ?>
            <CENTER><h3 style="color:green;">You are now registered! Verification of accounts are within 24 Hours</h3></CENTER><br>
        <?php } ?>
        <div class="row">
            <div class="input-field col s12">
                <div class="input-field col s6">
                    <i class="material-icons prefix">perm_identity</i>
                    <?php
                        $First_name_data = array(
                            'id'        => 'first_name','name'      => 'first_name','maxlength' => '20',
                            'pattern'   => '.{2,20}','length'    => '20','class'     => 'validate',
                        );

                        echo form_input($First_name_data);
                    ?>  
                    <label for="first_name" data-error="First Name must be atlease 2 characters" >First Name</label>
                    <?php echo form_error('first_name'); ?>
                </div>

                <div class="input-field col s4">
                    <?php
                        $Last_name_data = array(
                            'id' => 'last_name', 'name' => 'last_name', 'maxlength' => '15',
                            'pattern' => '.{2,15}', 'length' => '15', 'class' => 'validate',
                        );

                        echo form_input($Last_name_data);
                    ?> 
                    <label for="last_name" data-error="Last Name must be atleast 2 characters">Last Name</label>
                    <?php echo form_error('last_name'); ?>
                </div>

                <div class="input-field col s2">
                    <?php
                        $middle_name_data = array(
                            'id' => 'middle_name','name' => 'middle_name','maxlength' => '1',
                            'pattern' => '.{1}','length' => '1','class' => 'validate',
                        );

                        echo form_input($middle_name_data);
                    ?> 
                    <label for="middle_name">M.I.</label>
                    <?php echo form_error('middle_name'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <div class="input-field col s5">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input id="username" name="username" type="text" class="validate" maxlength="12" pattern=".{3,12}" length="12" required>
                    <label for="username" data-error="username must be atleast 3 characters" >username</label>
                </div>
                <div class="input-field col s4 ">
                    <input name="gender" type="radio" id="male" value="male" required

                    />
                    <label for="male">Male</label>

                    <input name="gender" type="radio" id="female" value="male" required

                    />
                    <label for="female">Female</label>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <div class="input-field col s8">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate" maxlength="30" length="30" required>
                    <label for="email" data-error="Not an e-mail address" data-success="valid e-mail address">Email</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">label</i>
                    <input id="type" name="type" type="number" class="validate" maxlength="2" required>
                    <label for="account_type" data-error="Not valid" data-success="Correct account type">Account Type</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <div class="input-field col s6">
                    <i class="material-icons prefix">https</i>
                    <input id="password" name="password" type="password" class="validate" maxlength="35" length="35" pattern=".{5,35}" required>
                    <label for="password" data-error="Must be more than 5 characters">Password</label>
                </div>

                <div class="input-field col s6">
                    <input id="password_confirm" name="password_confirm" type="password" class="validate" maxlength="35" length="35" pattern=".{5,35}" required>
                    <label for="password_confirm" data-error="Must be more than 5 characters">Confirm Password</label>
                </div>
            </div>
        </div>
        <button type="submit" name="register" class="waves-effect waves-light btn orange darken-3" onclick="validateForm()" >
            <i class="material-icons right">done</i>
            Register
        </button>
        <a href="<?php echo base_url()?>index.php/Admin_ctr">Already have an account?</a>
        </br></br></br>
    </form>
	</div>
        </br></br></br></br>
