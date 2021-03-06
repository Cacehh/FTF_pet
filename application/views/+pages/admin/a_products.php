<br>
<main>
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Products</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View, Edit and Delete products</p>
			</div>
		</div>

	<div class="row container center">
					<div class="col s12">
						<i class="material-icons prefix">search</i>

						<script type="text/javascript">
							// $(document).ready(function() {
							// 	$('#username').autocomplete( {
							// 		source: "<?php echo site_url('prodinv_model/search/?'); ?>"
							// 	});
							// });
						</script>

						<?php
		                    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
		                    echo form_open("Admin_Product_ctr/invProdSearch", $attr);
		                    // FIXX from redirection of pages
		                ?>

		                <div class="form-group">
		                    <div class="col-md-6">
		                        <input class="form-control" id="icon_prefix" name="prodinv_name" type="text" value="<?php echo set_value('prodinv_name'); ?>" />
								<label for="icon_prefix">Search for Products</label>
								<!-- <input id="icon_prefix" type="text" class="validate"> -->
		                    </div>

		                    <div class="col-md-6">
		                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
		                        <a href="<?php echo base_url(). "index.php/Admin_Product_ctr/index"; ?>" class="btn btn-primary">Refresh Product List</a>
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
	                    <?php for ($i = 0; $i < count($prodinvlist); ++$i) { ?>
	                    <tr>
	                        <td><?php echo ($page+$i+1); ?></td>
	                        <td><?php echo $prodinvlist[$i]->ProdID; ?></td>
	                        <td><?php echo $prodinvlist[$i]->ProdName; ?></td>
	                        <td><?php echo $prodinvlist[$i]->Category; ?></td>
	                        <td><?php echo $prodinvlist[$i]->Amount; ?></td>
	                        <td><?php echo $prodinvlist[$i]->Quantity; ?></td>
	                        <td><?php echo $prodinvlist[$i]->Timestamp; ?></td>
	                        <td>
								<a href="<?php echo base_url()?>index.php/Admin_Product_ctr/edit_product/<?php echo $prodinvlist[$i]->ProdID ?>"><i class="material-icons">mode_edit</i></a>
								<a href="<?php echo base_url()?>index.php/Admin_Product_ctr/invDeleteProd/<?php echo $prodinvlist[$i]->ProdID ?>"><i class="material-icons">delete</i></a>
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
