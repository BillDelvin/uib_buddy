<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Sign In</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?php echo form_open_multipart('auth/sign_in'); ?>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="number" id="npm" name="npm" class="form-control" placeholder="NPM" value="<?= set_value('npm'); ?>">
                        <label for="npm">NPM</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('auth/sign_in'); ?>">Sign In</button>
            </form>
            <div class="text-center">
                <div class="row"> 
                    <div class="col-md-6">
                        <a class="d-block small mt-3" href="<?= base_url('welcome'); ?>">Back</a>
                    </div>
                    <div class="col-md-6">
                        <a class="d-block small mt-3" href="<?= base_url('auth/registration'); ?>">Register an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>