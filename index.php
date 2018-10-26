<?php
	include 'header.php';
	include 'connection.php';
?>

<div class="preloader">
	<div class="loader-inner line-scale-pulse-out"></div>
</div>

<main>
<section id="home" class="landing-page">

	<?php include'nav.php';?>

	<div class="padding-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 text-center">
					<img id="photo-holder" src="img/avatar.png" height="345px" width="345px" alt="avatar">
				</div>

				<div class="col-sm-6 col-xs-12">
					<h1 class="h1-right-text">Hi, I'm Ravi.</h1>
					<h2 class="h2-right-text">A Web Developer and Designer based on Manila, Philippines</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<a href="#about"><img id="arrow-down" class="arrow-down" src="img/arrow-down.png" alt="arrow-down"></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ABOUT-->

<section id="about" class="padding">
	<div class="container">
		<div class="row text-center">
			<div class=" col-sm-12 col-xs-12">
					<h1 class="section-text text-center">About</h1>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-sm-7 col-xs-12">
				<h1 class="name-text mt-50 text-center">Ravi Renz G. Olayres</h1>
				
				<p class="summary-text">I love to code and design. I want to make things more convenient to everyone.I studied at STI College Ortigas - Cainta where i graduated on May 2018 with a degree in Information Technology.</p>
			</div>

			<div class="col-sm-5 col-xs-12 padding-top">
				<p class="follow-text">You can follow me on</p>
				<a href="https://web.facebook.com/renz.olayres" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/iamrenz8" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/iamrenz8" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>
		</div>

		<div class="row padding text-center">
			<div class="col-sm-3 col-xs-12">
				<img id="html5" class="expertise-icon" alt="HMTL5_Icon" src="img/html5.png" title="HTML5">
			</div>

			<div class="col-sm-3 col-xs-12">
				<img id="css3" class="expertise-icon" alt="CSS3_Icon" src="img/css3.png" title="CSS3">
			</div>

			<div class="col-sm-3 col-xs-12">
				<img id="php" class="expertise-icon" alt="PHP_Icon" src="img/php.png" title="PHP">
			</div>

			<div class="col-sm-3 col-xs-12">
				<img id="javascript" class="expertise-icon" alt="JavaScript_Icon" src="img/js.png" title="Javascript">
			</div>
		</div>
	</div>
</section>


<section class="filler padding">

</section>

<!-- PROJECTS -->
<section id="projects" class="padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12 col-xs-12">
				<h1 class="section-text">My Work</h1>
			</div>
		</div>
		
		<div class="row padding-top">
			<div class="col-sm-6 col-xs-12">
				<p class="summary-text">
					During my college days, Our team proposed a mobile game/application project named "Early Learners".It is intended for the preschool teachers and serve it as a helping tool in teaching their students. Like the traditional teaching method in preschool students where the teachers uses like cards but we implemented with technology.
				</p>

				<p class="summary-text">
					Our team developed this mobile game with the use of the following:
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<ul>
									<li class="summary-text">Unity Game Engine</li>
									<li class="summary-text">Adobe Photoshop</li>
									<li class="summary-text">MS Offices</li>
								</ul>
							</div>

							<div class="col-sm-6 col-xs-6">
								<ul>
									<li class="summary-text">C#</li>
									<li class="summary-text">Javascript</li>
								</ul>
							</div>
						</div>

				</p>
				
				<p class="summary-text">
					You can download the APK of our developed on this  <a title="APK Installer" href="http://www.mediafire.com/file/z07tcja6qz5bdyk/Early+Learners.apk" target="_blank">link.</a>
				</p>
			</div>

			<div class="col-sm-6 col-xs-12">
				<div class="carousel slide" data-ride="carousel" id="myCarousel">

					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/elalpha.png" style="width: 100%;" />
						</div>

						<div class="item">
							<img src="img/elcolor1.png" style="width: 100%;" />
						</div>

						<div class="item">
							<img src="img/elalpha2.png" style="width: 100%;" />
						</div>

						<!-- CAROUSEL CONTROLS -->
						<a data-slide="prev" class="left carousel-control" href="#myCarousel">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a data-slide="next" class="right carousel-control" href="#myCarousel">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- CONTACT-->

<section id="contact" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
					<h1 class="section-text">Let's Work Together!</h1>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-sm-6 col-xs-12 text-center">
				<?php include 'form.php';?>
			</div>
		</div>
	</div>
</section>
</main>

<?php
	include 'footer.php';
?>