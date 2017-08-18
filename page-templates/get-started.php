<?php
/**
 * Template Name: Get Started
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

get_header(); ?>

<?php get_template_part('parts/part','pageheader'); ?>

<section class="floor floor-getstarted floor-getstarted-more more">
	<div class="container">
    <div class="row">
      <div class="col-md-12">
				<div class="quotes-container on__getstarted">
					<div class="quotes-text"><img class="quotes-mark" src="/wp-content/themes/a9l/assets/img/quote.png" alt="">We are cloud-based and integrate seamlessly with your LMS via SCORM or xAPI so there’s no complicated install or setup</div>
				</div><!-- quotes-container -->
			</div>
		</div>
	</div>

	<div class="line"></div>
  <h3 class="title">Get more info</h3>
  <p class="text">617-620-3962</p>
  <a class="btn btn-red" href="mailto:info@area9learning.com">info@area9learning.com</a>
</section>

<section class="floor floor-getstarted floor-getstarted-ebook">
  <div class="row">
    <div class="col-md-6">
      <div class="floor-getstarted-ebook-left">
        <div class="floor-getstarted-circle">
          <span class="text text-one">Moving to adaptive learning with our platform is as easy as</span>
					<div class="line"></div>
          <span class="text text-two">1,2,3</span>
					<span class="text text-three">– build, test, deploy!</span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="floor-getstarted-ebook-right">
        <div class="floor-getstarted-list">
          <h3 class="floor-getstarted-list-header">E-Book</h3>
          <div class="floor-getstarted-list-desc">In this ebook you will learn how to train your corporate employees more efficiently</div>
          <ul class="list list-none">
            <li class="list-item">
              <span class="title">Build</span>
              <span class="text">We gather your existing material – slides, videos, pdf’s – and transform all information into adaptive learning courses.</span>
            </li>
            <li class="list-item">
              <span class="title">Test</span>
              <span class="text">For every program we design, we make sure to deliver your specific learning objectives to meet the needs of individual users.</span>
            </li>
            <li class="list-item">
              <span class="title">Deploy</span>
              <span class="text">We can also train your teams how to use the proprietary authoring platform, so they are empowered to build adaptive courses.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="floor floor-getstarted floor-getstarted-info  bg-dark">
	<div class="container">
		<div class="text">As you make the move to adaptive, we can train your teams on adaptive development best practices so that they are self-sufficient - or we can do the development for you.</div>
	  <ul class="list list-info">
		  <li class="list-item">So long to ineffective training</li>
	    <li class="list-item">No more tedious, time-consuming learning</li>
	    <li class="list-item">Take your content to the next level</li>
		</ul>
	  <a class="btn btn-red" href="#">Get E-book</a>
	</div>
</section>

<section class="floor floor-getstarted floor-getstarted-what">
	<div class="container">

    <h3 class="floor-getstarted-what-title">What is adaptive learning?</h3>
    <ul class="list list-info">
      <li class="list-item">
        <h4 class="title">Far-reaching</h4>
        <div class="text">Whether you're in Hospitality, Transportation, Energy, Industrials, Manufacturing, or Retail & Consumer Goods, our cloud based e-learning solutions work for your business.</div>
      </li>
      <li class="list-item">
        <h4 class="title">Adaptive algorithms</h4>
        <div class="text">The Area9 adaptive algorithms use detailed models of human cognition and memory, and exploit targeted, repeated exposure to each learner’s most difficult learning items to ‘recharge’ memory and drive understanding.</div>
      </li>
      <li class="list-item">
        <h4 class="title">Outstanding</h4>
        <div class="text">Our approach uncovers unconscious incompetence – which can be as much as 40% or more for some roles – and corrects it.</div>
      </li>
    </ul>
		<div class="line"></div>
    <ul class="list list-none">
      <li class="list-item">
        <ul class="list list-disc">
          <li class="list-item"><span>Improved employee productivity</span></li>
          <li class="list-item"><span>Higher employee engagement</span></li>
          <li class="list-item"><span>Measurable capability and capacity</span></li>
          <li class="list-item"><span>Lower Unconscious incompetence</span></li>
        </ul>
      </li>
      <li class="list-item">
        <ul class="list list-disc">
          <li class="list-item"><span>Faster time to proficiency</span></li>
          <li class="list-item"><span>Eliminate frustration of unnecessary training</span></li>
          <li class="list-item"><span>Higher proficiency</span></li>
          <li class="list-item"><span>Higher self-awareness of strengths and development areas</span></li>
          <li class="list-item"><span>Enhanced, personalized learning experience</span></li>
        </ul>
      </li>
      <li class="list-item">
        <ul class="list list-disc">
          <li class="list-item"><span>Measurable outcomes</span></li>
          <li class="list-item"><span>Real time quality feedback</span></li>
          <li class="list-item"><span>Real time content updates</span></li>
          <li class="list-item"><span>Improved teaching effectiveness</span></li>
          <li class="list-item"><span>Eliminate "one size fits none</span></li>
        </ul>
      </li>
    </ul>

  </div>
</section>

<section class="floor floor-getstarted floor-getstarted-why bg-dark">
		<h3 class="title">Why Choose Area9?</h3>
</section>

<section class="floor floor-getstarted floor-getstarted-video  bg-dark">
  <iframe class="video-player" id="video" src="//player.vimeo.com/video/196790146?api=1"
    frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
  </iframe>
  <div hidden class="video-overlay" id="info" style="background-image: url(<?php the_sub_field('video-image'); ?>)">
    <button class="btn btn-white" id="play">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30">
        <path class="path-white" d="M791,486l26,15-26,15V486Z" transform="translate(-791 -486)"/>
      </svg>
    </button>
    <span class="desc">Why Choose Area9?</span>
  </div>
  <script>
    var player = $f(document.getElementById('video'));
    var info = document.getElementById('info');
    var play = document.getElementById('play');
    play.addEventListener('click', function() {
      info.style.display = 'none';
      player.api('play');
    });
  </script>
</section>

<section class="floor floor-getstarted floor-getstarted-process  bg-light">
  <div class="floor-getstarted-process-header">
    <h3 class="title">The process</h3>
    <p class="text">How we transform your content to Adaptive Learning</p>
  </div>
  <div class="floor-getstarted-process-content">
    <img class="desktop" src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/howitworks.png" alt="How It Works">
    <img class="mobile" src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/howitworks-mobile.png" alt="How It Works">
  </div>
  <div class="floor-getstarted-process-bottom">
    <p class="text">Find out how adaptive learning can help your employees become superstars by downloading our primer below:</p>
    <a class="btn btn-gray" href="#">Request info</a>
  </div>
</section>

<section class="floor floor-getstarted floor-getstarted-case  bg-dark">
  <h3 class="title">Case Studies</h3>
  <p class="text">Find out how adaptive learning can improve employee productivity by downloading our primer</p>
  <a class="btn btn-red" href="#">Download</a>
</section>

<?php get_footer(); ?>
