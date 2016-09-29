<!--
    Header including import statements
-->

<html>
    <head>
        <!--Import Google Icon Font-->
        <?php 
            echo link_tag('public/materialize/css/icon.css', 'stylesheet'); 
        ?>
        
        <!--Import materialize.css-->
        <?php 
            echo link_tag('public/materialize/css/materialize.css'); 
        ?>
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Import User stylesheets -->
        <?php
            echo link_tag('public/css/defined.css');
        ?>
    </head>

<body>
    <nav class="page_header blue daken-1 z-depth-3">
        <div>
            <img class="responsive-img" src="<?php echo base_url("public/media/Badge.png"); ?>" alt="FTF Logo">
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><?php echo anchor('landingPage_ctr/logreg', 'My account'); ?></li>
                <li><?php echo anchor('landingPage_ctr/logreg', 'My cart'); ?></li>
            </ul>
            
        </div>
    </nav>

    
    
    