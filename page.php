<?php

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

do_action('nebula_preheaders');
get_header();
?>

<?php get_template_part('parts/part','pageheader'); ?>

<?php $pc_class = get_field('section-background'); ?>
<?php if (get_field('no-margin'))	{ $pc_class = $pc_class . ' no__margin'; } ?>
<?php if (get_field('no-header')) { $pc_class = $pc_class . ' no__header'; } ?>

<section class="pageContent <?php echo $pc_class; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageContent-text"><?php the_content(); ?></div>
			</div><!-- col-sm- -->
		</div><!-- row-->
	</div><!-- container -->
</section>



<?php get_footer(); ?>
