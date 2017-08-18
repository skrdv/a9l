<?php
/**
 * Template Name: Licensing
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

get_header(); ?>

<?php get_template_part('parts/part','pageheader'); ?>

<?php $pc_class = get_field('section-background'); ?>
<?php if (get_field('no-margin'))	{ $pc_class = $pc_class . ' no__margin'; } ?>
<?php if (get_field('no-header')) { $pc_class = $pc_class . ' no__header'; } ?>

<section class="pageContent license <?php echo $pc_class; ?>">
  <?php if( have_rows('licenses') ): ?>
    <div class="license-container">
      <?php while( have_rows('licenses') ): the_row(); ?>
        <?php $count = get_row_index(); ?>
        <?php if ( $count == 1 OR $count == 4 ) { ?>
          <div class="license-row">
        <?php }  ?>
          <div class="license-item">
            <div class="license-icon">
              <img src="<?php the_sub_field('icon'); ?>" alt="">
            </div>
            <div class="license-title">
              <?php the_sub_field('title'); ?>
            </div>
            <div class="license-line line-red"></div>
            <div class="license-text">
              <?php the_sub_field('text'); ?>
            </div>
          </div>
        <?php if ( $count == 3 OR $count == 6 ) { ?>
          </div>
        <?php } ?>
      <?php endwhile; ?>
    </div>
    <div class="license-line line-gray"></div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
