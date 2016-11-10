	<style>
		header, main, footer {
		  padding-left: 260px;
		
		}

		@media only screen and (max-width : 992px) {
		  header, main, footer {
			padding-left: 0;
		  }
		}
		li.menu-item.current-menu-item {
			background-color: black !important;
		}
		#pawicon {
			padding-top: 10px;
		}
	</style>
	<script>
		 $(document).ready(function(){
			$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		  });
	</script>
	</head>
<body>
    <!-- Below are the naviagation options code if any    -->
    
<div class="navbar-fixed">
	<nav>
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!" class="black-text">My Account</a></li>
			<li><a href="#!" class="black-text">Edit Account</a></li>
			<li class="divider" class="black-text"></li>
			<li class="red accent-2"><a href="<?php echo base_url()?>index.php/Web_Admin_ctr" class="black-text">Log out</a></li>
		</ul>
			<ul id="dropdown2" class="dropdown-content">
			<li><a href="#!">Book Cover Design</a></li>
			<li><a href="#!">Icon Design</a></li>
			<li><a href="#!">Poster Design</a></li>
		</ul>
		
		<div class="nav-wrapper grey darken-2"> 
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?php echo base_url()?>index.php/Web_Admin_ctr/dashboard"><i class="material-icons left">home</i>Home</a></li>
				<li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
			
			<ul id="mobile-demo" class="side-nav fixed grey darken-3">
				<li class="no-padding">
					<ul class="collapsible collapsible-accordion ">
						<li class="bold center  blue accent-2 ">
							<a href="<?php echo base_url()?>index.php/Web_Admin_ctr/dashboard" class="white-text collapsible-header waves-effect waves-blue">
							<i id="pawicon" class="material-icons left">trending_up</i>
							<p>Fins, Tails N' Feathers</p></a>	
						</li>
						<li class="bold">
							<a href="<?php echo base_url()?>index.php/Web_Admin_ctr/dashboard" class="white-text collapsible-header  waves-effect waves-grey">
							Dashboard
							<i class="material-icons left white-text">dashboard</i>
							</a>
						</li> 
						<li class="bold"><a href="<?php echo base_url()?>index.php/Web_Admin_ctr/pets" class="white-text collapsible-header  waves-effect waves-grey">Pets<i class="material-icons left white-text">pets</i></a>
						</li>						
						<li class="bold"><a href="<?php echo base_url()?>index.php/Web_Admin_ctr/products" class="white-text collapsible-header  waves-effect waves-grey">Products<i class="material-icons left white-text">show_chart</i></a>
						</li>
						<li class="bold center  blue accent-2">
							<a class="white-text collapsible-header">Quick Actions</a>
						</li>
						<li class=" bold"><a href="<?php echo base_url()?>index.php/Web_Admin_ctr/addProducts" class="white-text waves-effect waves-blue btn  blue accent-3">
							<i class="tiny material-icons left">library_add</i>PRODUCTS
						</a></li>
						<li class=" bold"><a href="<?php echo base_url()?>index.php/Web_Admin_ctr/addPets" class="white-text waves-effect waves-blue btn  blue accent-3">
							<i class="tiny material-icons left">library_add</i>PETS
						</a></li>		

					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>