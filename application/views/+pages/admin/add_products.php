<br>
  <main>

  	<div class="row">
        <a href="<?php echo base_url()?>index.php/Admin_Product_ctr/addProducts">
            <h4 class="offset-s1 col s11 black-text">Add Products</h4>
        </a>
    </div>

    <div class="container">
	    <br><br>
	        <?php
	            $formattributes = array('class' => 'container col s12 flow-text');
	            echo form_open('Admin_Product_ctr', $formattributes);
	        ?>
	        <?php  
	            if (isset($message)) {
	                echo $message;
	            }
	        ?>
	</div>

	<!--Add products tab-->
	<div class="row">
		<div class="row grey lighten-1">
			<div class="offset-s1 col s12">
				<p class="flow-text">Add new products</p>
			</div>
		</div>

					<div class="input-field col s12">

						<div class="input-field col s12">
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
				                        $proddesc = array(
				                            'id'        => 'proddesc','name' => 'proddesc','maxlength' => '25',
				                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
				                        );
				                        echo form_input($proddesc);
				                    ?>  
			                   		 <label for="proddesc" data-error="Must be atleast 2 characters" >Product Description</label>
			                    	<?php echo form_error('proddesc'); ?>
			                </div>

						</div>
					</div>

						<div class="input-field col s12">
							 
							 <div class="input-field col s12">

							 	  <div class="input-field col s4">
						              <select id="category" name="category">
						                <option value="Choose" disabled selected>Choose</option>
						                <option value="Male">Pet</option>
						                <option value="Male">Product</option>
						                <option value="Male">Grooming</option>
						                <option value="Male">Habitat</option>
						              </select>
						              <label>Category</label>
						          </div>

							 	  <div class="input-field col s4">
										<?php
						                    $generic = array(
						                            'id'        => 'generic','name' => 'generic','maxlength' => '25',
						                            'pattern'   => '.{2,25}','length' => '25','class' => 'validate',
						                        );
						                        echo form_input($generic);
						                    ?>  
					                   		 <label for="generic" data-error="Must be atleast 2 characters" >Generic Brand</label>
					                    	<?php echo form_error('generic'); ?>
							 	  </div>

						           <div class="input-field col s4">
						           		 <?php
						                    $qty = array(
						                      'id'        => 'qty','name' => 'qty','maxlength' => '4',
						                      'pattern'   => '.{4,4}','length' => '4','class' => 'validate',
						                      );
						                    echo form_input($qty);
						                  ?>  
						                  <label for="qty" data-error="Must be a valid number" >Quantity</label>
						                  <?php echo form_error('qty'); ?>
						           </div>
							 </div>

							 <div class="input-field col s12">

							 		 <div class="input-field col s12">
							 		 	 <div class="input-field col s4">
							           		 <?php
							                    $supply = array(
							                      'id'        => 'supply','name' => 'supply','maxlength' => '11',
							                      'pattern'   => '.{11,11}','length' => '11','class' => 'validate',
							                      );
							                    echo form_input($supply);
							                  ?>  
							                  <label for="qty" data-error="Must be a valid number" >Supply Price</label>
							                  <?php echo form_error('supply'); ?>
						           		</div>

							 			 <div class="input-field col s4">
							 			 		<?php
								                    $markup = array(
								                      'id'        => 'markup','name' => 'markup','maxlength' => '6',
								                      'pattern'   => '.{6,6}','length' => '6','class' => 'validate',
								                      );
								                    echo form_input($markup);
								                  ?>  
								                  <label for="markup" data-error="Must be a valid number" >Markup Price</label>
								                  <?php echo form_error('markup'); ?>
							 			 </div>

							 			 <div class="input-field col s4">
							 			 		<?php
								                    $amount = array(
								                      'id'        => 'amount','name' => 'amount','maxlength' => '6',
								                      'pattern'   => '.{6,6}','length' => '6','class' => 'validate',
								                      );
								                    echo form_input($amount);
								                  ?>  
								                  <label for="markup" data-error="Must be a valid number" >Amount</label>
								                  <?php echo form_error('amount'); ?>
							 			 </div>
							 		 </div>

							 		 <div class="input-field col s12">
											<!-- <div class="input-field col s8">
												<h5>Add Image</h5>
												<div class="file-field input-field">
													<div class="btn">
														<span>File</span>
														<input type="file">
													</div>
													<div class="file-path-wrapper">
														<input class="file-path validate" type="text">
													</div>
												</div>
											</div> -->

									</div>

							 </div>
						</div>

					<?php 
						echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'waves-effect waves-light btn')); 
						echo form_close(); 
					?>

			      </div>
</main>