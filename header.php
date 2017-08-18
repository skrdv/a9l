<?php $debug_class = ( nebula()->is_debug() )? 'debug' : ''; ?>
<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="<?php echo $debug_class; ?> no-js ie ie6 lt-ie7 lte-ie7 lt-ie8 lte-ie8 lt-ie9 lte-ie9 lt-ie10"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="<?php echo $debug_class; ?> no-js ie ie7 lte-ie7 lt-ie8 lte-ie8 lt-ie9 lte-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="<?php echo $debug_class; ?> no-js ie ie8 lte-ie8 lt-ie9 lte-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><html <?php language_attributes(); ?> class="<?php echo $debug_class; ?> no-js ie ie9 lte-ie9 lt-ie10"><![endif]-->
<!--[if IEMobile]><html <?php language_attributes(); ?> class="<?php echo $debug_class; ?> no-js ie iem7" dir="ltr"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class=" <?php echo $debug_class; ?> no-js"><!--<![endif]-->
<head>
	<?php get_template_part('inc/metadata'); //Do not place tags above this. ?>
	<?php wp_head(); ?>
	<?php get_template_part('inc/analytics'); //Google Analytics and other analytics trackers. ?>
</head>
<body <?php body_class(); ?>>
<div id="body-wrapper">
<div id="fb-root"></div>
<?php do_action('nebula_body_open'); ?>

<header class="section-header navbar navbar-light navbar-toggleable-md bd-navbar fixed-top">
  <nav class="container">
		<a class="navbar-brand" href="/" title="<?php bloginfo('name'); ?>">
			<img class="svg" src="<?php echo get_template_directory_uri(); ?>/../a9l/assets/img/logo.svg" alt="<?php bloginfo('name'); ?>"/>
		</a>
    <div class="d-flex justify-content-between hidden-lg-up">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-primary">
			<?php if ( has_nav_menu('primary') ): ?>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'depth' => '2')); ?>
			<?php endif; ?>
    </div>
		<a class="tools btn btn-black" href="/get-started/">Get Started</a>
  </nav>
</header>

<?php /*
<header hidden class="section-header" role="banner">
	<div class="container-fluid">
		<a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
			<img class="svg" src="<?php echo get_template_directory_uri(); ?>/../a9l/assets/img/logo.png" alt="<?php bloginfo('name'); ?>"/>
		</a>
		<?php if ( has_nav_menu('primary') ): ?>
			<nav class="navbar navbar-light navbar-toggleable-md">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-primary" aria-expanded="false">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'depth' => '2')); ?>
				</div>
			</nav>
		<?php endif; ?>
		<a class="tools btn btn-black" href="/get-started/">Get Started</a>
	</div>
</header>
*/ ?>
