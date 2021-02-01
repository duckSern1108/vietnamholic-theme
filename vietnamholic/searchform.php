<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<button class="border-0 bg-white py-2 orangeText" id="searchBtn" onclick="searchChange()" style="display: block;">
	<span class="fw-500">Tìm kiếm </span><i class="fas fa-search fa-lg pointer text-secondary-light"></i>
</button>
<form id="searchForm" role="search" <?php echo $twentytwentyone_aria_label; ?> method="get" style="display:none;" class=" my-2 my-lg-0 me-5" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input  id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>"type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" autofocus/>
	<button class="my-2 my-sm-0 border-0 bg-white " type="submit"><i class="fas fa-search fa-lg pointer text-secondary-light"></i></button>
</form>
