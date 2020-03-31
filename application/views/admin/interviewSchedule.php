<div class="container-fluid">
    <div class="text-right pb-3">
        <a href="<?= base_url('admin/addingInterviewSchedule'); ?>"><i class="fas fa-3x fa-plus-circle"></i></a>
    </div>
    <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="white-space:nowrap">Event Name</th>
                    <th style="white-space:nowrap">Interview Date</th>
                    <th style="white-space:nowrap">Interview Time</th>
                    <th style="white-space:nowrap">Interview Place</th>
                    <th style="white-space:nowrap">Action</th>
                </tr>
            </thead>
            <tbody style="word-break : break-word">
                <?php $i = 1; ?>
                <?php foreach( $interviewData as $interview ) { ?>
                    <tr>
                        <td data-label="No"><?= $i; ?></td>
                        <td data-label="Event Name"><?= $interview["eventTitle"]; ?></td>
                        <td data-label="Interview Date"><?= $interview["interviewTime"]; ?></td>
                        <td data-label="Interview Time"><?= $interview["interviewDate"]; ?></td>
                        <td data-label="Interview Place"><?= $interview["interviewPlace"]; ?></td>
                        <td data-label="Action">
                            <a href="" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                            <a href="" class="btn btn-outline-secondary" value=""> <i class="fas fa-edit"></i> </a> 
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>