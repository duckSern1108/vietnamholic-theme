<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_template_part( 'template-parts/header/header','navbarOnly');
?>

<main id="site-content" role="main">
<div class="container my-4">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
get_template_part( 'template-parts/content/content', 'single' );
			?>
<?php		}
	}

	?>
</div>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
