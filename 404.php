<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_template_part( 'template-parts/header/header','navbarOnly');
?>

<main id="site-content" role="main">

	<div class="container mt-3">

		<h1 class="entry-title">Không tìm thấy trang</h1>

		<div class="intro-text"><p>Trang bạn cần tìm có thể đã bị xóa hoặc đổi tên</p></div>

	</div><!-- .section-inner -->

</main><!-- #site-content -->


<?php
get_footer('bottom');
