<?php get_template_part('parts/part','beforefloor'); ?>

<?php //Собираем все дополнительные классы для блока с контентом ?>
<?php $f_content_classes = ''; ?>
<?php if(get_sub_field('hide-button')): $f_content_classes = 'no__button '; endif; ?>
<?php if(get_sub_field('double-content')): $f_content_classes = $f_content_classes . 'is__half '; endif; ?>

<?php //Задаем соотношение колонок внутри блока ?>
<?php $f_left_column = 'col-md-5'; ?>
<?php $f_right_column = 'col-md-7'; ?>
<?php if (get_sub_field('image-width') == 'wide'): ?>
  <?php $f_left_column = 'col-md-8'; ?>
  <?php $f_right_column = 'col-md-4'; ?>
<?php elseif (get_sub_field('image-width') == 'equal'): ?>
  <?php $f_left_column = 'col-md-6'; ?>
  <?php $f_right_column = 'col-md-6'; ?>
<?php endif; ?>


<div class="container">
  <div class="floorImage">
    <div class="row">
      <div class="<?php echo $f_left_column; ?>">
        <div class="floorImage-image <?php echo 'is__' . get_sub_field('image-type'); ?>" style="background-image: url(<?php the_sub_field('image-url'); ?>)" alt="<?php the_sub_field('image-title'); ?>">
        </div>
      </div>
      <div class="<?php echo $f_right_column; ?>">

        <div class="floor-content <?php echo $f_content_classes; ?> ">
          <h3 class="floor-title"><?php the_sub_field('image-title'); ?></h3>
          <div class="floor-text">
            <?php the_sub_field('image-text'); ?>
          </div>
          <?php if(!(get_sub_field('hide-button')) AND (get_sub_field('button-text'))): ?>
            <a href="<?php the_sub_field('button-url'); ?>" class="btn btn-red on__floor"><?php the_sub_field('button-text'); ?></a>
          <?php endif; ?>
        </div><!-- floor-content -->

        <?php if(get_sub_field('double-content')): ?>

        <hr>
        <div class="floor-content <?php echo $f_content_classes; ?>">
          <h3 class="floor-title"><?php the_sub_field('image-title2'); ?></h3>
          <div class="floor-text">
            <?php the_sub_field('image-text2'); ?>
          </div>

          <?php if(!(get_sub_field('hide-button')) AND (get_sub_field('button2-text'))): ?>
            <a href="<?php the_sub_field('button2-url'); ?>" class="btn btn-red on__floor"><?php the_sub_field('button2-text'); ?></a>
          <?php endif; ?>
        </div><!-- floor-content -->

        <?php endif; ?>

      </div>
    </div><!--/row-->
  </div><!-- container -->
</div><!-- floorImage -->

<?php get_template_part('parts/part','afterfloor'); ?>
