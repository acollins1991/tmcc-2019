<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tmcc
 */

?>

<?php wp_footer(); ?>

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

</body>
</html>
