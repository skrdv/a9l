
<div class="floorTestimonials <?php the_field('section-background'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h3 class="testimonials-title"><?php the_sub_field('company-name'); ?></h3>

        <?php if (have_rows('testimonials')): ?>
          <?php while (have_rows('testimonials')): the_row(); ?>

            <div class="testimonial-container <?php if (get_sub_field('testimonial-photo')) { echo 'have__photo'; } ?>">
              <?php if (get_sub_field('testimonial-photo')) { ?><div class="testimonial-photo"><?php $pic = get_sub_field('testimonial-photo'); ?><img src="<?php echo $pic[sizes][medium]; ?>"></div><?php } ?>
              <div class="testimonial-text"><?php the_sub_field('testimonial-text'); ?></div>
              <div class="testimonial-author"><?php the_sub_field('testimonial-author'); ?></div>
            </div><!-- testimonial-container -->

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div><!--/row-->
  </div>
</div><!-- floorText -->

<?php get_template_part('parts/part','afterfloor'); ?>
