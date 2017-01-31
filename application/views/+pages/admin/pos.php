
<main>
<br>
	<div class="row">
		<div class="input-field col s7">
			<div class="row">
				<div class="col s12">
					<i class="material-icons prefix">search</i>

					<script type="text/javascript">
						$(document).ready(function() {
							$('#username').autocomplete({
								source: "<?php echo site_url('model_possearch/search/?'); ?>"
							});
						});

					</script>

					<input id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">Search for Pets and Pruducts</label>
				</div>
			</div>
<!-- 			<div class="row">
				<div class="col s3 blue center">
					<h1>
					<a class="white-text" href="#">Fish</a>
					</h1>
				</div>
				<div class="col s3 red"></div>
				<div class="col s3 green"></div>
				<div class="col s3 yellow"></div>
			</div> -->
<!--			First Row-->
			<div class="row">
				<h4>Pets</h4>
				<div class="col s3 ">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Fish</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>
							</li>
						</ul>
					</span>				
				</div>
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Dogs</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>
							</li>
						</ul>
					</span>	
				</div>
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Cats</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>
							</li>
						</ul>
					</span>
				</div>			
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Furry</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>
							</li>
						</ul>
					</span>
				</div>
			</div>

<!--			Second Row-->
			<div class="row">
				<h4>Products</h4>
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Fish</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>					
							</li>
						</ul>
					</span>				
				</div>
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Dogs</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>					
							</li>
						</ul>
					</span>	
				</div>
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Cats</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>						
							</li>
						</ul>
					</span>
				</div>			
				<div class="col s3">
					<span class="card-title activator grey-text text-darken-4">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
							<div class="collapsible-header"><i class="material-icons">shopping_basket</i>Furry</div>
							<div class="collapsible-body">
								<table class="centered">
								<tbody>
								<tr>
								<td><a href="#">Guppy</a></td>
								</tr>
								<tr>
								<td><a href="#">Gold</a></td>
								</tr>
								<tr>
								<td><a href="#">Beta Fighting</a></td>
								</tr>
								<tr>
								<td><a href="#">Common Carp</a></td>
								</tr>
								</tbody>
								</table>
							</div>						
							</li>
						</ul>
					</span>
				</div>
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