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
?>

<?php if ( have_posts() ) : ?>

	
<div class="container">
<header >
		<h2 class="w-100 center my-5" style="line-height: 0.1em; border-bottom : 3px solid black;">
			<span class="bg-white px-3"><?php echo single_term_title();  ?></span>
		</h2>
		
	</header>
	<div class="row">
		
	<?php while ( have_posts() ) : ?>
		<?php 
		the_post(); 
		
		?>
		
<article class="col-xs-12 col-sm-6 col-lg-4 mb-4 " >
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="w-100 mb-2 " style="height:50vh;" alt="<?php the_title_attribute(); ?>"/>
</a>
<h3>
<a href="<?php the_permalink(); ?>" class="fs-3" title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?>
</a>
</h3>
	<?php the_excerpt(); ?>
	<a class="fs-5 d-inline-block rounded-pill px-4 py-1 mb-2 orangeBgr fw-500 xem-them" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		xem thêm 
	</a>
	<footer class="fs-4">
		<i class="fas fa-map-marker-alt" style="color:orange;"></i>
<span style="font-weight:500;">
	<?php echo get_post_meta($post->ID, 'location', true); ?>
	
</span>
	</footer>

    </article>
	<?php endwhile; ?>
</div>
</div>


<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer();?>
