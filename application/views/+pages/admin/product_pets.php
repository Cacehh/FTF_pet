<br>
<main>
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Pets</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View, Edit and Delete Pets</p>
			</div>
		</div>
		
		<div class="row container center">
			<div class=" col s6">
				<h5>Pet Classification</h5>
				<select>
				<option value="" disabled selected>Choose your option</option>
				<option value="1">dog</option>
				<option value="2">cat</option>
				<option value="3">Small and furry</option>
				<option value="4">birds</option>
				</select>
			</div>
			<div class="col s6">
				<h5>Supplier</h5>
				<select>
				<option value="" disabled selected>Choose your option</option>
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
				</select>
			</div>
			<div class="col s4">
				<h5>Tags</h5>
				<input id="Tags" type="text" class="validate">
			</div>
			<div class="col s3 ">
					<div class="chip">
						Fluffy
						<i class="close material-icons">close</i>
					</div>	
					<div class="chip">
						Dark Brown
						<i class="close material-icons">close</i>
					</div>
			</div>
			<div class="col s5">
				<br>
				<a href="#">clear filters</a>
				<a class="waves-effect waves-light btn">Apply Filter</a>
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
						<th data-field="name"> Name</th>
						<th data-field="producttype">Type</th>
						<th data-field="tags">Tags</th>
						<th data-field="supplier">Supplier</th>
						<th data-field="price">Price</th>
						<th data-field="instock">In-stock</th>
						</tr>
					</thead>

					<tbody>
						<tr>
						<td>Poodle</td>
						<td>Dog</td>
						<td><u>brown</u> , <u>furry</u></td>
						<td>Breddingan Center</td>
						<td>&#8369; 10,005.00</td>
						<td>N/A</td>
						<td>
							<a href=""><i class="material-icons">mode_edit</i></a>
							<a href=""><i class="material-icons">delete</i></a>
						</td>
						</tr>
			
						<tr>
						<td>Azkal</td>
						<td>Dog</td>
						<td><u>brown</u> , <u>furry</u></td>
						<td>Breedingan Center</td>
						<td>&#8369; 2,000.00</td>
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