
<br>
<main>
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Sales History</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View, sort or search made sales</p>
			</div>
		</div>
		
		<div class="row">
			<div class="offset-s3 col s2 input-field">
				<select>
					<option value="" disabled selected>Replace w/ calendarjs</option>
				</select>
				<label>Date</label>
			</div>
			<div class="col s3 input-field">
				<input id="customername" type="text" class="validate">
				<label for="last_name">Customer Name</label>
			</div>
			<div class="col s3 input-field">
				<a href="#">Clear Filters</a>
				<a href="<?php echo base_url()?>index.php/Admin_Product_ctr/add" class="white-text waves-effect waves-orange btn deep-orange accent-3">
					PRODUCTS
				</a>
			</div>
		</div>
		
		<div class="bordered highlight centered responisve-table container">
			<table>
				<thead>
					<tr>
					<th data-field="date">Date</th>
					<th data-field="customer">Customer</th>
					<th data-field="itemstotal">Items Total</th>
					<th data-field="saletotal">Sale Total</th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<td>23 May 2015</td>
					<td>Juan </td>
					<td>1</td>
					<td>&#8369; 100</td>
					</tr>
					<tr>
					<td>23 May 2015</td>
					<td>Juan </td>
					<td>1</td>
					<td>&#8369; 100</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</main>