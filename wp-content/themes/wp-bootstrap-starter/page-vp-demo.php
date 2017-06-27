<?php
/**
/*
Template Name: VP demos
Template Post Type: VP Demos
 * The template for displaying video presentation demos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

<?php get_template_part( 'video_presentations', 'index' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
