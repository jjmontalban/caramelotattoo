<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caramelo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Additions
	-->
	<!-- Favicons -->
	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/favicon.png" rel="icon">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  	<!-- Vendor CSS Files -->
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  	<link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/css/style.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">
      <a href="#" class="mr-auto"><img src="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/logo-500.png" alt="" class="img-fluid"></a>
      <h2>Tatuador y artista de grafiti,<br><span> En ese orden</span></h2>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#header">INICIO</a></li>
          <li><a href="#about">SOBRE&nbspMI</a></li>
          <li><a href="#services">CITAS</a></li>
          <li><a href="#portfolio">TRABAJOS</a></li>
          <li><a href="#contact">CONTACTO</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="https://www.facebook.com/SenorLoba/posts/2735672576446182/" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/caramelotattoo_chipiona/?hl=es" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCh5PQ3houh8E4UhmQCLXsAg/videos" target="_blank" class="youtube"><i class="icofont-youtube"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<?php wp_body_open(); ?>
<div id="page" class="site">


