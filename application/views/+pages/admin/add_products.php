<br>
  <main>
  	<div class="row">
        <a href="<?php echo base_url()?>index.php/Admin_Product_ctr/addProducts">
            <h4 class="offset-s1 col s11 black-text">Add Products</h4>
        </a>
    </div>

	<div class="row grey lighten-1">
		<div class="offset-s1 col s11">
			<p class="flow-text">Add new products</p>
		</div>
	</div>
    <div class="container blue-grey lighten-5 z-depth-3">
	    <br>
	    <?php
	        $formattributes = array('class' => 'container col s12 flow-text');
	        echo form_open('Inventory_ctr/addProducts', $formattributes);
	    ?>
	    <?php  
	        if (isset($message)) {
	            echo $message;
	        }
	    ?>

		<!--Add products tab-->
		<div class="row">
			<div class="row">
			    <div class="input-field col s6">
	               <?php
	                    $prodname = array(
	                        'id'        => 'prodname','name' => 'prodname','maxlength' => '25',
	                        'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
	                    );
	                    echo form_input($prodname);
	                ?>  
	                <label for="prodname" data-error="Must be atleast 2 characters" >Product Name</label>
	                <?php echo form_error('prodname'); ?>
			  	</div>

			  	<div class="input-field col s6">
		  			<?php
	                    $desc = array(
	                        'id'        => 'desc','name' 	  => 'desc','maxlength' => '140','type' => 'textarea',
	                        'pattern'   => '.{6,140}','length' => '140','class' 	=> 'validate materialize-textarea'
	                    );
	                    echo form_textarea($desc);
	                ?>  
	           		 <label for="desc" data-error="Please enter a valid description" >Product Description</label>
	            	  <?php echo form_error('desc'); ?>
	            </div>
			</div>

			 <div class="row">
			 	<div class="input-field col s4" id="category" name="category">
					<?php
	                   $category = array(
	                        'id' => 'category','name' => 'category','class' => 'validate', 'value'=>'Product',
	                    );
	                    echo form_input($category);
	                ?>  
	           		 <label for="category">Category</label>
				</div>

			  	<div class="input-field col s4">
					  <select id="type" name="type">
					    <option value="Choose" disabled selected>Choose</option>
					    <option value="Food">Food</option>
					    <option value="Clothes">Clothes</option>
					    <option value="Cages">Cages</option>
					    <option value="Aquarium">Aquarium</option>
					    <option value="Toys">Toys</option>
					    <option value="Hygiene">Hygiene</option>
					  </select>
					  <label>Type</label>
				</div>

				<div class="input-field col s4">
						 <?php
					        $qty = array(
					          'id'        => 'qty','name' => 'qty','length' => '10', 'class' => 'validate',
					          );
					        echo form_input($qty);
				      	?>  
				      <label for="qty" data-error="Must be a valid whole number" >Quantity</label>
				      <?php echo form_error('qty'); ?>
				</div>
			 </div>

			 <div class="row">
				<div class="input-field col s4">
					<?php
						$supply = array(
						'id'        => 'supply','name' => 'supply','length' => '10','class' => 'validate', 'type'=>'number', 'step'=>'0.01',
						);
						echo form_input($supply);
					?>  
					<label for="qty" data-error="Must be a valid number" >Supply Price</label>
					<?php echo form_error('supply'); ?>
				</div>

				<div class="input-field col s4">
					<?php
						$markup = array(
						'id'        => 'markup','name' => 'markup','length' => '11','length' => '6','class' => 'validate', 'type'=>'number','step'=>'0.01'
						);
						echo form_input($markup);
					?>  
					<label for="markup" data-error="Must be a valid number" >Markup Price</label>
					<?php echo form_error('markup'); ?>
				</div>

				<div class="input-field col s4">
					<?php
						$amount = array(
						'id'        => 'amount','name' => 'amount','length' => '11','class' => 'validate','type'=>'number','step'=>'0.01',
						);
						echo form_input($amount);
					?>  
					<label for="markup" data-error="Must be a valid number" >Total Amount</label>
					<?php echo form_error('amount'); ?>
				</div>
			</div>
				<?php 
					echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'waves-effect waves-light btn')); 
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