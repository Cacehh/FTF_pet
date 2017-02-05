
<main>
<br>
	<div class="row">
		<div class="input-field col s7">
			<div class="row">
				<div class="col s12">

					<script type="text/javascript">
						$(document).ready(function() {
							$('#username').autocomplete({
								source: "<?php echo site_url('model_possearch/search/?'); ?>"
							});
						});

					</script>

					<?php 
	                    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
	                    echo form_open("POS_ctr/search", $attr);
	                ?>
            
	                <div class="form-group">
	                    <div class="col-md-6">
							<i class="material-icons prefix">search</i>
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

			<div class="row">
				<table class="bordered centered highlight">
				<!-- <table class="bordered stripped centered responsive-table"> -->
	                <thead>
	                    <tr>
	                    <th>#</th>
	                    <th>Product ID</th>
	                    <th>Product Name</th>
	                    <th>Category</th>
	                    <th>Quantity</th>
	                    <th>Amount</th>
	                    <th>Timestamp</th>
	                    <th>Add</th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php for ($i = 0; $i < count($prodlist); ++$i) { ?>
	                    <tr>
	                        <td><?php echo ($page+$i+1); ?></td>
	                        <td><?php echo $prodlist[$i]->ProdID; ?></td>
	                        <td><?php echo $prodlist[$i]->ProdName; ?></td>
	                        <td><?php echo $prodlist[$i]->Category; ?></td>
	                        <td><?php echo $prodlist[$i]->Quantity; ?></td>
	                        <td><?php echo $prodlist[$i]->Amount; ?></td>
	                        <td><?php echo $prodlist[$i]->Timestamp; ?></td>
	                        <td><a class="waves-effect waves-light btn">Add Item</a></td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
            	</table>
			</div>
		</div>

		<div class="col s5">
			<div class="card grey darken-1">
				<div class="card-content white-text">
					<i class="material-icons prefix">perm_identity</i>
					<span class="card-title">Dela Cruz, Juan Tamad</span>
				</div>
				<div class="card-action">
					<div class="col s1 center">
						<b>Quantity</b>
					</div>
					<div class="col s7 center">
						<b>Item Name</b>
					</div>
					<div class="col s4 center">
						<b>Price</b>
					</div>
					<br>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<div class="row">
									<div class="col s1 center">
										4
									</div>
									<div class="col s7 center">
										Goldfish
									</div>
									<div class="col s4 right-align">
										&#x20B1; 100.00
									</div>
								</div>
							</div>
							<div class="collapsible-body white">
								<div class="row">
									<div class="input-field col s3">
										<input id="qty" type="number" class="validate">
										<label for="qty">QTY</label>		
									</div>
									<div class="input-field col s5">
										<input id="price" type="number" class="validate">
										<label for="price">Price</label>
									</div>
									<div class="input-field col s4">
										<input id="discount" type="number" class="validate">
										<label for="discount">Discount</label>
									</div>
									<div class="input-field col s12">
										<input id="note" type="text" class="validate">
										<label for="note">Add note...</label>
									</div>
								<a class="right" href="#">View product information.</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header ">
								<div class="row">
									<div class="col s1 center">
										1
									</div>
									<div class="col s7 center">
										Poodle
									</div>
									<div class="col s4 right-align">
										&#x20B1; 4500.00
									</div>
								</div>
							</div>
							<div class="collapsible-body white">
								<div class="row">
									<div class="input-field col s2">
										<input id="qty" type="number" class="validate">
										<label for="qty">Quantity</label>		
									</div>
									<div class="input-field col s5">
										<input id="price" type="number" class="validate">
										<label for="price">Price</label>
									</div>
									<div class="input-field col s5">
										<input id="discount" type="number" class="validate">
										<label for="discount">Discount</label>
									</div>
									<div class="input-field col s12">
										<input id="note" type="text" class="validate">
										<label for="note">Add note...</label>
									</div>
								<a class="right" href="#">View product information.</a>
								</div>
							</div>
						</li>	
					</ul>
				</div>	
				<div class="card-action">
					<div class="row">
						<div class="col s6">
							<b>Sub-total</b>
						</div>
						<div class="right-align col s6">
							<b>&#x20B1; 4,600</b>
						</div>
						<div class="col s6">
							<b>Discount</b>
						</div>
						<div class="right-align col s6">
							<b>&#x20B1; 0</b>
						</div>
						<div class="col s6">
							<h5 style="font-size: 40px">TOTAL</h5>
						</div>
						<div class="right-align col s6">
							<h5 style="font-size: 40px">&#x20B1; 4,600</h5>
						</div>
					</div>
				</div>		
				<div class="card-action">
					<a class="waves-effect waves-light btn-large"><i class="material-icons left">payment</i>Pay</a>
					<a class="waves-effect waves-light btn-large"><i class="material-icons left">payment</i>Park Order</a>
				</div>
			</div>
		</div>
	</div>

	<div class="divider"></div>
	<br>
	<div class="row">
		<div class=" col s12">
			<p class="center">
				<input type="checkbox" id="test1" />
				<label for="test1">Custom pet customer</label>
			</p>

		</div>
		<div class="input-field col s6">
			<i class="material-icons prefix">account_circle</i>
			<input id="icon_prefix" type="text" class="validate">
			<label for="icon_prefix">Find Previous customer</label>
		</div>

		<div class="input-field col s6">
			<textarea id="textarea1" class="materialize-textarea"></textarea>
			<label for="textarea1">Additional Information</label>
		</div>
		<div class="col s6">
			<button type="button" class=" right waves-effect waves-orange btn deep-orange"><i class="mdi-content-add"></i>Find</button>
		</div>
	</div>
	<div class="divider"></div>


	<br>
	<br>
	<br>
</main>