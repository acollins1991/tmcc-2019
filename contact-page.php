<?php /* Template Name: Contact Page Template */
  get_header();
?>

<div class="uk-container uk-margin-large-top uk-margin-large-bottom">
  <div class="uk-flex uk-flex-right" uk-grid>
    <div class="uk-width-3-5">
      <div class="uk-child-width-1-2" uk-grid>
        <div class="">
          <h1>Contact Us</h1>
        </div>
        <div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non ligula sem.</p>
        </div>
        <div>
          <h2 class="uk-h4">Get In Touch</h2>
          <address>
            The Marketing Campaign Company</br>
            Global House, 1 Ashley Avenue</br>
            Epsom, Surrey</br>
            KT18 5AD
          </address>
          <p>00000000000</p>
        </div>
        <div class="tmcc-contact-form">
          <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
        </div>
      </div>

      <?php get_template_part( 'template-parts/site', 'footer' ); ?>

    </div>
  </div>
</div>

<?php
  get_footer();
?>
