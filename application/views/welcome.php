<div>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  	<a class="navbar-brand" href="#">
  		<img src="<?= base_url('assets/	'); ?>img/logo_UIB_White.png" width="40" alt="">
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link font-weight-bold" href="#home">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bold" href="#aboutus">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bold" href="<?= base_url('user/event'); ?>">Event</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<?php if(!isset($_SESSION['npmUser'])) : ?>
				<a href="<?= base_url('auth/sign_in'); ?>" class="btn btn-outline-light my-2 my-sm-0" type="submit">Sign in</a>
			<?php else : ?>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?= $user['nameMahasiswa'] ." ". $user['npmUser']; ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php if($user['role'] == 1) : ?>
								<a class="dropdown-item" href="<?= base_url('admin'); ?>">Dashboard</a>
							<?php else : ?>
								<a class="dropdown-item" href="<?= base_url('user/yourEvent'); ?>">My Event</a>
								<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log Out</a>
							<?php endif; ?>
						</div>
					</li>
				</ul>
			<?php endif; ?>
		</form>
	</div>
</nav>

<!-- carousell -->
	<div id="home">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-interval="10000">
					<img src="<?= base_url('assets/') ?>img/buddy1.png" class="d-block w-100">
				</div>
				<div class="carousel-item" data-interval="2000">
					<img src="<?= base_url('assets/') ?>img/buddy2.png" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/') ?>img/buddy3.png" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/') ?>img/buddy4.png" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/') ?>img/buddy5.png" class="d-block w-100">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> 
	</div>

	<!-- container -->	
	<div class="container">
		<div class="aboutus" id="aboutus"> 
			<h2>What is a Buddy?</h2>
			<p>Buddy is a UIB student who will help and accompany international students that come to UIB. Buddy will help international students settle in UIB, accompany them, help lecturers teach them and provide translation help, amongst other things.</p>
		</div>
		<div class="benefits">
			<h2>What are the benefits of being a Buddy?</h2>
			<ol>
				<li>You will have an opportunity to make friends with international students from various countries.</li>
				<li>You can widen your perspective and educate yourself about the cultures of other countries. And share Indonesian culture to them, as well!</li>
				<li>You will have a chance to learn a new language.</li>
				<li>You can practice your English and other foreign languages.</li>
				<li>You will have an opportunity to train yourself in communication skills.</li>
				<li>You will get a certificate as Buddy from IRO.</li>
			</ol>
		</div>
		<div class="criteria">
			<h2>What are the criteria of being a Buddy?</h2>
			<ol>
				<li>You are an outgoing person </li>
				<li>You are a responsible person</li>
				<li>You can speak English actively </li>
				<li>You have a strong commitment to follow schedule from IRO for a month</li>
				<li>You have basic knowledge about Batam and Indonesian culture</li>
			</ol>
		</div>
	</div>

</div>