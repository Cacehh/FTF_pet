<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<?php 
		echo link_tag('public/css/reset.css'); 
	?>	
	<?php 
		echo link_tag('public/css/customPet_Style.css'); 
	?>
  	
	<title>Product Builder | Pet Customization</title>
</head>
<body>
<div class="cd-product-builder">
	<header class="main-header">
		<h1>Choose Your Pet</h1>
		
		<nav class="cd-builder-main-nav disabled">
			<ul>
				<li class="active"><a href="#models">Breed</a></li>
				<li><a href="#colors">Base Color</a></li>
				<li><a href="#accessories">Eye Color</a></li>
				<li><a href="#summary">Summary</a></li>
			</ul>
		</nav>
	</header>
 
	<div class="cd-builder-steps">
		<ul>
			<li data-selection="models" class="active builder-step">
				<section class="cd-step-content">
					<header>
						<h1>Select Model</h1>
						<span class="steps-indicator">Step <b>1</b> of 4</span>
					</header>
 
 
					<ul class="models-list options-list cd-col-2">
						<!-- models here -->
						<li class="js-option js-radio" data-price="100" data-model="product-01">
							<span class="name">Weimaraner</span>
							<img src="img/weimaraner1_0.png" alt="Weimaraner">
							<div class="radio"></div>
						</li>

						<li class="js-option js-radio" data-price="100" data-model="product-02">
							<span class="name">Pomeranian</span>
							<img src="img/pormeranian2_0.png" alt="Pormeranian">
							<div class="radio"></div>
						</li>
						
						<li class="js-option js-radio" data-price="100" data-model="product-03">
							<span class="name">Siberian Husky</span>
							<img src="img/siberianhusky3_0.png" alt="Pormeranian">
							<div class="radio"></div>
						</li>
						
						<li class="js-option js-radio" data-price="100" data-model="product-04">
							<span class="name">Neapolitan Mastiff</span>
							<img src="img/neapolitanmastiff4_0.png" alt="Pormeranian">
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
			<img src="img/weimaraner1_0.png" alt="Product preview">
 
			<div class="tot-price">
				<span>Total</span>
				<span class="total">$<b>0</b></span>
			</div>
		</div>
		
		<nav class="cd-builder-secondary-nav">
			<ul>
				<li class="next nav-item">
					<ul>
						<li class="visible"><a href="#0">Colors</a></li>
						<li><a href="#0">Accessories</a></li>
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
					</ul>
				</li>
			</ul>
		</nav>
 
		<span class="alert">Please, select a model first!</span>
	</footer>
</div>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-3.0.0.min.js"></script>
<script>
	if( !window.jQuery ) document.write('    <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-3.0.0.min.js"></script>">
</script>');
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/customPetMain.js"></script>
</body>
</html>