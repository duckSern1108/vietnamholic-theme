<?php  get_header();?>
<main class="container mt-5 mb-5" role="main">
    <div class="row">
        <section class="col-xs-12 col-lg-8 pe-2">
			<div class="row">
<?php 
				$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
				if ( $result-> have_posts() ) { 
    $i = 0;
    while ( $result->have_posts() ) { 
        $i++;
        $result->the_post(); 
?>
    
<?php
    if ($i == 1) {
		get_template_part( 'template-parts/content/content', 'indexTop' );
	}
else if ($i == 2) {
	get_template_part( 'template-parts/content/content', 'indexSecond' );
echo '<hr style="height : 0.2vh; color : orange; opacity : 1;" class="my-3">';
}
else get_template_part( 'template-parts/content/content', 'indexOthers' ); 
?>  
<?php }} else  ?>
      <!-- <article>
            <p>Sorry, no posts were found!</p>
      </article> -->
</div>
    </section>
<?php get_sidebar() ?>
    </div>
    
</main>
<?php get_footer(); ?>