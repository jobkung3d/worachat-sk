<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package worachat_theme
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="slide-banner">
				<div class="firefly1"></div>
				<div class="firefly2"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-9">
						<div class="post-hilight">
							<?php
							$args = array(
								'post_type'  => 'post',
								'posts_per_page'=> 1
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) {
								if ( is_home() && ! is_front_page() ){
									?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
									<?php
								};
								while ( $query->have_posts() ) {
									$query->the_post();
									get_template_part( 'template-parts/content', 'hilight' );
								};
								the_posts_navigation();
							}else{
								get_template_part( 'template-parts/content', 'none' );
							};
							?>
						</div>
						<div class="post-normal">
							<div class="row">
								<?php
								$args = array(
									'post_type'  => 'post',
									'posts_per_page'=> 10,
									'offset'	=> 1
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
									if ( is_home() && ! is_front_page() ){
										?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>
										<?php
									};
									while ( $query->have_posts() ) {
										$query->the_post();
										get_template_part( 'template-parts/content', 'blog' );
									};
									the_posts_navigation();
								};
								?>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="sidebar_wrapper">
						<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
