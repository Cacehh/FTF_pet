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
			<li class="red accent-2"><a href="<?php echo base_url()?>index.php/Access_ctr/logout" class="black-text">Log out</a></li>
		</ul>
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="#!">Book Cover Design</a></li>
			<li><a href="#!">Icon Design</a></li>
			<li><a href="#!">Poster Design</a></li>
		</ul>
		
		<div class="nav-wrapper grey darken-2"> 
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li>
					<?php 
						echo "<b class='cyan-text'>Welcome, ";
						echo $this->session->userdata('fname');
						echo " ";
						echo $this->session->userdata('lname');
						echo "</b>";
					?>
				</li>
				<li><a href="<?php echo base_url()?>index.php/POS_ctr"><i class="material-icons left">home</i>Home</a></li>
				<li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
			
			<ul id="mobile-demo" class="side-nav fixed grey darken-3">
				<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
						<li class="bold center deep-orange accent-2">
							<a href="<?php echo base_url()?>index.php/POS_ctr/" class="white-text collapsible-header waves-effect waves-blue">Fins, Tails N' Feathers | POS</a>	
						</li>
						<li class="bold"><a class="white-text collapsible-header  waves-effect waves-grey">Sell</a>
							<div class="collapsible-body">
								<ul>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr">Sell</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/history">Sales History</a></li>
								<li><a href="#">More...</a></li>
								</ul>
							</div>
						</li>	

						<li class="bold"><a class="white-text collapsible-header  waves-effect waves-grey"> Orders</a>
							<div class="collapsible-body">
								<ul>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/getOrder">Take Order</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/customerAdd">Add Customer</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/customerEdit">Edit Customer</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/customers">Customers</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/orders">Orders</a></li>
								<li><a href="#">More...</a></li>
								</ul>
							</div>
						</li>

						<li class="bold"><a class="white-text collapsible-header  waves-effect waves-grey">Inventory</a>
							<div class="collapsible-body">
								<ul>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/products">Products</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/pets">Pets</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/type">Product Type</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/supplier">Suppliers</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/brands">Brands</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/tags">Product Tags</a></li>
								</ul>
							</div>
						</li>
	<!-- 					<li class="bold"><a class="white-text collapsible-header  waves-effect waves-grey">Calendar</a>
							<div class="collapsible-body">
								<ul>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr/calendar">Calendar</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr">Deliveries</a></li>
								<li><a href="<?php echo base_url()?>index.php/POS_ctr">more...</a></li>
								</ul>
							</div>
						</li> -->
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>