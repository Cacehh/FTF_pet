<br>
<main>
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Pets</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View, Edit and Delete Pets</p>
			</div>
		</div>

		<div class="row container center">
			<div class="col s12">
				<i class="material-icons prefix">search</i>
					<script type="text/javascript">
						// $(document).ready(function() {
						// 	$('#username').autocomplete( {
						// 		source: "<?php echo site_url('petinv_model/search/?'); ?>"
						// 	});
						// });
					</script>

						<?php
		               	    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
		               	    echo form_open("Inventory_ctr/invPetSearch", $attr);
		               	?>

		                <div class="form-group">
		                    <div class="col-md-6">
		                        <input class="form-control" id="icon_prefix" name="petinv_name" type="text" value="<?php echo set_value('petinv_name'); ?>" />
								<label for="icon_prefix">Search for Pets</label>
		                    </div>

		                    <div class="col-md-6">
		                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
		                        <a href="<?php echo base_url(). "index.php/Inventory_ctr/pets"; ?>" class="btn btn-primary">Refresh Product List</a>
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
			<div class="col s12">

				<table class="bordered centered highlight">
				<!-- <table class="bordered stripped centered responsive-table"> -->
	                <thead>
	                    <tr>
	                    <th data-field ="#">#</th>
	                    <th data-field ="productID">Product ID</th>
	                    <th data-field ="">Product Name</th>
	                    <th data-field ="">Category</th>
	                    <th data-field ="">Amount</th>
	                    <th data-field ="">Quantity</th>
	                    <th data-field ="">Timestamp</th>
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
	                        <td><?php
	                        	echo "&#8369;";
	                        	echo $petinvlist[$i]->Amount; ?></td>
	                        <td><?php echo $petinvlist[$i]->Quantity; ?></td>
	                        <td><?php echo $petinvlist[$i]->Timestamp; ?></td>
	                        <td>
                            <a href="<?php echo base_url()?>index.php/Admin_Product_ctr/editPet/<?php echo $petinvlist[$i]->ProdID ?>"><i class="material-icons">mode_edit</i></a>
            								<a href="<?php echo base_url()?>index.php/Admin_Product_ctr/invDeletePet/<?php echo $petinvlist[$i]->ProdID ?>"><i class="material-icons">delete</i></a>
							</td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
            	</table>

			</div>
			<br>
		</div>
	</div>
</main>
