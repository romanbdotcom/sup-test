<?php
/**
 * Header template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('&ndash;', true, 'right');?></title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php wp_head();?>
</head>
<body <?php body_class('touch');?>>
<div class="overlay" id="main-overlay"></div>
<header class="header main-header">
	<div class="row">
		<div class="with-logo col-12">
			<?php if (function_exists('the_custom_logo')) {the_custom_logo();}?>
		</div>
	</div>
</header>
<nav class="navigation main-nav" id="main-nav">
	<div class="container-lg">
<?php

get_template_part('includes/partials/burger', '', []);

if (has_nav_menu('primary')) {
    wp_nav_menu(array(
		'theme_location' => 'primary',
        'menu_class' => 'text-uppercase align-items-center justify-content-between main-menu'));
}
?>
	</div>
</nav>
<main class="main">
