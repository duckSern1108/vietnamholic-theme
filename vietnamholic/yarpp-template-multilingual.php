<?php
/*
YARPP Template: Multilingual
Description: An example template for use with the WPML and Polylang plugins
Author: YARPP Team
*/

if (function_exists("icl_register_string")) {
	icl_register_string("Yet Another Related Posts Plugin", "related posts header", "Related Posts");
	icl_register_string("Yet Another Related Posts Plugin", "no related posts message", "No related posts.");
}

?>
<?php if (have_posts()):?>
<h3>Tin cùng chuyên mục : </h3>
<div class="container-fluid mt-2">
	<div class="row">
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-xs-12 col-sm-6 col-lg-4 row">
			<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="w-100" style="height:20vh;" alt="<?php the_title_attribute(); ?>"/>
			<h5>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
			</h5>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
