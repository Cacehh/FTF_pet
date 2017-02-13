<br>
<main>
		
<!--Add products tab-->
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Pets</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s12">
				<p class="flow-text">Add new pets</p>
			</div>
		</div>
					<br>
					<div class="row">
						<div class="input-field col s12">
						    <div class="input-field col s6">
						    	<h5>Pet Name</h5>
									<input placeholder="Productname" id="productname" type="text" class="validate">	
						  	</div>

						  	<div class="input-field col s6">
						  		<h5>Description</h5>
								<input placeholder="Description" id="Description" type="text" class="validate">	
						  	</div>
						</div>

						<div class="input-field col s12">
							<div class="input-field col s4">
								<h5>Supply Price</h4>
								<input placeholder="SP" id="supplyprice" type="number" class="validate">
<!--							<b>+</b>-->
							</div>

							<div class="input-field col s4">
								<h5>Mark Up</h5>
								<input placeholder="MU" id="markup" type="number" class="validate">
<!--							<b>=</b>-->
							</div>

							<div class="input-field col s4">
								<h5>Retail Price</h5>
								<input placeholder="RP" id="retailprice" type="number" class="validate">
							</div>
						</div>

						<div class="input-field col s12">
							<div class="input-field col s6">
								<h5>Quantity</h5>
								<input placeholder="Qty" id="Quantity" type="number" class="validate">
<!--							<b>=</b>-->
							</div>

							<script>
							  $(document).ready(function() {
								$('select').material_select();
							  });
							 $('select').material_select('destroy');
							</script>

							<div class="input-field col s6">
								<h5>Pet Type</h5>
								<div class="input-field">
									<select>
										<option value="Sample disabled" disabled selected>Pet Type</option>
										<option value="1">Dog</option>
										<option value="2">Cat</option>
										<option value="3">Fish</option>
									</select>
									<!-- <label>Product Type</label>		 -->
								</div>	
							</div>
						</div>

						<div class="input-field col s12">
							<div class="input-field col s8">
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

							<div class="col s12">
								<a class="waves-effect waves-light btn right">Add Pet</a>
							</div>
						</div>

					<!-- <div class="row container">
							<div class="row">
									<input placeholder="Product Tags" id="producttags" type="text" class="validate">
									<a class="waves-effect waves-light btn">Add</a>
							</div>
						</div>
					</div> -->
					<!-- <div class="divider"></div> -->

	</div>
</main>