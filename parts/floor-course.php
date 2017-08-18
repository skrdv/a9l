<?php get_template_part('parts/part','beforefloor'); ?>

<div class="container">
  <div class="floorCourse ">
    <div class="row">
      <div class="col-md-8">

        <div class="floor-content on__left">
          <h3 class="floor-title"><?php the_sub_field('title'); ?></h3>
          <div class="floor-link"><a href="http://<?php the_sub_field('link'); ?>"><?php the_sub_field('link'); ?></a></div>
          <div class="floor-text">

            <?php the_sub_field('text'); ?>
          </div>
        </div><!-- floor-content -->

      </div>

      <div class="col-md-4">
        <div class="floorCourse-image <?php echo 'is__' . get_sub_field('image-type'); ?>" style="background-image: url(<?php the_sub_field('image'); ?>)">
        </div>
      </div>

    </div><!--/row-->
  </div><!-- floorImage -->
</div><!-- container -->

<?php get_template_part('parts/part','afterfloor'); ?>
