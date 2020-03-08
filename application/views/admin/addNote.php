<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/note'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Adding Note</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?= form_open_multipart('admin/addNote'); ?>
                <!-- card title -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Note Title</span>
                                </div>
                                <textarea class="form-control" name="noteTitle" id="noteTitle" aria-label="Note Title" value="<?= set_value('noteTitle'); ?>"></textarea>
                            </div>
                            <?= form_error('noteTitle', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- card description -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Note Description</span>
                                </div>
                                <textarea class="form-control" name="noteDescription" id="noteDescription" aria-label="Note Description" value="<?= set_value('noteDescription'); ?>"></textarea>
                            </div>
                            <?= form_error('noteDescription', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('admin/addNote'); ?>"> 
                    Adding Note
                </button>
            </form>
        </div>
    </div>
</div>