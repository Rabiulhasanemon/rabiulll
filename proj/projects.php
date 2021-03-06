<?php
require_once('function/function.php');
get_header();
 ?>
	<!-- End Header Area -->

	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<h1 class="text-white">Projects</h1>
					<p>Days so us evening for herb bearing lesser man female night</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

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

<?php get_onlyfooter(); ?>
