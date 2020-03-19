<div class="container-fluid">
    <h3 class="text-center">EVENT</h3>
    <div class="table-responsive pt-3"> 
        <table id="myTable" class="table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Member</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($eventBuddy as $event ) { ?>
                    <tr>
                        <td data-label="No"><?= $i; ?></td>
                        <td data-label="Event Name"><?= $event["eventTitle"]; ?></td>
                        <td data-label="Event Description"><?= $event["eventDescription"]; ?></td>
                        <td data-label="Member" class="text-center">  
                            <a href="<?= site_url('admin/eventMember/'.$event['idEvent']); ?>" class="btn btn-outline-secondary" value="<?= $event['idEvent']; ?>"><i class="fas fa-users"></i></a> 
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>