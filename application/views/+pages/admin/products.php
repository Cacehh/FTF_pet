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
		
		<div class="row container center">
			<div class=" col s4">
				<h5>Sort by Product Type</h5>
				<select multiple>
					<optgroup label="Dog">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>
					<optgroup label="Cat">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>
					<optgroup label="Fish">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>	
					<optgroup label="Small and Furry">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>		
					<optgroup label="Birds">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>
					<optgroup label="Other pets">
						<option value="food">Food</option>
						<option value="treats">Treats</option>
						<option value="supply">Supply</option>
					</optgroup>
				</select>
				<label>Optgroups</label>
			</div>
			<div class="col s4">
				<h5>Brand</h5>
				<select>
				<option value="" disabled selected>Sort by Brand</option>
				<option value="1">Generic Brand</option>
				<option value="2">Pedigree</option>
				<option value="3"></option>
				</select>
			</div>
			<div class="col s4">
				<h5>Supplier</h5>
				<select>
				<option value="" disabled selected>Sort by Supplier</option>
				<option value="1">Bob Whole sale</option>
				<option value="2">Bob Whole sale</option>
				<option value="3">Bob Whole sale</option>
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
<!--				<a class="waves-effect waves-light btn">Clear Filter</a>-->
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
						<th data-field="name">Name</th>
						<th data-field="producttype">Type</th>
						<th data-field="tags">Tags</th>
						<th data-field="brand">Brand</th>
						<th data-field="supplier">Supplier</th>
						<th data-field="price">Price</th>
						<th data-field="instock">In-stock</th>
						</tr>
					</thead>

					<tbody>
						<tr>
						<td>Denta Stix</td>
						<td>Dog food</td>
						<td><u>treat</u> , <u>Sack</u></td>
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
						<td><u>treat</u> , <u>food</u></td>
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