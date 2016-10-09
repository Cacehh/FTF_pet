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
            echo link_tag('public/materialize/css/materialize.css'); 
        ?>
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Import User stylesheets -->
        <?php
            echo link_tag('public/css/defined.css');
        ?>
        <?php
//            echo link_tag('public/css/reset.css');
        ?>
        <script src="<?php echo base_url();?>public/js/modernizr.js"></script>
    </head>
<body>
    
        <img class="responsive-img logo" src="<?php echo base_url("public/media/Badge.png"); ?>" alt="FTF Logo">
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><?php echo anchor('landingPage_ctr/logreg', 'My account'); ?></li>
                    <li><?php echo anchor('landingPage_ctr/logreg', 'My cart'); ?></li>
                </ul>


    
    
    