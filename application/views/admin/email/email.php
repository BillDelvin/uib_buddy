<div class="container-fluid">
    <div class="text-right pb-3">
        <a href="<?= base_url('email/emailSent'); ?>"><i class="fas fa-3x fa-paper-plane"></i></a>
    </div>
    <table id="myTable" class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th style="white-space:nowrap" >Event Name</th>
                <th>Event Description</th>
                <th style="white-space:nowrap">Action</th>
            </tr>
        </thead>
        <tbody style="word-break:break-word">
        <?php $i = 1; ?>
            <?php foreach ($eventName as $event ) { ?>
                <tr>
                    <td data-label="No"><?= $i; ?></td>
                    <td data-label="Event Name"><?= $event["eventTitle"]; ?></td>
                    <td data-label="Event Description"><?= $event["eventDescription"]; ?></td>
                    <td data-label="Member" class="text-center" style="white-space:nowrap">  
                        <a href="<?= site_url('email/emailForm/'.$event['idEvent']); ?>" class="btn btn-outline-secondary" value="<?= $event['idEvent']; ?>">
                            <i class="fas fa-envelope"></i> Send Email
                        </a> 
                    </td>
                </tr>
            <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>