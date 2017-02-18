<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
</head>

<main class="">   
    <div class="row">
        <div class="col s9">
			<?php
				
				$count = 1;
				
				foreach ($product as $row) {
							
					if ($count%4 == 1){  
							 echo "<div class=\"row\">";
						}
						
					echo "<div class=\"card col s3 hoverable\">";
					echo "<div class=\"card-image waves-effect waves-block waves-light\">";
					echo "<img class=\"activator\" src=".base_url()."public/media/products/" .$row ->Image. ".jpg>";
					echo "</div>";
					echo "<div class=\"card-content\">";
					echo "<span class=\"card-title activator grey-text text-darken-4\">";
					echo "<a href=\"" .base_url(). "index.php/Pages_ctr/productDetails\">" .$row ->ProdName. "</a><i class=\"material-icons right\">more_vert</i></span>";
					echo "<b><p><a href=\"#\">Add to wishlist</a><b> | </b> <a href=\"#\">Choices...</a></p></b>";
					echo "</div>";
					echo "<div class=\"card-reveal\">";
					echo "<span class=\"card-title grey-text text-darken-4\">More info...<i class=\"material-icons right\">close</i></span>";
					echo "<p>" .$row ->Amount. " dollars</p>";
					echo "</div>";
					echo "</div>";
				
					if ($count%4 == 0){
							 echo "</div>";
					}
						
					$count++;
				}			
			?>
		</div>
	
				<div class="col s3">
					<div class="blue-grey lighten-5 z-depth-1">
						<br>
						<h3 class="center">WISHLIST</h3>
						<table>
							<thead>
								<tr>
									<th data-field="name">Item Name</th>
									<th data-field="price">Item Price</th>
									<th data-field="edit">Edit</th>
								</tr>
							</thead>
						
							<tbody>
								<tr>
									<td>Pedigree Chewies</td>
									<td>&#8369; 399.00</td>
									<td>
									<a href=""><i class="material-icons">mode_edit</i></a>
									</td>         
								</tr>
								<tr>
									<td>Colar - Red</td>
									<td>&#8369; 43.00</td>
									<td>
									<a href=""><i class="material-icons">mode_edit</i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
</main>
