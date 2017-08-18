<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<div id="sidebar-section">
	<ul class="xoxo">
		<?php do_action('nebula_sidebar_open'); //When using this hook remember it is in a UL! ?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Widget Area') ): ?>
			<?php //Primary Widget Area ?>
		<?php endif; ?>

		<li class="widget-container">
			<?php if ( has_nav_menu('sidebar') ): ?>
				<nav id="sidebarnav" role="navigation">
					<?php
						wp_nav_menu();
						//wp_nav_menu(array('theme_location' => 'sidebar'));
					?>
				</nav>
			<?php endif; ?>
		</li>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Secondary Widget Area') ): ?>
			<?php //Secondary Widget Area ?>
		<?php endif; ?>

		<?php do_action('nebula_sidebar_close'); //When using this hook remember it is in a UL! ?>
	</ul>

	<div class="recent-posts">
		<h3 class="title">Recent Posts</h3>
		<ul>
		<?php
			$args = array( 'numberposts' => '5' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<li><a class="text" href="'.get_permalink($recent["ID"]) . '">'.$recent["post_title"].'</a><span class="arrow">';
				include 'assets/img/arrow.svg';
				echo '</a></li>';
			}
			wp_reset_query();
		?>
		</ul>
	</div>

</div>
