
<?php
/*
 * Template Name: Home template
 * description: >-
  Home template
 */

 ?>

<head>
    <meta charset="utf-8" />
    <title><?php the_title()?></title>
    <meta name="description" content="" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/wp-content/themes/twentytwenty-custom/assets/css/global.css" />
    <link rel="stylesheet" href="/wp-content/themes/twentytwenty-custom/assets/css/home.css" />
  </head>
    <?php  get_header();?>

<body>
 <div class="container col-12">
      <header class="row d-flex justify-content-around">
        <div class="pt-4">
          <p class="yellow">Parcours van de Solidariteit</p>
        </div>
        <div class="pt-4"><p>27 + 28 november</p></div>
        <div class="col-2">
          <img
            class="img-fluid"
            src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-zwart.png"
          />
        </div>
        <div class="pt-4">
          <a href="">Home</a>
        </div>
        <div class="pt-4">
          <a href="">Musical</a>
        </div>
        <div class="pt-4">
          <a href="">Workshops</a>
        </div>
      </header>

      <section class="row">
        <div class="col-12 p-0">
          <img class="img-fluid" src="/wp-content/themes/twentytwenty-custom/assets/images/Top Illustration.svg" />
        </div>
      </section>

      <section class="row tussenboord"></section>

      <section class="row tussenboord2"></section>

      <section class="row principal d-flex justify-content-center">
        <div class="col-10 d-flex justify-content-between pt-5">
          <h2 class="yellow">Parcours Solidariteit</h2>
          <h2>27 + 28 november 2020</h2>
        </div>
      </section>

      <section class="row principal d-flex justify-content-center">
          <div class="col-10 pt-5">
              <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
              </div>


      </section>

      <section class="row principal d-flex justify-content-center">
        <div class="col-10 d-flex flex-wrap py-3">
          <a href="#" class="col-6 px-5 ">
            <img src="/wp-content/themes/twentytwenty-custom/assets/images/SVG/knop-musical.svg" />
          </a>
          <a href="#" class="col-6 px-5">
            <img src="/wp-content/themes/twentytwenty-custom/assets/images/SVG/knop-workshop.svg" />
          </a>
        </div>
      </section>

      <footer class="row">
        <div class="footer-1 d-flex py-4 col-12">
          <div class="col-2 pl-2">
            <img
              class="img-fluid"
              src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            />
          </div>
          <div class="col-8"></div>
          <div class="col-2 d-flex flex-column justify-content-end">
            <h6 class="colored mb-0">Parcours vd solidariteit</h6>
            <h6>27 - 28 NOV 2020</h6>
          </div>
        </div>
        <div class="footer-2 d-flex pt-5 col-12 flex-wrap">
          <div class="col-12 d-flex sponsers">
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
            <a href="#" class=""
              ><img
                class="img-fluid"
                src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
            /></a>
          </div>
          <p class="text-center col-12 py-1">
            VZW WIJKHUIS CHAMBERY Chamberystraat 24 1040 Etterbeek
            edwin.bw@chambery.be ond.nr. 0460 236 987
          </p>
        </div>
      </footer>
    </div>
</body>