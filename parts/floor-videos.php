
<?php if (get_sub_field('floor-before')): ?>
  <div class="floorBefore <?php if (!get_sub_field('floor-beforetitle')) { echo 'no__title'; } ?> <?php the_field('section-background'); ?>">
    <?php the_sub_field('floor-beforetitle'); ?>
  </div>
<?php endif; ?>

<div class="floorVideos">
	<div id="carousel" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
    <?php
    if( have_rows('videos') ):
      $i = 0;
      while( have_rows('videos') ): the_row();
        if( get_sub_field('video-title') ) $i++;
      endwhile;
      $total = $i;
    endif;
    ?>
  <?php if( have_rows('videos') ): ?>

    <div class="carousel-inner <?php echo $total; ?>">
			<?php while( have_rows('videos') ): the_row(); ?>
				<?php $count = get_row_index(); ?>
				<div class="carousel-item <?php if ($count == 1) { echo 'active'; } ?>">
          <iframe class="video-id" id="video-<?php echo $count; ?>"
            src="//player.vimeo.com/video/<?php the_sub_field('video-id') ?>?api=1" frameborder="0"
            webkitallowfullscreen mozallowfullscreen allowfullscreen>
          </iframe>
          <div class="video-over" id="info-<?php echo $count; ?>"
            style="background-image: url(<?php the_sub_field('video-image'); ?>)">
            <div class="video-play btn-play" id="play-button-<?php echo $count; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30">
                <path class="path-white" d="M791,486l26,15-26,15V486Z" transform="translate(-791 -486)"/>
              </svg>
            </div>
            <div class="video-title">
              <span><?php the_sub_field('video-title'); ?></span>
            </div>
            <div class="video-desc <?php if ($total == 1) { echo 'single'; } ?>">
              <span><?php the_sub_field('video-description'); ?></span>
            </div>
          </div>
          <?php if ($total > 1): ?>
            <div class="video-info">
              <a class="video-link btn btn-white" href="<?php the_sub_field('video-link'); ?>">Read More</a>
            </div>
          <?php endif; ?>
          <script>
            var iframe<?php echo $count; ?> = document.getElementById('video-<?php echo $count; ?>');
            var player<?php echo $count; ?> = $f(iframe<?php echo $count; ?>);
            var info<?php echo $count; ?> = document.getElementById('info-<?php echo $count; ?>');
            var play = document.getElementById("play-button-<?php echo $count; ?>");
            play.addEventListener("click", function() {
              player<?php echo $count; ?>.api("play");
              info<?php echo $count; ?>.style.display = 'none';
            });
    			</script>
				</div>
			<?php endwhile; ?>
		</div>

    <?php if ($total > 1): ?>
      <ol class="carousel-indicators">
        <?php while( have_rows('videos') ): the_row(); ?>
          <?php $count = get_row_index(); ?>
          <li id="indicator-<?php echo $count; ?>" class="indicator <?php if ($count == 1) { echo 'active'; } ?>" data-target="#carousel" data-slide-to="<?php echo $count-1; ?>" >
            <span class="indicator-num">0<?php echo $count; ?></span>
            <span class="indicator-name"><?php the_sub_field('video-title'); ?></span>
            <span class="indicator-arrow">
              <div class="indicator-arrow-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13">
                  <path class="indicator-arrow-right-icon" d="M888,1166h13.563v1H888v-1Zm8.032-5.99,5.956,6.2-0.686.72-5.956-6.2Zm5.27,6.06-5.956,6.2,0.686,0.72,5.956-6.2Z" transform="translate(-888 -1160)"/>
                </svg>
              </div>
              <div class="indicator-arrow-top">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                  <path class="indicator-arrow-top-icon" d="M655,1160.44h1V1174h-1v-13.56Zm-5.987,5.53,6.2-5.96,0.714,0.69-6.2,5.95Zm6.058-5.27,6.2,5.95,0.714-.68-6.2-5.96Z" transform="translate(-649 -1160)"/>
                </svg>
              </div>
            </span>
          </li>
        <?php endwhile; ?>
      </ol>
      <a class="indicator carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="indicator carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      <script>
        var indicators = document.getElementsByClassName("indicator");
        for (var i=0; i< <?php echo $count+2; ?>; i++) {
          indicators[i].addEventListener("click", function() {
            <?php for ($i=0; $i < $count; $i++) { ?>
              player<?php echo $i+1; ?>.api("pause");
              <?php } ?>
            });
          }
      </script>
    <?php endif; ?>

	<?php endif; ?>

  </div>
</div><!-- floorVideos -->

<div class="floorDivider <?php the_sub_field('bottom-margin'); ?>"></div>
