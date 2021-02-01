<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();
?>
<div class="container my-3 h-100">
<div class"row">
<?php
if ( have_posts() ) {
	?>
	<h2 class="center">
		<?php
		printf(
			esc_html(
				/* translators: %d: the number of search results. */
				_n(
					'Tìm thấy %d kết quả',
					'Tìm thấy %d kết quả',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
</h2>
	<!-- .search-result-count -->
	<?php
	// Start the Loop.
	$i = 0;
	while ( have_posts() ) {
		$i++;
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		
	
?>
 <article class="col-xs-12 vh-25 py-0 mb-4 container-fluid">
        <div class="row">
			<div class="col-xs-12 col-lg-3">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="w-100" style="height:20vh;" alt="<?php the_title_attribute(); ?>"/>
			</div>
            <div class="col-xs-12 col-lg-9">
                <h5>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                    </a>
                </h5>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </article>
<?php
} // End the loop.
	// If no content, include the "No posts found" template.
} else {
?>
<h2>Nothing found :(</h2>
<div style="height:45vh;"></div>
<?php
}
?>
</div>
</div>
<?php if (wp_is_mobile()) get_footer(); 
	else if ($i > 2) get_footer();
else get_footer('bottom');
