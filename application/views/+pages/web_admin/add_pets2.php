

<br>
<main>
		
<!--Add pets tab-->
	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">ADD | Pets</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Update the Pet Database</p>
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
					<form action="Pet_Upload/do_upload" method="post" enctype="multipart/form-data">
    					<input type="file" name="fileToUpload" id="fileToUpload">
    					<input type="submit" class="waves-effect waves-light btn right" value="upload">
					</form>		
				</div>		
			</div>
			<div class="col s6">	
			</div>
		</div>
	</div>
</main>