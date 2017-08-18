<div class="floorText <?php the_field('section-background'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="floorText-content">
          <h3 class="floorText-title"><?php the_sub_field('title'); ?></h3>
          <?php if (get_sub_field('subtitle')) { ?> <h4 class="floorText-subtitle"><?php the_sub_field('subtitle'); ?></h4> <?php } ?>
            <?php if (!get_sub_field('hide-divider')) { ?> <div class="floorText-divider"></div> <?php } ?>
          <div class="floorText-text">
            <?php the_sub_field('text'); ?>
          </div>
        </div>

      </div>
    </div><!--/row-->
  </div><!-- container -->
</div><!-- floorText -->

<?php get_template_part('parts/part','afterfloor'); ?>
