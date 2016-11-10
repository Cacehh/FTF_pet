<div class="cd-product-builder">
	<header class="main-header">
		<h1>Choose Your Pet</h1>
		
		<nav class="cd-builder-main-nav disabled">
			<ul>
				<li class="active"><a href="#models">Breed</a></li>
				<li><a href="#colors">Base Color</a></li>
				<li><a href="#accessories">Eye Color</a></li>
				<li><a href="#details">Pet Details</a></li>
				<li><a href="#summary">Summary</a></li>
			</ul>
		</nav>
	</header>
 
	<div class="cd-builder-steps">
		<ul>
			<li data-selection="models" class="active builder-step">
				<section class="cd-step-content">
					<header>
						<h1>Select Breed</h1>
						<span class="steps-indicator">Step <b>1</b> of 4</span>
					</header>
 
 
					<ul class="models-list options-list cd-col-2">
						<!-- models here -->
						<li class="js-option js-radio" data-price="100" data-model="<?php echo base_url()?>public/data/-cat-00">
							<span class="name">Slim Cat</span>
							<img src="<?php echo base_url()?>public/media/CustomPets/cat0_0.png" alt="Slim Cat">
							<div class="radio"></div>
						</li>

						<li class="js-option js-radio" data-price="100" data-model="<?php echo base_url()?>public/data/-cat-01">
							<span class="name">Fuzzy Cat</span>
							<img src="<?php echo base_url()?>public/media/CustomPets/cat1_0.png" alt="Fuzzy Cat">
							<div class="radio"></div>
						</li>
						
						<li class="js-option js-radio" data-price="100" data-model="<?php echo base_url()?>public/data/-cat-02">
							<span class="name">Fluffy Cat</span>
							<img src="<?php echo base_url()?>public/media/CustomPets/cat2_0.png" alt="Fluffy Cat">
							<div class="radio"></div>
						</li>
						
						<li class="js-option js-radio" data-price="100" data-model="<?php echo base_url()?>public/data/-cat-03">
							<span class="name">Fat Cat</span>
							<img src="<?php echo base_url()?>public/media/CustomPets/cat3_0.png" alt="Fat Cat">
							<div class="radio"></div>
						</li>
					</ul>
				</section>
			</li>
			<!-- additional content will be inserted using ajax -->
		</ul>
	</div>
 
	<footer class="cd-builder-footer disabled step-1">
		<div class="selected-product">
			<img src="<?php echo base_url()?>public/media/CustomPets/cat0_0.png" alt="Product preview">
 
			<div class="tot-price">
				<span>Total</span>
				<span class="total">$<b>0</b></span>
			</div>
		</div>
		
		<nav class="cd-builder-secondary-nav">
			<ul>
				<li class="next nav-item">
					<ul>
						<li class="visible"><a href="#0">Base Color</a></li>
						<li><a href="#0">Eye Color</a></li>
						<li><a href="#0">Pet Details</a></li>
						<li><a href="#0">Summary</a></li>
						<li class="buy"><a href="#0">Add To Cart</a></li>
					</ul>
				</li>
				<li class="prev nav-item">
					<ul>
						<li class="visible"><a href="#0">Models</a></li>
						<li><a href="#0">Models</a></li>
						<li><a href="#0">Colors</a></li>
						<li><a href="#0">Accessories</a></li>
						<li><a href="#0">Details</a></li>
					</ul>
				</li>
			</ul>
		</nav>
 
		<span class="alert">No option selected</span>
	</footer>
</div>