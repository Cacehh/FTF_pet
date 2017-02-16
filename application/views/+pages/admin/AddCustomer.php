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
                    <label for="fname" data-error="Must be atleast 2 characters" >First Name</label>
                    <?php echo form_error('fname'); ?>
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
                    <label for="lname" data-error="Must be atleast 2 characters" >Last Name</label>
                    <?php echo form_error('lname'); ?>
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