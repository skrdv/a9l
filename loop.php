<?php
/**
 * The loop that displays posts.
 */
?>

<div class="news-loop">
	<div class="container">
		<div class="row">

			<?php if ( !have_posts() ): ?>

				<article id="post-0" class="post error404 not-found">
					<h2 class="entry-title">Not Found</h2>
					<div class="entry-summary">
						<p>No results were found for the requested archive.</p>
						<?php echo nebula()->search_form(); ?>
					</div>
				</article>

			<?php else: ?>
				<?php while ( have_posts() ): the_post(); ?>
					<div class="col-md-6">
						<article id="post-<?php the_ID(); ?>" <?php post_class(' news-loop-item'); ?>>
							<?php if ( has_post_thumbnail() ): ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<?php endif; ?>
							<div class="news-loop-meta">
								<?php if ( !in_array("page", get_post_class()) ): ?>
									<?php nebula()->post_meta('on'); ?>
									<?php if ( nebula()->get_option('author_bios') && !is_author() ){ nebula()->post_meta('by'); } ?>
									<?php nebula()->post_meta('cat'); ?>
									<?php nebula()->post_meta('tags'); ?>
								<?php endif; ?>
							</div>
							<h2 class="news-loop-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<?php if ( is_search() && is_plugin_active('relevanssi/relevanssi.php') && $post->relevance_score ): ?>
								<div class="entry-summary score-<?php echo str_replace('.', '_', $post->relevance_score); ?>">
									<?php echo the_excerpt(); //Relevanssi creates a custom excerpt for search results to highlight the hit area. This requires using the_excerpt(). ?>
								</div>
							<?php else: ?>
								<div class="news-loop-text">
									<?php echo nebula()->excerpt(array('length' => 35, 'more' => '')); ?>
								</div>
							<?php endif; ?>

							<div class="news-loop-bottom">
								<div class="news-loop-likes">
									<?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
								</div>
								<a class="news-loop-more" href="<?php the_permalink(); ?>">
									<span class="label">Read more</span>
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13">
										<path class="arrow-right-icon" d="M888,1166h13.563v1H888v-1Zm8.032-5.99,5.956,6.2-0.686.72-5.956-6.2Zm5.27,6.06-5.956,6.2,0.686,0.72,5.956-6.2Z" transform="translate(-888 -1160)"></path>
									</svg>
								</a>
								<a class="news-loop-comments" href="<?php the_permalink(); ?>#comments-section">
									<i class="fa fa-comment-o" aria-hidden="true"></i>
									<span class="label"><?php echo get_comments_number(); ?></span>
								</a>
							</div>

						</article>

					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</div><!--/loop-section-->
