<!--
<div class="row container flow-text">
	<div class=" col s4">
        <a href="<?php echo base_url()?>index.php/LoggedIn_ctr/viewProducts">This is the link</a>
        <p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quos, voluptate, sunt, in suscipit quibusdam quis dignissimos eligendi repellendus ipsam exercitationem adipisci nostrum fugit accusamus quae ccontainerum nisi accusantium eaque.
		</p>
    </div>	
    <div class="col s4">
    </div>
    <div class="col s4">
    </div>
</div> -->
		<header>
			<!--Import jQuery before materialize.js-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

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
		  <img src="<?php echo base_url()?>public/media/slides/pethome1.jpg"> <!-- random image -->
		  <div class="caption center-align">
		      <h3>This is our big Tagline!</h3>
		      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		  </div>
	     	</li>

	       <li>
		  <img src="<?php echo base_url()?>public/media/slides/pethome2.jpg"> <!-- random image -->
		  <div class="caption left-align">
		      <h3>Left Aligned Caption</h3>
		      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		  </div>
	       </li>

	       <li>
		  <img src="<?php echo base_url()?>public/media/slides/pethome3.jpg"> <!-- random image -->
		  <div class="caption center-align">
		      <h3>This is our big Tagline!</h3>
		      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		  </div>
	       </li>

	       <li>
		  <img src="<?php echo base_url()?>public/media/slides/pethome4.jpg"> <!-- random image -->
		  <div class="caption center-align">
		      <h3>This is our big Tagline!</h3>
		      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		  </div>
	       </li>

	       <li>
		  <img src="<?php echo base_url()?>public/media/slides/pethome5.jpg"> <!-- random image -->
		      <div class="caption center-align">
		      <h3>This is our big Tagline!</h3>
		      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		  </div>
	       </li>

	       <li>
		  <img src="<?php echo base_url()?>public/media/slides/pethome6.jpg"> <!-- random image -->
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
                    <a id="button" class="waves-effect waves-light btn orange center">Show More</a>
                </div>

                <div id="part2" class = "center">
                    <hr class="style13">

                    <div class="center" id="homeheader">
                        <h3>Adopt A Pet Now!</h3>
                    </div>

                    <div class="hover11 column">
                        <div>
                            <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/dog.jpg" /></a></figure>
                            <span>Dogs</span>
                        </div>

                        <div>
                            <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/cat.jpg"/></a></figure>
                            <span>Cats</span>
                        </div>

                        <div>
                            <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/birds.jpg"/></a></figure>
                            <span>Birds</span>
                        </div>

                        <div>
                            <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/pets/fish.jpg"/></a></figure>
                            <span>Fish</span>
                        </div>
                    </div>

                    <div id="buttons" class="container center">
                        <a href="index.html" id="button" class="waves-effect waves-light btn orange">Show More</a>
                    </div>
                </div>

                <div id="part3" class="center">
                     <hr class="style13">

                     <div class="center" id="homeheader">
                        <h3>Best Seller!</h3>
                    </div>

                <div class="hover11 column">
                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/collar.jpg" /></a></figure>
                        <span>Dogs</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/bowl.jpg"/></a></figure>
                        <span>Cats</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/dclothes.JPG"/></a></figure>
                        <span>Birds</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/dshampoo.jpg"/></a></figure>
                        <span>Fish</span>
                    </div>
                </div>

                <div class="hover11 column">
                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/collar.jpg" /></a></figure>
                        <span>Dogs</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/bowl.jpg"/></a></figure>
                        <span>Cats</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/dclothes.JPG"/></a></figure>
                        <span>Birds</span>
                    </div>

                    <div>
                        <figure><a href="index.html"><img src="<?php echo base_url()?>public/media/best_seller/dshampoo.jpg"/></a></figure>
                        <span>Fish</span>
                    </div>
                </div>

            <div id="buttons" class="container center">
                <a href="index.html" id="button" class="waves-effect waves-light btn orange">Show More</a>
            </div>

            </div>

<!--
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
                    <a class="carousel-item" href="#gal1"><img src="images/gal1.jpg"></a>
                    <a class="carousel-item" href="#gal2"><img src="images/gal2.jpg"></a>
                    <a class="carousel-item" href="#gal3"><img src="images/gal3.jpg"></a>
                    <a class="carousel-item" href="#gal4"><img src="images/gal4.jpg"></a>
                    <a class="carousel-item" href="#gal5"><img src="images/gal5.jpg"></a>
                    <a class="carousel-item" href="#gal6"><img src="images/gal6.png"></a>
                    <a class="carousel-item" href="#gal7"><img src="images/gal7.jfif"></a>
                </div>  

                <div id = "buttons" class="container center">
                    <a id="button" class="waves-effect waves-light btn orange center">Show More</a>
                </div>
            </div>
-->
        </div>
    </main>
