<div class="col-lg-4 col-md-6 col-sm-6">
  <a class="memberbox" href="<?php echo get_permalink(); ?>">
    <div class="memberbox-photo"><?php the_post_thumbnail('team-thumb-380'); ?></div>
    <div class="memberbox-info">
      <div class="memberbox-name"><?php the_title(); ?></div>
      <div class="memberbox-position"><?php the_field('position'); ?></div>
    </div>
  </a>
</div>
