<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/event'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <table id="example" class="display compact" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Url Video</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($buddy as $b ) { ?>
                <tr>
                    <td data-label="No"><?= $i; ?></td>
                    <td data-label="Event Name"><?= $b["npmUser"]; ?></td>
                    <td data-label="Event Description"><?= $b["nameMahasiswa"]; ?></td>
                    <td data-label="Event Description"><?= $b["image"]; ?></td>
                    <td data-label="Event Description"><?= $b["email"]; ?></td>
                    <td data-label="Event Description"><?= $b["noPhoneMahasiswa"]; ?></td>
                    <td data-label="Event Description"> <a href=""><?= $b["urlVideo"]; ?></a> </td>
                    <td data-label="Event Description"><?= $b["status"]; ?></td>
                    <td data-label="Action"> 
                        <a href="<?= site_url('admin/eventMember/'.$b['npmUser']); ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>