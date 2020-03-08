<div>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  	<a class="navbar-brand" href="#">
  		<img src="./assets/img/logo_UIB_White.png" width="40" alt="">
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
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
							<?php echo($user['nameMahasiswa'] ." ". $user['npmUser']); ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log Out</a>
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
				<img src="./assets/img/buddy_1.png" class="d-block w-100">
				</div>
				<div class="carousel-item" data-interval="2000">
				<img src="./assets/img/buddy_2.png" class="d-block w-100">
				</div>
				<div class="carousel-item">
				<img src="./assets/img/buddy_3.png" class="d-block w-100">
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
			<h1>ABOUT US</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		</div>
	</div>

</div>