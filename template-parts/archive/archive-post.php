<article id="post-<?php the_ID(); ?>" class="col-xs-12 mb-4">
<div class="row">
			<div class="col-lg-3">
				<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" class="w-100" style="height:20vh;" alt="<?php the_title_attribute(); ?>"/>
			</div>
               
     
            <div class="col-lg-9">
                <h4>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                    </a>
                </h4>
                <?php the_excerpt(); ?>
            </div>
        </div>
</article><!-- #post-${ID} -->