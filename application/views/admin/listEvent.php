<div class="container-fluid">
    <div class="text-right pb-3">
        <a href="<?= base_url('admin/eventRegistration'); ?>"><i class="fas fa-3x fa-plus-circle"></i></a>
    </div>
    <div>
        <!-- new table -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($eventBuddy as $event ) { ?>
                    <tr>
                        <td data-label="No"><?= $i; ?></td>
                        <td data-label="Event Name"><?= $event["eventTitle"]; ?></td>
                        <td data-label="Event Description"><?= $event["eventDescription"]; ?></td>
                        <td data-label="Action"> 
                            <a href="<?= site_url('admin/eventDelete/'.$event['idEvent']); ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a> || 
                            <a href="<?= site_url('admin/eventUpdate/'.$event['idEvent']); ?>" class="btn btn-outline-secondary" value="<?= $event['idEvent']; ?>"> <i class="fas fa-edit"></i> </a> 
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>