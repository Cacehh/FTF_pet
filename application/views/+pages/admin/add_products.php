<br>
<main>
		
<!--Add pets tab-->
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Products</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Add new products</p>
			</div>
		</div>
		<ul class="collapsible " data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>
					Add Products
				</div>
				<div class="collapsible-body">
					<br>
					<div class="row container">
						<div class="col s6">
							<h5>Product Name</h5>
							<input placeholder="Productname" id="productname" type="text" class="validate">		
							<h5>Description</h5>
							<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
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
						</div>
						<div class="col s6">
							<div class="row">
								<div class="col s4">
									<h5>Supply Price</h4>
								</div>
								<div class="col s4">
									<h5>Mark Up</h5>
								</div>
								<div class="col s4">
									<h5>Retail Price</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s4">
									<input placeholder="SP" id="supplyprice" type="number" class="validate">
<!--									<b>+</b>-->
								</div>		
								<div class="col s4">
									<input placeholder="MU" id="markup" type="number" class="validate">
<!--									<b>=</b>-->
								</div>						
								<div class="col s4">
									<input placeholder="RP" id="retailprice" type="number" class="validate">
								</div>
							</div>
							<div class="row">
									<input placeholder="Product Tags" id="producttags" type="text" class="validate">
									<a class="waves-effect waves-light btn">Add</a>
							</div>
						</div>
					</div>
					
					<div class="divider"></div>
					
					<script>
					  $(document).ready(function() {
						$('select').material_select();
					  });
					 $('select').material_select('destroy');
					</script>
					<br><br>
					<div class="row container">
						<div class="col s6">
							<div class="input-field">
								<select>
									<option value="Sample disabled" disabled selected>Product Type</option>
									<option value="1">Groom</option>
									<option value="2">Health</option>
									<option value="3">Accessory</option>
								</select>
								<label>Product Type</label>		
							</div>		
						</div>
						<div class="col s6">
							<div class="input-field">
								<select>
									<option value="1" selected>Generic Brand</option>
									<option value="2">Pedigree</option>
									<option value="3">Champion</option>
								</select>
								<label>Product Brand</label>
							</div>
						<a class="waves-effect waves-light btn right">Add Pet</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>
					Add Pets
				</div>
				<div class="collapsible-body">
					<br>
					<div class="row container">
						<div class="col s6">
							<h5>Pet Type</h5>
								<div class="input-field">
									<select>
										<option value="1">Fish</option>
										<option value="2">Cat</option>
										<option value="3">Dog</option>
										<option value="4">Small and Furry</option>
										<option value="5">Birds</option>
									</select>
								</div>
								<div class="col s6">
									<h5>Pet Name</h5>
									<input placeholder="Petname" id="productname" type="text" class="validate">
								</div>
								<div class="col s6 input-filed">
									<h5>Gender</h5>
									<select>
										<option value="1">N/A</option>
										<option value="2">Male</option>
										<option value="3">Female</option>
									</select>
								</div>
							<h5>Description</h5>
							<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
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
						</div>
						<div class="col s6">
							<div class="row">
								<div class="col s4">
									<h5>Supply Price</h4>
								</div>
								<div class="col s4">
									<h5>Mark Up</h5>
								</div>
								<div class="col s4">
									<h5>Retail Price</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s4">
									<input placeholder="SP" id="supplyprice" type="number" class="validate">
			<!--									<b>+</b>-->
								</div>		
								<div class="col s4">
									<input placeholder="MU" id="markup" type="number" class="validate">
			<!--									<b>=</b>-->
								</div>						
								<div class="col s4">
									<input placeholder="RP" id="retailprice" type="number" class="validate">
								</div>
							</div>
							<div class="row">
									<input placeholder="Product Tags" id="producttags" type="text" class="validate">
									<a class="waves-effect waves-light btn">Add</a>
							</div>
							<div class="row">
								<b>Tags:</b>
								<p>Hairy, Green Tail, small</p>
							</div>
						</div>
					</div>

					<div class="divider"></div>

					<script>
					  $(document).ready(function() {
						$('select').material_select();
					  });
					 $('select').material_select('destroy');
					</script>
					<br><br>
					<div class="row container">
						<div class="col s6">
							<div class="input-field">
								<select>
									<option value="Sample disabled" disabled selected>Breeder</option>
									<option value="1">Mark and Jay Dog Center</option>
									<option value="2">Susan Hamser breeding</option>
									<option value="3">Breedingan ng Baguio</option>
								</select>
								<label>Pet Breeder</label>		
							</div>		
						</div>
						<div class="col s6">
						</div>
						<a class="waves-effect waves-light btn right">Add Pet</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</main>