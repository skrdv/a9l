<?php if (!get_field('no-header')): ?>
<section class="pageHeader <?php the_field('header-background'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="pageHeader-title"><?php the_title(); ?></h1>
				<div class="pageHeader-text <?php if (get_field('no-border')): echo 'no__border'; endif; ?>"><?php the_field('header-subtitle'); ?></div>
			</div><!-- col-sm- -->
		</div><!-- row-->
	</div><!-- container -->
</section>
<?php endif; ?>
