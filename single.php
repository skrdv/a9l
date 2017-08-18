<?php
/**
 * The Template for displaying all single posts.
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

if ( get_post_format() ){
	get_template_part('format', get_post_format());
	exit;
}

// do_action('nebula_preheaders');
get_header(); ?>

<section class="news-single-top">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<div class="news-single-likes">
					<?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="news-single-control">
					<?php if ( get_previous_post_link() ): ?>
						<div class="control control-prev">
							<?php previous_post_link('%link', '<i class="fa fa-angle-left" aria-hidden="true"></i>'); ?>
						</div>
					<?php endif; ?>
					<div class="control control-home">
						<a class="control-link" href="/news/">
							<svg class="icon" width="22" height="22" xmlns="http://www.w3.org/2000/svg">
								<path d="M7,2v5H2V2H7 M9,0H0v9h9V0L9,0z"></path>
								<path d="M20,2v5h-5V2H20 M22,0h-9v9h9V0L22,0z"></path>
								<path d="M7,15v5H2v-5H7 M9,13H0v9h9V13L9,13z"></path>
								<path d="M20,15v5h-5v-5H20 M22,13h-9v9h9V13L22,13z"></path>
							</svg>
						</a>
					</div>
					<?php if ( get_next_post_link() ): ?>
						<div class="control control-next">
							<?php next_post_link('%link', '<i class="fa fa-angle-right" aria-hidden="true"></i>'); ?>
						</div>
					<?php endif; ?>
				</div>
				<h1 class="news-single-title"><?php the_title(); ?></h1>
				<div class="news-single-meta">
					<div class="news-single-meta-left">
						<span class="label">Published by</span>
						<?php nebula()->post_meta('by', 0); ?>
						<?php nebula()->post_meta('on'); ?>
					</div>
					<div class="news-single-meta-right">
						<?php nebula()->post_meta('cat'); ?>
						<?php // nebula()->post_meta('tags'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="news-single-tools">
					<div class="news-single-search">
						<form class="search-form nebula-search" id="news-search" method="get" action="<?php echo home_url('/'); ?>">
							<?php
								if ( !empty($_GET['s']) || !empty($_GET['rs']) ) {
									$current_search = ( !empty($_GET['s']) )? $_GET['s'] : $_GET['rs'];
								}
								$header_search_placeholder = ( isset($current_search) )? $current_search : 'Enter your search' ;
							?>
							<label class="sr-only" for="nebula-mobile-search">Search</label>
							<input id="nebula-mobile-search" class="open input search" type="search" name="s" placeholder="<?php echo $header_search_placeholder; ?>" autocomplete="off" role="search" x-webkit-speech />
						</form>
					</div>
					<div class="news-single-cats">
						<div class="title">Categories</div>
						<a class="link" href="#">Blog
							<span class="arrow"><?php include 'assets/img/arrow.svg'; ?></span>
						</a>
						<a class="link" href="#">News & PR
							<span class="arrow"><?php include 'assets/img/arrow.svg'; ?></span>
						</a>
						<a class="link" href="#">Uncategorized
							<span class="arrow"><?php include 'assets/img/arrow.svg'; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="news-single-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<div id="share" class="news-single-social" ></div>
			</div>
			<div class="col-md-8" role="main">
				<?php if ( have_posts() ) while ( have_posts() ): the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
						<div class="news-single-content">
							<?php the_content(); ?>
							<div class="news-single-author">
								<?php if ( nebula()->get_option('author_bios') && !is_author() ){ nebula()->post_meta('by'); } ?>
							</div>
						</div>
						<div class="news-single-related">
							<h3 class="news-single-related-header">Related posts</h3>
							<div class="news-single-related-items">
								<?php $related = get_posts(array(
									'category__in' => wp_get_post_categories($post->ID),
									'numberposts' => 3,
									'post__not_in' => array($post->ID)
									));
								if($related) foreach( $related as $post ) {
								setup_postdata($post); ?>
								<a class="news-single-related-item" rel="external" href="<?php the_permalink(); ?>">
									<div class="news-single-related-image">
										<?php the_post_thumbnail('news-thumb-225'); ?>
									</div>
									<div class="news-single-related-title">
										<?php the_title(); ?>
									</div>
									<div class="news-single-related-more">
										<div class="read-more">
											<span>Read more</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13">
												<path class="arrow-right-icon" d="M888,1166h13.563v1H888v-1Zm8.032-5.99,5.956,6.2-0.686.72-5.956-6.2Zm5.27,6.06-5.956,6.2,0.686,0.72,5.956-6.2Z" transform="translate(-888 -1160)"></path>
											</svg>
										</div>
									</div>
								</a>
								<?php }
								wp_reset_postdata(); ?>

							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="col-md-3" role="complementary">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<section id="comments-section">
	<div class="container">
		<?php comments_template(); ?>
	</div>
</section>

<?php get_footer(); ?>
