<?php

/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('ocean_before_outer_wrap'); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html(oceanwp_theme_strings('owp-string-header-skip-link', false)); ?></a>


		<nav class="main-navigation">
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			if (has_custom_logo()) {
				echo '<div class="site-logo">';
				echo '<a href="' . esc_url(home_url('/')) . '" rel="home">';
				echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
				echo '</a>';
				echo '</div>';
			}

			wp_nav_menu(array(
				'theme_location' => 'header',
			));
			?>
		</nav><!-- #site-navigation -->