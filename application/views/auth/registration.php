<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Registration</div>
        <div class="card-body">
            <?php echo form_open_multipart('auth/registration'); ?>
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
            <div class="mb-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" id="userfile" name="userfile" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <?= form_error('userfile', '<small class="text-danger">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-block" href="login.html">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/sign_in'); ?>">Login Page</a>
            </div>
        </div>
    </div>
</div>