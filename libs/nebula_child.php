<?php

/*==========================
 Custom child theme functions
 Use this file for project-specific functions.

 See instructions for template directories and function overrides in ../functions.php
 ===========================*/

// Add new image sizes
add_action('after_setup_theme', 'custom_image_sizes');
function custom_image_sizes(){
	add_image_size( 'team-thumb-380', 380, 400, true );
	add_image_size( 'videos-thumb-330', 330, 160, true );
	add_image_size( 'news-thumb-225', 225, 140, true );
}


//Add/remove post formats as needed - http://codex.wordpress.org/Post_Formats
//add_theme_support('post-formats', array('aside', 'chat', 'status', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

//Google Analytics Experiments (Split Tests)
//Documentation: http://gearside.com/nebula/documentation/custom-functionality/split-tests-using-google-analytics-experiments-with-nebula/
//Add a new condition for each experiment group. There can be as many concurrent experiments as needed (just make sure there is no overlap!)
add_action('nebula_head_open', 'nebula_ga_experiment_detection');
function nebula_ga_experiment_detection(){
	//Example Experiment
	if ( is_page(9999) ){ //Use is_post(9999) for single posts. Change the ID to match the desired page/post! ?>
		<!-- Paste Google Analytics Experiment generated script here -->
	<?php }
}


// Add Scripts and Styles
add_action( 'wp_enqueue_scripts', 'a9l_scripts' );
function a9l_scripts() {
    // wp_enqueue_style( 'social-style', get_stylesheet_uri() . '/../assets/css/jssocials.css' );
		wp_enqueue_script( 'ayoshare', get_template_directory_uri() . '/../a9l/assets/js/ayoshare.js', array(), '1.0', true );
    wp_enqueue_script( 'nanoscroller', get_template_directory_uri() . '/../a9l/assets/js/jquery.nanoscroller.min.js', array(), '1.0', true );
		wp_enqueue_script( 'vimeo', get_template_directory_uri() . '/../a9l/assets/js/froogaloop2.min.js', array(), '1.0', false );
}





// Add Class to News links
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');
function post_link_attributes($output) {
    $code = 'class="control-link"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}








?>
