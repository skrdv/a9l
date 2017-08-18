
<div class="floorQuotes <?php the_field('section-background'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="quotes-container">
          <div class="quotes-text"><img class="quotes-mark" src="/wp-content/themes/a9l/assets/img/quote.png" alt=""><?php the_sub_field('quote'); ?></div>
          <div class="quotes-author"><?php the_sub_field('author'); ?></div>
        </div><!-- quotes-container -->
      </div>
    </div><!--/row-->
  </div>
</div><!-- floorQuotes -->

<?php get_template_part('parts/part','afterfloor'); ?>
