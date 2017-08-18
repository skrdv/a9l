<?php
/**
 * The Template for displaying all team members.
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

do_action('nebula_preheaders');
get_header(); ?>

<section class="team-members">
  <div class="container">
    <div class="row">

			<h1 class="page-title">Our team</h1>

			<?php $i = 0; ?>
      <?php $args = array(
        'post_type' => 'team',
        'posts_per_page' => 10
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php if ($i === 0): ?>
					<div class="col-lg-12 col-md-12 col-sm-12">
					  <a class="memberbox memberbox-first" href="<?php echo get_permalink(); ?>">
							<div class="row">
								<div class="col-lg-8 col-md-6 col-sm-6">
						    	<div class="memberbox-photo" style="background-image: url(<?php the_post_thumbnail_url('large'); ?> )"><?php // the_post_thumbnail(); ?></div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="memberbox-info">
										<div class="memberbox-empty"></div>
							      <div class="memberbox-name"><?php if (get_field('htmlname')) { the_field('htmlname'); } else { the_title(); } ?></div>
										<div class="memberbox-line"></div>
							      <div class="memberbox-position"><?php the_field('position'); ?></div>
							    </div>
								</div>
							</div>
					  </a>
					</div>
				<?php else: ?>
					<?php get_template_part('parts/part','memberbox'); ?>
				<?php endif; ?>

				<?php $i++; ?>
      <?php endwhile; ?>

    </div><!-- row -->
  </div><!-- container -->
</section><!-- team-members -->

<?php get_footer(); ?>
