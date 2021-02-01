<?php 
/*
YARPP Template: Simple
Author: YARPP Team
Description: A simple example YARPP template.
*/
?><h3>Tin liên quan : </h3>
<?php if (have_posts()):?>
<ul style="list-style-type: none;">
	<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark">
<i class="fas fa-angle-double-right me-2"></i>
		<?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
	<?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
