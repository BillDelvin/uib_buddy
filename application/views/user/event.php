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
			<li class="nav-item active">
			<a class="nav-link font-weight-bold" href="<?= base_url('welcome') ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link font-weight-bold" href="<?= site_url('welcome') ?>">About Us</a>
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
							<?php endif; ?>
							<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log Out</a>
						</div>
					</li>
				</ul>
			<?php endif; ?>
		</form>
	</div>
</nav>

<div class="container pt-3">
    <h3 class="text-center">EVENT</h3>
	<?= $this->session->flashdata('message'); ?>
	<?php $i = 0; ?>
    <?php foreach ($event as $e ) { ?>
        <div class="pb-3">
            <div class="card">
                <div class="card-header">
                    <h5><?= $e["eventTitle"]; ?></h5>
				</div>
                <div class="card-body">
                    <p class="card-text"><?= $e["eventDescription"]; ?></p>
					<?php if(!isset($_SESSION['npmUser'])) : ?>
						<a href="<?= base_url('auth/sign_in') ?>" class="btn btn-primary">Register</a>
					<?php elseif (isset($_SESSION['npmUser'])) : ?>
						<?php
							foreach($idEvent as $id){
								$id;
							}	 
						?>
						<?php if( in_array($e['idEvent'], $id ) ) : ?>
							<a value="<?= $e['idEvent']; ?>" href="<?= base_url('user/buddyRegisterForm/'.$e['idEvent']); ?>" class="btn btn-primary" >Alrady Register</a>
						<?php else : ?>	
							<a value="<?= $e['idEvent']; ?>" href="<?= base_url('user/buddyRegisterForm/'.$e['idEvent']); ?>" class="btn btn-primary" >Register</a>
						<?php endif;?>
					<?php endif; ?>
                </div>
            </div>
        </div>
		<?php $i++; ?>
	<?php } ?>
</div>
<!-- /.container-fluid -->