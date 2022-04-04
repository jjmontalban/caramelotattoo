<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package caramelo
 */
/*
	Template Name: Home Page
*/

get_header();
?>  

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>Me llaman</h2>
      </div>
      <div class="col-lg-12 d-flex justify-content-center">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/mister-loba.png" class="img-fluid" alt="">
        </div>
      <br>
      <div class="row">
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-right">
          <h3>Tattoo &amp; Graffitti. En ese orden...</h3>
          <p class="font-italic">
            Mi nombre es Señor Loba y soy tatuador y artista de grafiti. Esto está basado en mis momentos actuales, 
            desde una exposición de grafitis en cualquier parte del mundo hasta una fruta andaluza con vida propia. 
            Acercándote un poco más a la vida actual de mi trabajo y de mi vida
          </p>
          <br>
          <div class="row">
            <div class="col-lg-3">
              <ul>
                <li>
                  </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="icofont-rounded-right"></i> 
                  <strong>Tattoo</strong><br>Dejando mi propio arte en la piel. Me dedico a esto casi exclusivamente desde hace años</li>
              </ul>
            </div>
            <div class="col-lg-3">
              <ul>
                <li>
                  </li>
              </ul>
            </div>
            <div class="col-lg-3">
              <ul>
                <li>
                  </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="icofont-rounded-right"></i> 
                  <strong>Grafiti & Decoración</strong><br>Solo tienes que darnos tu idea o imagen y 
                    asesorarte por nosotros para saber las 1000 cosas que podemos hacer en tu idea
                </li>
              </ul>
            </div>
            <div class="col-lg-3">
              <ul>
                <li>
                  </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-left">
          <img src="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/me.jpg" class="img-fluid" alt="">
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">232</span>
            <p>Clientes felices</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-ui-theme"></i>
            <span data-toggle="counter-up">521</span>
            <p>Proyectos acabados</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-brand-squidoo"></i>
            <span data-toggle="counter-up">1,463</span>
            <p>Horas pichando tinta</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-heart-alt"></i>
            <span data-toggle="counter-up">1</span>
            <p>Tío amando su trabajo</p>
          </div>
        </div>
      </div>
    </div><!-- End Counts -->
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Nos vemos?</h2>
        <p>Concrétame una cita y hablamos</p>
      </div>

      <div class="row">
        <?php echo do_shortcode( '[bookly-form service_id="3" staff_member_id="2" hide="categories,services,staff_members"]' ); ?>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Chequea</h2>
        <p>Mi trabajo</p>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <img src="<?php  echo esc_url( get_stylesheet_directory_uri() )?>/assets/img/trabajos-header.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <?php echo do_shortcode( '[instagram-feed]' ); ?>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Ven a verme</h2>
        <p>Ya sabes dónde estoy</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Mi estudio</h3>
            <p>Góngora 1. 11550 Chipiona (Cádiz). <a href="https://goo.gl/maps/Pzo2b2m4yR7iNMSDA" target="_blank">VER MAPA</a></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social</h3>
            <div class="social-links">
              <a href="https://www.facebook.com/SenorLoba/posts/2735672576446182/" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="https://www.instagram.com/caramelotattoo_chipiona/?hl=es" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCh5PQ3houh8E4UhmQCLXsAg/videos" target="_blank" class="youtube"><i class="icofont-youtube"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Un email</h3>
            <p><a href="mailto:hola@caramelotattoo.com">hola@caramelotattoo.com</a></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bxl-whatsapp"></i>
            <h3>Llama o whatsapéame</h3>
            <p><a href="wa.link/w0gk0k" target="_blank">(+34) 692 82 01 92</a></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
	

<?php
get_footer();

