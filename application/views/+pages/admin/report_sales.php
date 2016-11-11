
<main>
	<br>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Sales Report</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Generate sales reports</p>
			</div>
		</div>	
	</div>

	<script>
	$('.datepicker').pickdate({
	selectMonths: true,
	selectYears: 15
	});
	</script>
	<div class="container row">
		<div class="col s4">
			<label><h5>From</h5></label>
			<input type="data" class="datepicker" name="From">
		</div>		
		<div class="col s4">
			<label><h5>To</h5></label>
			<input type="data" class="datepicker" name="To">
		</div>	
		<div class="col s4">
			<label><h6>Sort</h6></label>
          <a class="center waves-effect waves-light btn deep-orange darken-1">Go</a>
		</div>	
	</div>
	<div class="container">
		
		<table class="highlight">
			<thead>
				<tr>
					<th data-field="prodid">Product ID</th>
					<th data-field="price">Amount</th>
					<th data-field="proddate">Date Purchased</th>
					<th data-field="prodtype"> Category</th>
					<th data-field="prodquantity">Quantity</th>
					<th data-field="proddesc">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>1</td>
				<td>&#8369 4,999</td>
				<td>&#8369 November 10, 2016</td>
				<td>Accessories</td>
				<td>2</td>
				<td> Dog Leash<td>
				</tr>
				
				<tr>
					<td>2</td>
					<td>&#8369 2,599</td>
					<td>&#8369 November 11, 2016</td>
					<td>Dog Food</td>
					<td>1</td>
					<td>1 kg Dog Food</td>
				</tr>
				
				<tr>
					<td>3</td>
					<td>&#8369 3,500</td>
					<td>&#8369 November 12, 2016</td>
					<td>Fish Aquarium</td>
					<td>1</td>
					<td>Size: 1000X800</td>
				</tr>
				
				<tr>
					<td>4</td>
					<td>&#8369 4,999</td>
					<td>&#8369 November 13, 2016</td>
					<td>Cat Food</td>
					<td>5</td>
					<td> 5 Bags of Cat food</td>
				</tr>
			</tbody>
		</table>
			<br>
			<br>
		<div class="right col s12">
			<h5>Total Sales: &#8369 16,097</h5>
		</div>
		
		<div class="row">
			<div class="col s6">
				<div class="col s6"><a class="waves-effect waves-light btn grey darken-3">Print</a></div>
				<div class="col s6"><a class="waves-effect waves-light btn grey darken-3">Save As</a></div>
			</div>
		</div>
	</div>
</main>