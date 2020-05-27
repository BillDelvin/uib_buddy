<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('email/email'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <table id="myTable" class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th style="white-space:nowrap">Event Name</th>
                <th style="white-space:nowrap">Email</th>
                <th style="white-space:nowrap">Subject</th>
                <th style="white-space:nowrap">Message</th>
                <th style="white-space:nowrap">Date</th>
                <th style="white-space:nowrap">Time</th>
            </tr>
        </thead>
        <tbody style="word-break:break-word">
        <?php $i = 1; ?>
            <?php foreach ($emailSent as $em ) { ?>
                <tr>
                    <td data-label="No"><?= $i; ?></td>
                    <td data-label="Event Name"><?= $em["eventTitle"]; ?></td>
                    <td data-label="Event Description"><?= $em["email"]; ?></td>
                    <td data-label="Subject"><?= $em["subject"]; ?></td>
                    <td data-label="Message"><?= $em["message"]; ?></td>
                    <td data-label="Date" style="white-space:nowrap"><?= $em["date"]; ?></td>
                    <td data-label="Time" style="white-space:nowrap"><?= $em["time"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php } ?> 
        </tbody>
    </table>
</div>