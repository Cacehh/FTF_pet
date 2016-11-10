
<br>
<main>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">LIST | Pets</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">View pets that would be displayed in the website</p>
			</div>
		</div>
		<div class="row">
			<div class="col S12 ">
				<a href="<?php echo base_url()?>index.php/Web_Admin_ctr/addPets" class="waves-effect waves-light btn right">Add Pet</a>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<a class='dropdown-button btn' href='#' data-activates='sort1'>Show by Type</a>
				<ul id='sort1' class='dropdown-content'>
					<li><a href="#!">Dog</a></li>
					<li><a href="#!">Cat</a></li>
					<li><a href="#!">Fish</a></li>
					<li><a href="#!">Small and Furry</a></li>
				</ul>
			</div>
			<div class="col s6">
				
			</div>
		</div>
		<div class="row">
			<table class="centered highlight bordered responsive-table ">
				<thead>
					<tr>
					<th data-field="petename">Name</th>
					<th data-field="type">Type</th>
					<th data-field="gender">Gender</th>
					<th data-field="description">Description</th>
					<th data-field="price">Price</th>
					<th data-field="status">Status</th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<td>Siberian Husky</td>
					<td>Dog</td>
					<td>Male</td>
					<td>Siberian Husky with blue eyes</td>
					<td>&#8369; 10,000</td>
					<td data-field="status">
						<div class="switch">
							<label>
							<i class="green-text">Out of Stock</i>
							<input type="checkbox">
							<span class="lever"></span>
							<i class="red-text">In Stock</i>
							</label>
						</div>
					</td>
					<td>
						<a href=""><i class="material-icons">mode_edit</i></a>
					</td>
					</tr>	

					<tr>
					<td>Dog</td>
					<td>Poodle</td>
					<td>Male</td>
					<td>Black fur</td>
					<td>&#8369; 8,000</td>
					<td data-field="status">
						<div class="switch">
							<label>
							<i class="green-text">Out of Stock</i>
							<input type="checkbox">
							<span class="lever"></span>
							<i class="red-text">In Stock</i>
							</label>
						</div>
					</td>
					<td>
						<a href=""><i class="material-icons">mode_edit</i></a>
					</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</main>