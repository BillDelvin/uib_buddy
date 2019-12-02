<div class="container-fluid">
    <h1>My Profil</h1>

    <div class="card mb-3" style="border-radius:1.25rem">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/' . $user['image']); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <div class="row">
                        <div class="col-3">
                            <p class="card-text">Email</p>
                            <p class="card-text">Phone Number</p>
                        </div>
                        <div class="col-6">
                            <p>: <?= $user['email']; ?></p>
                            <P>: <?= $user['phone_number']; ?></P>
                        </div>
                    </div>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->