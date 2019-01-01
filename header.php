<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tmcc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
