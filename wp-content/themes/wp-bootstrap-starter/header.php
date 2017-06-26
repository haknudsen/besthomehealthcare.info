<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-static-top" role="banner">
		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only"><?php echo esc_html__('Toggle navigation', 'wp-bootstrap-starter'); ?></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand">
		      	<a href="<?php echo esc_url( home_url( '/' )); ?>"><span><img src="http://besthomehealthcare.info/wp-content/uploads/2017/06/House-header.png" width="100" alt="Best Home Health Care"/></span><span>  <?php esc_url(bloginfo('name')); ?></span></a>
		      </div>
		    </div>

		    <nav class="collapse navbar-collapse navbar-right" role="navigation">

		        <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 3,
                        'link_before' => '', //Add wrapper in the text inside the anchor tag
                        'link_after' => '',
		                'container'         => '',
		                'container_class'   => '',
		        		'container_id'      => 'navbar-collapsed',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>

			</nav>
		</div>
	</header><!-- #masthead -->
    <div id="page-sub-header">
        <div class="container">
            <h1><?php esc_url(bloginfo('name')); ?></h1>
            <p><?php bloginfo( 'description'); ?></p>
        </div>
    </div>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
