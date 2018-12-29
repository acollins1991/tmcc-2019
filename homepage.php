<?php /* Template Name: Homepage Template */
  get_header();
?>

<div uk-height-viewport class="uk-flex uk-flex-column uk-flex-between uk-background-norepeat uk-background-cover uk-background-center-center" style="background-image:url(http://placekitten.com/1500/1500);">
  <div>
    <div class="uk-container">
      <nav class="uk-flex uk-flex-between uk-flex-middle uk-padding-small uk-padding-remove-horizontal">
        <div>
          <a href="/">
            <img src="https://via.placeholder.com/150x50">
          </a>
        </div>
        <div>
          <a class="uk-button uk-button-default" href="#">Contact Us</a
        </div>
      </nav>
    </div>
  </div>
  <div>
    <div class="uk-container">
      <img src="https://via.placeholder.com/150x50">
      <?php if ( get_field('introduction_text') ) : ?>
        <h1 class="uk-h2"><?php the_field( 'introduction_text' ) ; ?></h1>
      <?php endif; ?>
      <a class="uk-button uk-button-default tmcc-home-hero__connect-button" href="/contact-us">Connect with us</a>
    </div>
  </div>
  <div>
    <div class="uk-container">
      <div>
        <a class="tmcc-home-hero__link">
          <span class="uk-h3">Get to know us</span>
          <p>Scroll down to learn more</p>
          <span uk-icon="icon: arrow-down"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-secondary uk-light">
  <div class="uk-container">
    <div uk-grid>
      <div class="uk-width-3-5">
        <h2>About Us</h2>
        <?php

          if ( get_field('about_text') ) {
              echo '<p>'.the_field('about_text').'</p>';
          }

          $quoteGroup = get_field('quote');
            if ( $quoteGroup['quote_text'] ) {
              echo '<blockquote>';
                echo $quoteGroup['quote_text'];
                if ( $quoteGroup['quote_source'] ) {
                  echo '<footer>'.$quoteGroup['quote_source'].'</footer>';
                }
              echo '</blockquote>';
            }

        ?>
      </div>
      <?php
        if ( get_field('about_image') ) {
          echo '<div><img src="'.get_field( 'about_image' ).'"></div>';
        }
      ?>
    </div>
  </div>
</div>

<div class="uk-section tmcc-services-section uk-container">
  <div class="uk-flex uk-flex-right" uk-grid>
    <div class="uk-width-1-2">
      <h2>Our Services</h2>
      <?php
        if( get_field('services_introduction') ) {
          echo '<p>'.get_field('services_introduction').'</p>';
        }
      ?>
      <?php
        if( have_rows('services') ):
          ?>
          <ul class="uk-list uk-list-divider">
          <?php
          while ( have_rows('services') ) : the_row();
            echo '<li>';
            if( get_sub_field('service_name') ) {
              echo '<h3>'.get_sub_field('service_name').'</h3>';
            }
            if( get_sub_field('service_description') ) {
              echo '<p>'.get_sub_field('service_description').'</p>';
            }
            if( get_sub_field('service_page') ) {
              echo '<a href="'.get_sub_field('service_page').'">Learn More</a>';
            }
            echo '</li>';
          endwhile;
          ?>
          </ul>
          <?php
        endif;
      ?>
    </div>
  </div>
</div>

<div class="uk-section uk-container uk-container-xsmall">
  <h2 class="uk-text-center">Who we've worked with</h2>
  <?php
    if( have_rows('clients') ):
      ?>
      <div uk-grid class="uk-child-width-1-4">
      <?php
      while ( have_rows('clients') ) : the_row();
        echo '<div>';
        if( get_sub_field('client_name') && get_sub_field('client_image') ) {
          echo '<img src="'.get_sub_field('client_image').'">';
        }
        echo '</div>';
      endwhile;
      ?>
      </div>
      <?php
    endif;
  ?>
  <div uk-grid class="uk-child-width-1-4">
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
    <div>
      <img src="https://via.placeholder.com/150x150">
    </div>
  </div>
</div>

<?php get_footer(); ?>
