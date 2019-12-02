<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Buddy Registration</div>
        <div class="card-body">
            <form method="post" action="<?= base_url('auth/registration'); ?>">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-label-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?= set_value('name'); ?>">
                                <label for="name">Name</label>
                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-label-group">
                                <input type="text" id="npm" name="npm" class="form-control" placeholder="NPM" value="<?= set_value('npm'); ?>">
                                <label for="npm">NPM</label>
                                <?= form_error('npm', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
                        <label for="email">Email address</label>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Phone Number" value="<?= set_value('phoneNumber'); ?>">
                        <label for="phoneNumber">Phone Number</label>
                        <?= form_error('phoneNumber', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="login.html">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Login Page</a>
            </div>
        </div>
    </div>
</div>