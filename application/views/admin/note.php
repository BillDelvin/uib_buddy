<div class="container-fluid">
    <div class="text-right pb-3">
        <a href="<?= base_url('admin/addNote'); ?>"><i class="fas fa-3x fa-plus-circle"></i></a>
    </div>
    <div class="row">
        <?php foreach ($note as $n ) { ?>
            <div class="col-md-4 pb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $n['noteTitle'] ?></h5>
                        <p class="card-text"><?= $n['noteDescription'] ?></p>
                        <a href="<?= base_url('admin/deleteNote/'.$n['idNote']); ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        <a href="<?= base_url('admin/updateNote/'.$n['idNote']); ?>" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>