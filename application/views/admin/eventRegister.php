<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/eventList'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Event Registration</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?= form_open_multipart('admin/eventRegistration'); ?>
                <!-- event title -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event Title</span>
                                </div>
                                <textarea class="form-control text-break" name="eventTitle" id="eventTitle" aria-label="Event Title" value="<?= set_value('eventTitle'); ?>"></textarea>
                            </div>
                            <?= form_error('eventTitle', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- evet description -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event Description</span>
                                </div>
                                <textarea class="form-control text-break" name="eventDescription" id="eventDescription" aria-label="Event Description" value="<?= set_value('eventDescription'); ?>"></textarea>
                            </div>
                            <?= form_error('eventDescription', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- event date -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event Date</span>
                                </div>
                                <input type="date" class="form-control text-break" name="eventDate" id="eventDate" aria-label="Event Date" value="<?= set_value('eventDate'); ?>">
                            </div>
                            <?= form_error('eventDate', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('admin/eventRegistration'); ?>"> 
                    Register Event
                </button>
            </form>
        </div>
    </div>
</div>