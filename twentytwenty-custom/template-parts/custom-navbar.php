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
        <div class="col-lg-5 d-none d-lg-block">
          <?php the_widget('countdown-widget'); ?>


        </div>


        <a href="#" class="col-2 d-none d-lg-block">
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
              <li class="nav-item active dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="/page-id?18"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Musical <span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/?page-id=18">Bouwers</a>
                  <a class="dropdown-item" href="#">Bedenkers</a>
                  <a class="dropdown-item" href="#">Zangers</a>
                  <a class="dropdown-item" href="#">Dansers</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Repetitieschema</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Workshops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>