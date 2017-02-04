<br>
<main>
		
<!--Add products tab-->
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">ADD | Products</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Update the Products Database.</p>
			</div>
		</div>
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
				<label>File Name</label><br><br>
					<form action="Product_Upload.php" method="post" enctype="multipart/form-data">
    					<input type="file" name="fileToUpload" id="fileToUpload">
					</form>		
				</div>		
			</div>
			<div class="col s6">	
			</div>
			<a class="waves-effect waves-light btn right" type="submit" name="submit">Upload</a>
		</div>
	</div>
</main>