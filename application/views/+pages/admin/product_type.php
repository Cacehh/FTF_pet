
<main>
	<br>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Product Type</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View, edit and add product types</p>
			</div>
		</div>

		<div class="row">
			<div class="col S12">
				<a class="waves-effect waves-light btn right">Add Type</a>
			</div>
		</div>

		<div class="row container center">
					<div class="col s12">

						<?php
		                    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
		                    echo form_open("Inventory_ctr/prodTypeSearch", $attr);
		                ?>

		                <div class="form-group">
		                    <div class="col-md-6">
								<i class="material-icons prefix">search</i>
								<input class="form-control " id="icon_prefix" name="prodType_name" type="text"
									value="<?php echo set_value('prodType_name'); ?>" />
								<label for="icon_prefix">Search for Product Types</label>
		                    </div>

		                    <div class="col-md-6">
		                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
		                        <a href="<?php echo base_url(). "index.php/Inventory_ctr/prodType"; ?>" class="btn btn-primary">Refresh Product Type List</a>
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
			<div class=" container">
					<table class="bordered centered highlight">
					<!-- <table class="bordered stripped centered responsive-table"> -->
		                <thead>
		                    <tr>
			                    <th data-field ="#">#</th>
			                    <th data-field ="type">Product Type</th>
			                    <th data-field ="prodnum">Number of Products</th>
		                    </tr>
		                </thead>

		                <tbody>
		                    <?php for ($i = 0; $i < count($typelist); ++$i) { ?>
			                    <tr>
			                        <td><?php echo ($page+$i+1); ?></td>
			                        <td><?php echo $typelist[$i]->Type; ?></td>
			                        <td><?php 
			                        	// echo $typelist[$i]->ProdNum; ?>
			                        </td>
			                        <td>
			                        <td>
			                        	<a href="#"><i class="material-icons">visibility</i></a>
										<a href="#"><i class="material-icons">mode_edit</i></a>
										<a href="#"><i class="material-icons">delete</i></a>
									</td>
			                    </tr>
		                    <?php } ?>
		                </tbody>
	            	</table>

				</div>
				<br>
			</div>
		</div>
		
	</div>
</main>