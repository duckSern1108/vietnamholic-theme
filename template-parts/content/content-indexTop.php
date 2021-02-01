<?php
/**
 * Template part for displaying top post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-7 vh-50">
	<header>
		<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="w-100" alt="<?php the_title_attribute(); ?>"/>
	</header><!-- .entry-header -->

	<div>
		<div>
            <h3>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                </a>
            </h3>
            <?php the_excerpt(); ?>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-${ID} -->
