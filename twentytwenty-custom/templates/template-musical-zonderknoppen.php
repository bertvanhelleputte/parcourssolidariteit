<?php
/*
 * Template Name: Musical template zonder knoppen
 * description: >-
  Musical template zonder knoppen
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
    <link rel="stylesheet" href="/wp-content/themes/twentytwenty-custom/assets/css/global.css?2" />
    <link rel="stylesheet" href="/wp-content/themes/twentytwenty-custom/assets/css/musical.css?1" />

     <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </head>
    <?php  get_header();?>

<body>
 <div class="container col-12">

       <?php get_template_part( 'template-parts/custom-navbar' );?>

<div class="row">
        <img class="img-fluid menu-graphics" src="/wp-content/themes/twentytwenty-custom/assets/images/Vector.svg" />
      </div>
      <section class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-5">
              <?php
    while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
            <?php the_content(); ?> 
        </div>

    <?php
    endwhile;
    wp_reset_query(); 
    ?>
    </div>
      </section>

      <?php get_template_part( 'template-parts/custom-footer' );?>
    </div>
</body>