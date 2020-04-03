<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/interviewSchedule'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Update Interview</div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <?php foreach($interviewData as $interview) {?>
                <?= form_open_multipart('admin/updateInterviewSchedule/'.$interview['idInterview']);?>
                    <!-- event name -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="eventTitle">Event Name</label>
                                </div>
                                <select class="custom-select" id="eventTitle" name="eventTitle" disabled>
                                    <option value="<?= $interview['idEvent']; ?>" selected disabled>
                                        <?= $interview['eventTitle']; ?>
                                    </option>
                                </select>
                                </div>
                                <?= form_error('eventTitle', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- interview time -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Interview Time</span>
                                    </div>
                                    <input type="time" class="form-control text-break" name="interviewTime" id="interviewTime" value="<?= $interview['interviewTime']; ?>" required>
                                </div>
                                <?= form_error('interviewTime', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- interview date -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Interview Date</span>
                                    </div>
                                    <input type="date" class="form-control text-break" name="interviewDate" id="interviewDate" value="<?= $interview['interviewDate']; ?>">
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
                                    <input type="text" class="form-control text-break" name="interviewPlace" id="interviewPlace" value="<?= $interview['interviewPlace']; ?>">
                                </div>
                                <?= form_error('interviewPlace', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" href="<?= base_url('admin/addingInterviewSchedule'); ?>"> 
                    Update Interview Schedule
                    </button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
