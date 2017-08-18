<?php
/**
 * The Template for displaying team mebmer.
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

do_action('nebula_preheaders');
get_header(); ?>

<section class="team-member">
  <div class="team-member-top">
    <h1 class="team-member-name"><?php the_title(); ?></h1>
    <span class="team-member-position"><?php the_field('position'); ?></span>
  </div>
  <div class="container">
    <div class="row">
			<div class="col-sm-12">
				<div class="quotes-container on__team">
          <div class="quotes-text"><img class="quotes-mark" src="/wp-content/themes/a9l/assets/img/quote.png" alt=""><?php the_field('quote'); ?></div>
        </div><!-- quotes-container -->
      </div>
    </div>
    <div class="row">
			<div class="col-md-6 col-lg-8">
        <div class="team-member-photo" style="background-image: url(<?php the_post_thumbnail_url('large'); ?> )"></div>
			</div><!--col -->
			<div class="col-md-6 col-lg-4">
        <div class="team-member-description nano">
					<div class="nano-content">
						<?php the_content(); ?>
					</div>
				</div>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- team-member -->

<section class="team-members">
  <div class="container">
    <div class="row">
			<?php $currentID = $post -> ID; ?>
      <?php $args = array(
        'post_type' => 'team',
        'posts_per_page' => 10
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $tempID = $post -> ID; ?>
				<?php if ($currentID != $tempID): ?>
					<?php get_template_part('parts/part','memberbox'); ?>
				<?php endif; ?>
      <?php endwhile; ?>
			<?php // wp_reset_post_data(); ?>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- team-members -->

<?php get_footer(); ?>
