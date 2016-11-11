
<main>
	<br>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Get Orders</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Input customers orders from call-ins and walk-ins</p>
			</div>
		</div>

		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">add_shopping_cart</i>
						<input id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix">Add Item</label>
						<div class="col s12">
						<button type="button" class="btn waves-effect waves-light"><i class="material-icons right">exposure_plus_1</i>Add Item</button>
						</div>
						<div class="row"></div>
						<div class="col 12 blue-grey lighten-5">
							<table>
								<thead>
									<tr>
										<th data-field="id">Item ID</th>
										<th data-field="name">Item Name</th>
										<th data-field="price">Item Price</th>
									</tr>
								</thead>
							
								<tbody>
									<tr>
										<td>002</td>
										<td>Cage 30x23</td>
										<td>&#8369; 100.00</td>
									</tr>
									<tr>
										<td>004</td>
										<td>Vitamin A plus</td>
										<td>&#8369; 100.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_telephone" type="tel" class="validate">
						<label for="icon_telephone">Customer</label>
						<button type="button" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Find</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>