<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Registration</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?php echo form_open_multipart('auth/registration'); ?>
                <!-- npm -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-label-group">
                                <input type="number" id="npm" name="npm" class="form-control" placeholder="NPM" value="<?= set_value('npm'); ?>">
                                <label for="npm">NPM</label>
                                <?= form_error('npm', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- name -->
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
                <!-- jurusan -->
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="majors" name="majors" class="form-control" placeholder="Majors" value="<?= set_value('majors'); ?>">
                        <label for="majors">Majors</label>
                        <?= form_error('majors', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <!-- password -->
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password'); ?>">
                        <label for="password">Password</label>
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <!-- confirm password -->
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" value="<?= set_value('password'); ?>">
                        <label for="confirm_password">Confirm Password</label>
                        <?= form_error('confirm_password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('auth/registration'); ?>"> 
                    Register
                </button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/sign_in'); ?>">Sign In</a>
            </div>
        </div>
    </div>
</div>