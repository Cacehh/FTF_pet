	<header>
		<script>
			$(document).ready(function(){
			$('.slider').slider({full_width: true});
			});
		</script>
	</header>	
	<main>
		<div class="slider fullscreen">
			<ul class="slides">
				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage1.jpg">  random image 
					<div class="caption center-align">
						<h1>This is our big Tagline!</h1>
						<h1 class="light grey-text text-lighten-3">Here's our small slogan.</h1>
						<h2>hello</h2>
					</div>
				</li>

				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage2.jpg">  random image 
					<div class="caption left-align">
						<h3>Left Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>

				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage3.jpg">  random image 
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>

				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage4.jpg"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>

				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage5.jpg">  random image 
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>

				<li>
					<img src="<?php echo base_url()?>public/media/slides/slideImage6.jpg">  random image 
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				
			</ul>
		</div>

		<div id="content">
			<script>
				$(document).ready(function(){
				$('.carousel').carousel({
				dist:0,
				shift:0,
				padding:20,
				});
				});
			</script>
			
			<br>
			<div class="carousel center">    
				<div class="center" id="homeheader">
					<h3>Promos and Discounts!</h3>
				</div>  
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
				<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/sale/sale.png"></a>
			</div>  
			<div id = "buttons" class="container center">
				<a href="<?php echo base_url()?>index.php/Pages_ctr/viewProducts" id="button" class="waves-effect waves-light btn orange center">Show More</a>
			</div>

			<div class="center">
				<div class="center" id="homeheader">
					<h3>Adopt A Pet Now!</h3>
				</div>
                
				<div class="row hover11">
					<div class="col s3">
						<figure class="row s3"><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/dog.jpg"/></a></figure>
						<span>Dogs</span>
					</div>
					<div class="col s3">
						<figure class="row s3"><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/cat.jpg"/></a></figure>
						<span>Cats</span>
					</div>
					<div class="col s3">
						<figure class="row s3"><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/birds.jpg"/></a></figure>
						<span>Birds</span>
					</div>
					<div class="col s3">
						<figure class="row s3"><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/fish.jpg"/></a></figure>
						<span>Fish</span>
					</div>
				</div>		
				<div id="buttons" class="container center">
				<a href="<?php echo base_url()?>index.php/Pages_ctr/viewProducts" id="button" class="waves-effect waves-light btn orange center">Show More</a>
				</div>
			</div>
            
             

			<div id="part3" class="center">
                <hr class="style13">

				<div class="center" id="homeheader">
					<h3>Best Seller!</h3>
				</div>

				<div class="row ">
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/1.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/2.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/3.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/4.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/5.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/6.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/7.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/8.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
				</div>
				<div id="buttons" class="container center">
					<a href="index.html" id="button" class="waves-effect waves-light btn orange">Show More</a>
				</div>
			</div>
            
            <div id="part3" class="center">
                <hr class="style13">

				<div class="center" id="homeheader">
					<h3>New Arrivals!</h3>
				</div>

				<div class="row ">
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/9.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/10.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/11.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/12.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/13.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>   
                    
					<div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/14.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/15.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
                    <div class="card col s3 hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://localhost/_ITProject/_FTF_v2/public/media/products/16.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								<a href="http://localhost/_ITProject/_FTF_v2/index.php/Pages_ctr/productDetails">Dog food 1</a><i class="material-icons right">more_vert</i></span>
							<b><p><a href="#">Add to cart</a><b> | </b> <a href="#">Choices...</a></p></b>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">More info...<i class="material-icons right">close</i></span>
							<p>This type of dog food is best for puppies aged 1 to 3 months old.</p>
						</div>
					</div>
                    
				</div>
				<div id="buttons" class="container center">
					<a href="<?php echo base_url()?>index.php/Pages_ctr/viewPets" id="button" class="waves-effect waves-light btn orange center">Show More</a>
				</div>
			</div>


			<div id="part4" class="center">
                <hr class="style13">

                <script>
                $(document).ready(function(){
                $('.carousel').carousel();
                });
                </script>

                <div id="gallery" class="carousel center">   
                    <div class="center" id="homeheader">
                        <h3>Gallery</h3>
                    </div>  
                    
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal1.jpg"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal2.jpg"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal3.jpg"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal4.jpg"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal5.jpg"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal6.png"></a>			
					<a class="carousel-item" href="#one!"><img src="<?php echo base_url()?>public/media/gallery/gal7.jfif"></a>			
                </div>  

                <div id = "buttons" class="container center">
                     <a id="button" class="waves-effect waves-light btn orange center">Show More</a>
                </div>
			</div>
        </div>
    </main>
