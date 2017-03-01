<br>
  <main>
  	<div class="row">
        <a href="<?php echo base_url()?>index.php/Inventory_ctr/addPetType">
            <h4 class="offset-s1 col s11 black-text">Add Pet Type</h4>
        </a>
    </div>

	<div class="row grey lighten-1 valign-wrapper">
		<div class="offset-s1 col s8">
			<p class="flow-text">Add new pet type to the inventory</p>
		</div>
		<div class="col s3">
			<a href="<?php echo base_url()?>index.php/Inventory_ctr/ProdType" class="waves-effect waves-light btn"><i class="material-icons left">folder</i>Go Back</a>
		</div>
	</div>

    <div class="container blue-grey lighten-5 z-depth-3">
	    <br>
	    <?php
	        $formattributes = array('class' => 'container col s12 flow-text');
	        echo form_open('Inventory_ctr/addPetType', $formattributes);
	    ?>
	    <?php  
	        if (isset($message)) {
	            echo $message;
	        }
	    ?>

		<!--Add products tab-->
		<div class="row">
			<div class="row">
			    <div class="input-field col s12">
	               <?php
	                    $pettype = array(
	                        'id'        => 'pettype','name' => 'pettype','maxlength' => '15',
	                        'pattern'   => '.{2,15}','length' => '15','class' => 'validate',
	                    );
	                    echo form_input($pettype);
	                ?>  
	                <label for="pettype" data-error="Must be atleast 2 characters" >Pet Type</label>
	                <?php echo form_error('pettype'); ?>
			  	</div>
			</div>
			<div class="row">
			 	<div class="input-field col s3" id="category" name="category">
					<?php
	                   $category = array(
	                        'id' => 'category','name' => 'category','class' => 'validate', 'value'=>'Pet',
	                    );
	                    echo form_input($category);
	                ?>  
	           		 <label for="category">Category</label>
				</div>
			</div>

				<?php 
					echo form_submit(array('id' => 'submit', 'value' => 'Add Type', 'class'=>'waves-effect waves-light btn')); 
					echo form_close(); 
				?>
		</div>
		</br>
	</div>
	</br>
	</br>
	</br>
	</br>
</main>