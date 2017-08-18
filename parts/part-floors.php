
<?php $pc_class = get_field('section-background'); ?>
<?php if (get_field('no-margin'))	{ $pc_class = $pc_class . ' no__margin'; } ?>
<?php if (get_field('no-header')) { $pc_class = $pc_class . ' no__header'; } ?>

<section class="pageContent <?php echo $pc_class; ?>">
    <?php while ( have_rows('page-floors') ): the_row(); ?>

      <?php if ( get_row_layout() == 'video' ): ?>
        <?php get_template_part('parts/floor','video'); ?>

      <?php elseif ( get_row_layout() == 'image' ): ?>
        <?php get_template_part('parts/floor','image'); ?>

      <?php elseif ( get_row_layout() == 'text' ): ?>
        <?php get_template_part('parts/floor','text'); ?>

      <?php elseif ( get_row_layout() == 'course' ): ?>
        <?php get_template_part('parts/floor','course'); ?>

      <?php elseif ( get_row_layout() == 'testimonials' ): ?>
        <?php get_template_part('parts/floor','testimonials'); ?>

      <?php elseif ( get_row_layout() == 'videos' ): ?>
        <?php get_template_part('parts/floor','videos'); ?>

      <?php elseif ( get_row_layout() == 'quotes' ): ?>
        <?php get_template_part('parts/floor','quotes'); ?>
      <?php endif; ?>

    <?php endwhile; ?>
</section>
