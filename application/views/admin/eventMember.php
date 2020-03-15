<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/event'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="table-responsive"> 
        <table id="myTabel" class="display" style="width:100%">
            <thead>
                <tr>
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
                <?php foreach ($buddy as $b ) { ?>
                    <tr>
                        <td data-label="NPM"><?= $b["npmUser"]; ?></td>
                        <td data-label="Name"><?= $b["nameMahasiswa"]; ?></td>
                        <td data-label="Photo">
                            <img width="100px" src="<?= base_url('assets/'); ?>buddy_img/<?= $b["image"]; ?>">
                        </td>
                        <td data-label="Email"><?= $b["email"]; ?></td>
                        <td data-label="Phone Number"><?= $b["noPhoneMahasiswa"]; ?></td>
                        <td data-label="Url Video"> <a href="<?= $b["urlVideo"]; ?>"><?= $b["urlVideo"]; ?></a> </td>
                        <td data-label="Status"><?= $b["status"]; ?></td>
                        <td data-label="Action"> 
                            <a href="<?= site_url('admin/eventMember/'.$b['npmUser']); ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>