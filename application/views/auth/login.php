<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Login</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <form method="post" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
                        <label for="email">Email address</label>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <label for="password">Password</label>
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="index.html">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/registration'); ?>">Register an Account</a>
            </div>
        </div>
    </div>
</div>