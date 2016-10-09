<!--
    Header including import statements
-->

<html lang="eng" class="no-js">
    <head>
        <!--Import Google Icon Font-->
        <?php 
            echo link_tag('public/materialize/css/icon.css', 'stylesheet'); 
        ?>
        
        <!--Import materialize.css-->
        <?php 
//            echo link_tag('public/materialize/css/materialize.css'); 
        ?>
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Import User stylesheets -->
        <?php
            echo link_tag('public/css/defined.css');
        ?>
        <?php
            echo link_tag('public/css/reset.css');
        ?>
        <script src="<?php echo base_url();?>public/js/modernizr.js"></script>
    </head>
<body>
    <header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->