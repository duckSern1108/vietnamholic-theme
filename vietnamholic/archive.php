<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();

$description = get_the_archive_description();
$postCount = 0 ;
?>

<?php if ( have_posts() ) : ?>

	<header class="alignwide border-bottom border-5 border-dark my-4">
		<h3>
			<?php echo single_term_title();  ?>
		</h3>
		<?php if ( $description ) : ?>
			<p><?php echo wp_kses_post( wpautop( $description ) ); ?></p>
		<?php endif; ?>
	</header><!-- .page-header -->
<div class="container">
	<div class="row">
		
	<?php while ( have_posts() ) {
	$postCount++; 
		the_post(); 
		get_template_part('/template-parts/archive/archive','post');
	}	
	?>
</div>
</div>


<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer();?>
