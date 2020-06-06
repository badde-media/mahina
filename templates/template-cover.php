<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>

</main><!-- #site-content -->
<div class="col-sm-3"> 
			<!-- SIDEBAR -->
			<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
