<?php
/**
 * Theme Footer
 */
?>

<section class="section-whitepapper">
	<div class="container-fluid">
		<img src="<?php echo get_template_directory_uri(); ?>/../a9l/assets/img/whitepapper.png" />
		<div class="buttons">
			<a href="/white-paper/" class="btn btn-biege2">Download White Paper</a>
		</div>
	</div>
</section>

<footer class="section-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h3 class="heading">Engage</h3>
				<?php if ( has_nav_menu('footer') ): ?>
					<nav class="nav-footer">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'depth' => '1')); ?>
					</nav>
				<?php endif; ?>
			</div>
			<div class="col-sm-6 col-md-3">
				<h3 class="heading">Support</h3>
				<ul class="menu">
					<li class="menu-item">
						<a href="#">Contact</a>
					</li>
					<li class="menu-item">
						<a href="/our-team/">Our Team</a>
					</li>
					<li class="menu-item">
						<a href="#">Resources</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 line">
				<div class="block">
					<h4 class="title">AREA9 LEARNING INC.<br />US HEADQUARTERS</h4>
					<div class="text">
						126 Woodland Rd, Chestnut Hill<br />
						MA 02467, USA<br />
						Phone: +1 617 620 3962<br />
						info@area9learning.com
					</div>
				</div>
				<div class="block">
					<h4 class="title">AREA9 LEARNING APS.<br />EU HEADQUARTERS</h4>
					<div class="text">
						Galionsvej 37,<br />
						1437 Copenhagen K, Denmark<br />
						Phone: +45 33 11 00 90<br />
						info@area9learning.com
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<span class="copy">&copy; <?php the_date('Y'); ?> Area9 Learning ApS | All Rights Reserved</span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</div>
</body>
</html>
