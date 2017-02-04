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
		
	<div class="row">
		<div class="input-field col s7">
			<div class="row">
					<div class="col s12">
						<i class="material-icons prefix">search</i>

						<script type="text/javascript">
							$(document).ready(function() {
								$('#username').autocomplete( {
									source: "<?php echo site_url('prodinv_model/search/?'); ?>"
								});
							});
						</script>

						<?php 
		                    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
		                    echo form_open("POS_ctr/search", $attr);
		                ?>
	            
		                <div class="form-group">
		                    <div class="col-md-6">
		                        <input class="form-control" id="icon_prefix" name="prod_name" type="text" value="<?php echo set_value('prod_name'); ?>" />
								<label for="icon_prefix">Search for Pets and Products</label>
								<!-- <input id="icon_prefix" type="text" class="validate"> -->
		                    </div>

		                    <div class="col-md-6">
		                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
		                        <a href="<?php echo base_url(). "index.php/POS_ctr/index"; ?>" class="btn btn-primary">Refresh Product List</a>
		                    </div>
		                </div>

		                <?php 
		                    echo form_close(); 
		                ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="divider"></div>
		<br>
		<div class="row">
			<br>
			<div class="col s12">
				<table class="centered">
					<thead>
						<tr>
							<th data-field="name">Name</th>
							<th data-field="producttype">Type</th>
							<th data-field="brand">Brand</th>
							<th data-field="supplier">Supplier</th>
							<th data-field="price">Price</th>
							<th data-field="quantity">Quantity</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Denta Stix</td>
							<td>Dog food</td>
							<td>Pedigree</td>
							<td>Bob Whole Sale</td>
							<td>&#8369; 99.00</td>
							<td>55</td>
							<td>
								<a href=""><i class="material-icons">mode_edit</i></a>
								<a href=""><i class="material-icons">delete</i></a>
							</td>
						</tr>
			
						<tr>
							<td>Fine Grain mix</td>
							<td>Dog food</td>
							<td>Pedigree</td>
							<td>Bob Whole Sale</td>
							<td>&#8369; 150.00</td>
							<td>20</td>
							<td>
								<a href=""><i class="material-icons">mode_edit</i></a>
								<a href=""><i class="material-icons">delete</i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
		</div>
	</div>
</main>