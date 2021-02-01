<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-lg-12">

	<header class="border-bottom border-1 pb-3">
        <h1 class=" my-3"><?php the_title(); ?></h1>
		<div id="date" class="fs-5">
		<?php get_template_part('template-parts/post/date'); ?>
	</div>
     </header> 
	
	<div id="content" class="my-3">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-${ID} -->
