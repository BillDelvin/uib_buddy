<div class="container-fluid">
    <div class="text-left pb-3">
        <a href="<?= base_url('admin/event'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="table-responsive pb-3"> 
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
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
            <tbody style="word-break: break-word">
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
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?= base_url('admin/pendingEventMember/'.$b['idRegistration'].'/'.$b['idEvent']); ?>">pending</a>
                                    <a class="dropdown-item" href="<?= base_url('admin/interviewEventMember/'.$b['idRegistration'].'/'.$b['idEvent']); ?>">interview process</a>
                                    <a class="dropdown-item" href="<?= base_url('admin/acceptEventMember/'.$b['idRegistration'].'/'.$b['idEvent']); ?>">Accept</a>
                                    <a class="dropdown-item" href="<?= site_url('admin/declineEventMember/'.$b['idRegistration'].'/'.$b['idEvent']); ?>">Decline</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>