<?php
/**
 * The template for displaying the front page.
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}
?>
<?php get_header(); ?>

<section class="section-home section-home-banner"
	style="background-image: url(<?php the_field('top-image'); ?>);">
	<div class="container">
		<h1 class="title"><?php the_field('top-title'); ?></h1>
		<h3 class="title title-two"><?php the_field('top-subtitle'); ?></h3>
		<div class="line"></div>
		<div class="text"><?php the_field('top-text'); ?></div>
		<div class="buttons">
			<a class="btn btn-white" href="<?php the_field('top-left-btn-url'); ?>"><?php the_field('top-left-btn-title'); ?></a>
			<a class="btn btn-white" href="<?php the_field('top-right-btn-url'); ?>"><?php the_field('top-right-btn-title'); ?></a>
		</div>
	</div>
</section>

<section class="section-home section-home-logos">
	<div class="container">
		<?php if( have_rows('logos') ): ?>
    	<?php while ( have_rows('logos') ) : the_row(); ?>
				<a class="item" href="<?php the_sub_field('logo-url'); ?>">
					<img src="<?php the_sub_field('logo-image'); ?>" />
				</a>
    	<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
	</div>
</section>

<section class="section-home section-home-personalize">
	<div class="container">
		<h3 class="title"><?php the_field('personalize-title'); ?></h3>
		<div class="text"><?php the_field('personalize-text'); ?></div>
	</div>
	<div class="container">
		<?php if( have_rows('icons') ): ?>
			<div class="items">
				<?php while ( have_rows('icons') ) : the_row(); ?>
					<a class="item" href="<?php the_sub_field('icon-url'); ?>">
						<img class="image" src="<?php the_sub_field('icon-image'); ?>" alt="<?php the_sub_field('icon-title'); ?>" />
						<div class="title"><?php the_sub_field('icon-title'); ?></div>
						<div class="arrow"><?php include 'assets/img/arrow.svg'; ?></div>
					</a>
	    	<?php endwhile; ?>
			</div>
		<?php else: ?>
		<?php endif; ?>
		<div class="buttons">
			<a href="<?php the_field('personalize-btn-url'); ?>" class="btn btn-red"><?php the_field('personalize-btn-title'); ?></a>
		</div>
	</div>
</section>

<section class="section-home section-home-research video">
	<iframe class="video-id" id="video-id-research"
		src="//player.vimeo.com/video/<?php the_field('researching-vimeo-id') ?>?api=1"
		frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
	</iframe>
	<div class="video-over" id="info-research"
		style="background-image: url(<?php the_field('researching-image'); ?>)">
		<div class="video-play btn-play" id="play-button-research">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30">
				<path class="path-white" d="M791,486l26,15-26,15V486Z" transform="translate(-791 -486)"/>
			</svg>
		</div>
		<div class="video-title">
			<span><?php the_field('researching-title'); ?></span>
		</div>
		<div class="video-desc">
			<span><?php the_field('researching-description'); ?></span>
		</div>
		<script>
			var playerR = $f(document.getElementById('video-id-research'));
			var infoR = document.getElementById('info-research');
			var playR = document.getElementById("play-button-research");
			playR.addEventListener("click", function() {
				playerR.api("play");
				infoR.style.display = 'none';
			});
		</script>
	</div>
	<div class="video-info">
		<a class="btn btn-white" href="<?php the_sub_field('researching-link'); ?>">Learn More</a>
	</div>
</section>

<section class="section-home section-home-howitworks">
	<div class="container">
		<h3 class="title">
			<?php the_field('howitworks-title'); ?>
		</h3>
		<img class="desktop" src="<?php the_field('howitworks-desktop'); ?>" />
		<img class="mobile" src="<?php the_field('howitworks-mobile'); ?>" />
		<div class="buttons">
			<a class="btn btn-red" href="<?php the_field('howitworks-url'); ?>">
				<?php the_field('howitworks-title'); ?>
			</a>
		</div>
	</div>
</section>

<section class="section-home section-home-industry">
	<div class="container">
		<h3 class="title">
			<?php the_field('industries-title'); ?>
		</h3>
		<?php if( have_rows('industries') ): ?>
			<div class="industries items">
				<div class="row">
				<?php while ( have_rows('industries') ) : the_row(); ?>
					<div class="col-sm-6 col-md-3">
						<a class="item" href="<?php the_sub_field('industry-url'); ?>">
							<div class="arrow"><?php include 'assets/img/arrow.svg'; ?></div>
							<img src="<?php the_sub_field('industry-image'); ?>" alt="<?php the_sub_field('industry-title'); ?>" />
							<div class="title">
								<?php the_sub_field('industry-title'); ?>
							</div>
						</a>
					</div>
	    	<?php endwhile; ?>
				</div>
			</div>
		<?php else: ?>
		<?php endif; ?>
		<div class="buttons">
			<a class="btn btn-red" href="<?php the_field('industries-btn-url'); ?>">
				<?php the_field('industries-btn-title'); ?>
			</a>
		</div>
	</div>
</section>

<section class="section-home section-home-customers video">
	<iframe class="video-id" id="video-id-customers"
		src="//player.vimeo.com/video/<?php the_field('customers-vimeo-id') ?>?api=1"
		frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
	</iframe>
	<div class="video-over" id="info-customers"
		style="background-image: url(<?php the_field('customers-image'); ?>)">
		<div class="video-play btn-play" id="play-button-customers">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30">
				<path class="path-white" d="M791,486l26,15-26,15V486Z" transform="translate(-791 -486)"/>
			</svg>
		</div>
		<div class="video-title">
			<span><?php the_field('customers-title'); ?></span>
		</div>
		<div class="video-desc">
			<span><?php the_field('customers-description'); ?></span>
		</div>
		<script>
			var playerC = $f(document.getElementById('video-id-customers'));
			var infoC = document.getElementById('info-customers');
			var playC = document.getElementById("play-button-customers");
			playC.addEventListener("click", function() {
				playerC.api("play");
				infoC.style.display = 'none';
			});
		</script>
	</div>
	<div class="video-info">
		<a class="btn btn-white" href="<?php the_sub_field('customers-link'); ?>">Learn More</a>
	</div>
</section>

<?php get_footer(); ?>
