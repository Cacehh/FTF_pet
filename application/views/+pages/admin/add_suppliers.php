  <br>
  <main>
    <div class="row">
      <a href="<?php echo base_url()?>index.php/Admin_Product_ctr/addSupplier">
          <h4 class="offset-s1 col s11 black-text">Add Suppliers</h4>
      </a>
    </div>
    </div>

  <div class="row grey lighten-1 valign-wrapper">
    <div class="offset-s1 col s8">
      <p class="flow-text">Add new suppliers </p>
    </div>
    <div class="col s3">
        <a href="<?php echo base_url()?>index.php/Admin_Product_ctr/suppliers" class="waves-effect waves-light btn">View Suppliers</a>
    </div>
  </div>
 
  <div class="container blue-grey lighten-5 z-depth-3">
  <br><br>

  <div id="container">
    <?php
      $formattributes = array('class' => 'container col s12 flow-text');
        echo form_open('Admin_Product_ctr/addSupplier', $formattributes);
      ?>
    <?php  
      if (isset($message)) {
        echo $message;
      }
    ?>

    <div class="row">
      <div class="input-field col s12">

          <!-- First Name -->
          <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
                   <?php
                        $supname = array(
                            'id'        => 'supname','name' => 'supname','maxlength' => '25',
                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
                        );
                        echo form_input($supname);
                    ?>  
                    <label for="supname" data-error="Must be atleast 2 characters" >Supplier Name</label>
                    <?php echo form_error('supname'); ?>
           </div>

          <div class="input-field col s6">
              <i class="material-icons prefix">local_phone</i>
                  <?php
                    $supcontact = array(
                      'id'        => 'supcontact','name' => 'supcontact','maxlength' => '11',
                      'pattern'   => '.{11,11}','length' => '11','class' => 'validate',
                      );
                    echo form_input($supcontact);
                  ?>  
                  <label for="supcontact" data-error="Must be a valid number" >Supplier Contact No</label>
                  <?php echo form_error('supcontact'); ?>
          </div>

           <div class="input-field col s12">
           		 <i class="material-icons prefix">my_location</i>
                    <?php
                        $suploc = array(
                            'id'        => 'suploc','name' => 'suploc','maxlength' => '35',
                            'pattern'   => '.{2,35}','length' => '35','class' => 'validate',
                        );
                        echo form_input($suploc);
                    ?>  
                    <label for="suploc" data-error="Must be atleast 2 characters" >Supplier Location</label>
                    <?php echo form_error('suploc'); ?>
          </div>

         
      </div>

    </div>

    <?php 
      echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'waves-effect waves-light btn')); 
      echo form_close(); 
    ?>
    <br/>
    <br/>
    <br/>
    <br/>
  </div>

</main>
    <br/>
    <br/>
