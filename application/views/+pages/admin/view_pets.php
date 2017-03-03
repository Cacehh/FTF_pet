<br>
<main>
	<div class="row">
		<div class="row">
			<a href="<?php echo base_url()?>index.php/Inventory_ctr/pets">
				<h4 class="offset-s1 col s11 black-text">Pets</h4>
			</a>
		</div>

		<div class="row grey lighten-1 valign-wrapper">
			<div class="offset-s1 col s8">
				<p class="flow-text">View, Edit and Delete Pets</p>
			</div>
			<div class="col s3">
				<a href="<?php echo base_url()?>index.php/Inventory_ctr/addPets" class="waves-effect waves-light btn"><i class="material-icons left">library_add</i>Add Pets</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12">
				<?php 
               	    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
               	    echo form_open("Inventory_ctr/invPetSearch", $attr);
               	?>
                <div class="row">
                    <div class="input-field offset-s2 col s6">
						<i class="material-icons prefix">search</i>
                        <input class="form-control" id="icon_prefix" name="petinv_name" type="text" value="<?php echo set_value('petinv_name'); ?>" />
						<label for="icon_prefix">Search for Pet Names</label>
                    </div>

                    <div class="col s2">
                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
                    </div>
                </div>
                <?php 
                    echo form_close(); 
                ?>
			</div>
		</div>
		
		<div class="divider"></div>
		<br>
		<div class="row">
			<br>
			<div class="col s1"></div>
			<div class="col s10">
				<table class="bordered centered highlight">
				<!-- <table class="bordered stripped centered responsive-table"> -->
	                <thead>
	                    <tr>
	                    <th data-field ="#">#</th>
	                    <th data-field ="productID">Product ID</th>
	                    <th data-field ="">Product Name</th>
	                    <th data-field ="">Category</th>
	                    <th data-field ="">Type</th>
	                    <th data-field ="">Amount</th>
	                    <th data-field ="">Quantity</th>
	                    <!-- <th data-field ="">Timestamp</th> -->
	                    <th></th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php for ($i = 0; $i < count($petinvlist); ++$i) { ?>
	                    <tr>
	                        <td><?php echo ($page+$i+1); ?></td>
	                        <td><?php echo $petinvlist[$i]->ProdID; ?></td>
	                        <td><?php echo $petinvlist[$i]->ProdName; ?></td>
	                        <td><?php echo $petinvlist[$i]->Category; ?></td>
	                        <td><?php echo $petinvlist[$i]->Type; ?></td>
	                        <td><?php 
	                        	echo "&#8369;";
	                        	echo $petinvlist[$i]->Amount; ?></td>
	                        <td><?php echo $petinvlist[$i]->Quantity; ?></td>
	                        <td>
	                        	<?php 
	                        		// echo $petinvlist[$i]->Timestamp; 
	                        	?></td>
	                        <td>
								<a href="<?php echo base_url()?>index.php/Inventory_ctr/editPet/<?php echo $petinvlist[$i]->ProdID ?>"><i class="material-icons">mode_edit</i></a>
								<a href="<?php echo base_url()?>index.php/Inventory_ctr/invDeletePet/<?php echo $petinvlist[$i]->ProdID ?>"><i class="material-icons">delete</i></a>
							</td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
            	</table>
			</div>
			<div class="col s1"></div>
			<br>
		</div>
	</div>
</main>