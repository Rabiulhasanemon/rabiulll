<?php
require_once('function/function.php');
get_header();
 ?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
		<div class="overlay-bg overlay"></div>
		<h1 class="template-name">arclabs</h1>
		<div class="container">
			<div class="row fullscreen">
				<div class="banner-content col-lg-12">
					<p>Building for society</p>
					<h1>
						Future <br>
						Architechure
					</h1>
					<a href="#" class="primary-btn">View project</a>
				</div>
			</div>
		</div>
		<div class="head-bottom-meta">
			<div class="d-flex meta-left no-padding">
				<a href="#"><span class="fa fa-facebook-f"></span></a>
				<a href="#"><span class="fa fa-twitter"></span></a>
				<a href="#"><span class="fa fa-instagram"></span></a>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start features Area -->
	<section class="features-area section-gap-top" id="news">
		<div class="container">
			<div class="row feature_inner">



<?php

$selser="SELECT * FROM cs_services ORDER BY service_id='ASC'";
$QR=mysqli_query($con,$selser);
while($ser=mysqli_fetch_assoc($QR)){



 ?>

				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<i class="<?= $ser['service_icon']; ?>"></i>
						<h4><?= $ser['service_title']; ?></h4>
						<p><?= $ser['service_details']; ?></p>
					</div>
				</div>
        <?php
      }
         ?>
			</div>
		</div>
	</section>
	<!-- End features Area -->

	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-7 col-md-12 about-left">
					<img class="img-fluid" src="img/about.png" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title text-left">
						<h4>About Us</h4>
						<h2>We are world <br /> number one Company</h2>
					</div>
					<div>
						<p>
							Face male he light it moveth darkness winged eveni seas after life every gathering is forth two kind lesser i
							from seas him open him From creepeth after, life is above image from replenish behold great
						</p>
					</div>
					<a href="#" class="primary-btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start Project Area -->
	<section class="project-area section-gap-top" id="project">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h4>Recent Work</h4>
						<h2>View Our Project</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="filters mb-5">
						<ul>
							<li class="active" data-filter=".all">All</li>
							<li data-filter=".popular">Popular</li>
							<li data-filter=".latest">Latest</li>
							<li data-filter=".following">Following</li>
							<li data-filter=".upcoming">Upcoming</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="filters-content">
				<div class="row grid">
					<div class="col-lg-4 col-md-6 grid-sizer"></div>

					<div class="col-lg-4 col-md-6 grid-item all following" data-wow-delay="0s">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p1.png" alt="">
								</div>
								<div class="middle">
									<h4>Dell Villa, New York</h4>
									<div class="cat">Architecture, Modern Design</div>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-8 grid-item col-md-6 all upcoming latest">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p2.png" alt="">
								</div>
								<div class="middle">
									<h4>Eedn Park, Singapore</h4>
									<div class="cat">Architecture, Modern Design</div>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-8 grid-item col-md-6 all popular">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p3.png" alt="">
								</div>
								<div class="middle">
									<h4>Sky Build, Paris</h4>
									<div class="cat">Architecture, Modern Design</div>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all latest following">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/projects/p4.png" alt="">
								</div>
								<div class="middle">
									<h4>Dell Villa, New York</h4>
									<div class="cat">Architecture, Modern Design</div>
								</div>
								<a class="overlay" href="#"></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Project Area -->

	<!-- Start callto Area -->
	<section class="callto-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="call-wrap mx-auto">
					<h1>View Our Project </h1>
					<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=_C5vCGB8Xx0">
						<span></span>
					</a>
					<p>05:35</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End callto Area -->

	<!-- Start testimonial Area -->
	<section class="testimonial-area relative section-gap" id="testimonial">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h4>Testimonials</h4>
						<h2>Happy Clients</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial">
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t1.png" alt="">
						</div>
						<div class="desc">
							<p>
								Give dry stars form. Us called an won't winged had land cru abundantly land Midst
							</p>
							<h4>Danyel Yarde</h4>
							<div class="bottom">
								<p>CEO & Founder</p>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t2.png" alt="">
						</div>
						<div class="desc">
							<p>
								Give dry stars form. Us called an won't winged had land cru abundantly land Midst
							</p>
							<h4>Manel djuice</h4>
							<div class="bottom">
								<p>CEO & Founder</p>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t3.png" alt="">
						</div>
						<div class="desc">
							<p>
								Give dry stars form. Us called an won't winged had land cru abundantly land Midst
							</p>
							<h4>Mark Alviro Wiens</h4>
							<div class="bottom">
								<p>CEO & Founder</p>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t2.png" alt="">
						</div>
						<div class="desc">
							<p>
								Give dry stars form. Us called an won't winged had land cru abundantly land Midst
							</p>
							<h4>Manel djuice</h4>
							<div class="bottom">
								<p>CEO & Founder</p>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="" src="img/testimonial/t1.png" alt="">
						</div>
						<div class="desc">
							<p>
								Give dry stars form. Us called an won't winged had land cru abundantly land Midst
							</p>
							<h4>Mark Alviro Wiens</h4>
							<div class="bottom">
								<p>CEO & Founder</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
get_footer();
	 ?>
