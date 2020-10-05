<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/custom.css">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php 
           $Walker_Nav_Menu = new Walker_Nav_Menu_Mor;
            wp_nav_menu( 
                  array( 
                      'theme_location' => 'header-main',
                      'container' => 'false',
                      'menu_class' => 'navbar-nav ml-auto',
                      'menu_id' => '',
                      'walker' => $Walker_Nav_Menu,
                   ) 
                ); ?>

          </div>
        </div>
      </nav>
    </header>




