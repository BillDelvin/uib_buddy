<div class="container">
    <div class="text-left pb-3">
        <a href="<?= base_url('user/event'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Registration</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?php echo form_open_multipart('user/buddyRegisterForm'); ?>
                <!-- email -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-label-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="email" value="<?= set_value('email'); ?>">
                                <label for="email">Email</label>
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- phone number -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-label-group">
                                <input type="number" id="noPhoneMahasiswa" name="noPhoneMahasiswa" class="form-control" placeholder="noPhoneMahasiswa" value="<?= set_value('noPhoneMahasiswa'); ?>">
                                <label for="noPhoneMahasiswa">Phone Number</label>
                                <?= form_error('noPhoneMahasiswa', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- urlVideo -->
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="urlVideo" name="urlVideo" class="form-control" placeholder="urlVideo" value="<?= set_value('urlVideo'); ?>">
                        <label for="urlVideo">Url Video</label>
                        <?= form_error('urlVideo', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <!-- image -->
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" id="uploadImage" name="uploadImage" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <?= form_error('uploadImage', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('user/buddyRegisterForm'); ?>"> 
                    Register
                </button>
            </form>
        </div>
    </div>
</div>