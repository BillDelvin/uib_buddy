<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/interviewSchedule'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Interview Schedule</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?= form_open_multipart('admin/addingInterviewSchedule'); ?>
                <!-- <input type="text" value="<?= $idData; ?>" disabled> -->
                <!-- event title -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="eventTitle">Event Name</label>
                            </div>
                            <select class="custom-select" id="eventTitle" name="eventTitle" required>
                                <option selected disabled>Choose...</option>
                                <?php foreach ($eventData as $eventName) { ?>
                                    <option value="<?= $eventName['idEvent']; ?>"><?= $eventName['eventTitle']; ?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <?= form_error('eventTitle', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- interview Time -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Interview Time</span>
                                </div>
                                <input type="time" class="form-control text-break" name="interviewTime" id="interviewTime" value="<?= set_value('interviewTime'); ?>" required>
                            </div>
                            <?= form_error('interviewTime', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- interview  date -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Interview Date</span>
                                </div>
                                <input type="date" class="form-control text-break" name="interviewDate" id="interviewDate" value="<?= set_value('interviewDate'); ?>">
                            </div>
                            <?= form_error('interviewDate', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <!-- interview place -->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Interview Place</span>
                                </div>
                                <input type="text" class="form-control text-break" name="interviewPlace" id="interviewPlace" value="<?= set_value('interviewPlace'); ?>">
                            </div>
                            <?= form_error('interviewPlace', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('admin/addingInterviewSchedule'); ?>"> 
                    Adding Interview Schedule
                </button>
            </form>
        </div>
    </div>
</div>