<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caramelo
 */

?>

<?php wp_footer(); ?>

	<div class="credits">
    <a target="_blank" href="https://jjmontalban.github.io/">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/logoJJ.png" width="7%" height="7%" class="img-fluid" alt="">
    </a>
	</div>

  <!-- Vendor JS Files -->
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/vendor/venobox/venobox.min.js"></script>


  <!-- Template Main JS File -->
  <script src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/js/main.js"></script>
</body>
</html>
