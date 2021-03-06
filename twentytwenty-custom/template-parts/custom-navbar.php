<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<header class="row">
        <div class="col-lg-4 d-none d-lg-flex flex-column align-items-end counterContainer">
          <?php if (!is_front_page()) : ?>

            <h6 class='yellow' id='counter'>counter</h6>     

              <script>
            $(document).ready(function($) {
              $('#counter').countdown(new Date(2020, 11, 27, 20, 0, 0, 0), function(event) {                
                $(this).text(
                  event.strftime('nog %D dagen en %H:%M:%S uren tot de voorstelling!')
                );
              });
            });
          </script>

         <marquee class="newsflash" direction="left" scrollamount="5" behavior="scroll"><?php query_posts(array('post_type' => 'post','orderby' => 'date')); 
              if(have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>

       <?php endwhile; ?>
       <?php else : ?>

            

       <?php endif; wp_reset_query(); ?> </marquee>

          <?php endif;  ?>

        </div>

   

        <a href="/" class="col-3 d-none d-lg-block">
          <img
            class="img-fluid logo"
            src="/wp-content/themes/twentytwenty-custom/assets/images/Logo-Solidariteit/logo-nl-wit.png"
          />
        </a>
        <nav class="navbar navbar-expand-lg navbar-dark col-lg-5 col-12">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="d-flex nav-item active dropdown align-items-center">
                <a href="/musical" class="nav-link">Musical</a>
                <a
                  href="#"
                  class="nav-link dropdown-toggle dropdown-toggle-split"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/bouwers">Bouwers</a>
                  <a class="dropdown-item" href="/bedenkers">Bedenkers</a>
                  <a class="dropdown-item" href="/zangers">Zangers</a>
                  <a class="dropdown-item" href="/dansers">Dansers</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/repetitieschema">Repetitieschema</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/workshops">Workshops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doemee">Doe mee!</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>