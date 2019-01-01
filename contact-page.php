<?php /* Template Name: Contact Page Template */
  get_header();
?>

<div class="uk-container">
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
      <div class="uk-container uk-margin-top">
      <hr/>
      <div class="uk-flex uk-flex-between uk-flex-middle">
          <div>
      			<span class="uk-h6">Copyright The Marketing Campaign Company <?php echo date('Y'); ?></span>
      		</div>
      		<div>
      			<ul class="uk-iconnav">
      			    <li><a href="" uk-icon="icon: twitter; ratio: 0.8"></a></li>
      					<li><a href="" uk-icon="icon: linkedin; ratio: 0.8"></a></li>
      			</ul>
      		</div>
      </div>
      </div>
    </div>
  </div>
</div>

<?php
  get_footer();
?>
