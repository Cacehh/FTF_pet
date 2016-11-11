
<main>
	<br>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Inventory Report</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Generate inevntory reports</p>
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
				<th data-field="prodname">Payment ID</th>
				<th data-field="price">Amount</th>
				<th data-field="prodsold">Date</th>
				<th data-field="prodtype"> Payment Type</th>
				<th data-field="prodtime">Timstamp</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>&#8369 4,999</td>
				<td>&#8369 November 10, 2016</td>
				<td>Cash</td>
				<td>17:00:56</td>
			</tr>
			<tr>
				<td>2</td>
				<td>&#8369 2,599</td>
				<td>&#8369 November 11, 2016</td>
				<td>Deposit</td>
				<td>16:25:56</td>
			</tr>
			<tr>
				<td>3</td>
				<td>&#8369 3,500</td>
				<td>&#8369 November 12, 2016</td>
				<td>Deposit</td>
				<td>16:20:34</td>
			</tr>
			<tr>
				<td>4</td>
				<td>&#8369 4,999</td>
				<td>&#8369 November 13, 2016</td>
				<td>Cash</td>
				<td>16:15:14</td>
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