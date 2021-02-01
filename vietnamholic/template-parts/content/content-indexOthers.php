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

<article id="post-<?php the_ID(); ?>" class="col-xs-12  container-fluid border-bottom py-4 others-post">
	<div class="d-sm-inline-flex post">
			
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="me-3" alt="<?php the_title_attribute(); ?>"/>
			
            <div>
                <h5>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                    </a>
                </h5>
                <?php the_excerpt(); ?>
            </div>
        </div>
</article><!-- #post-${ID} -->
