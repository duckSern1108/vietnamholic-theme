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
get_template_part( 'template-parts/content/content', 'indexOthers' );  

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
