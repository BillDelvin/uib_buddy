<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/eventList'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Event Update</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?= form_open_multipart('admin/eventUpdate/'.$id); ?>
                <!-- event title -->
                <input type="hidden" id="idEvent" name="idEvent" value="<?= $event['idEvent']; ?>" readonly>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event Title</span>
                                </div>
                                <textarea class="form-control" name="eventTitle" id="eventTitle" aria-label="Event Title" value="<?= $event['eventTitle']; ?>"><?= $event['eventTitle']; ?></textarea>
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
                                <textarea class="form-control" name="eventDescription" id="eventDescription" aria-label="Event Description" value="<?= $event['eventDescription']; ?>"><?= $event['eventDescription']; ?></textarea>
                            </div>
                            <?= form_error('eventDescription', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('admin/eventUpdate'); ?>"> 
                    Update Event
                </button>
            </form>
        </div>
    </div>
</div>