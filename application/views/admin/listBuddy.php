<div class="container-fluid">
    <table class="table-striped">
        <thead>
            <tr>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">NPM</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buddy as $b) { ?>
                <tr>
                    <td data-label="Picture"><img src="<?= base_url('assets/img/' . $b['image']); ?>" alt="<?= $b["name"]; ?>"></td>
                    <td data-label="Name"><?= $b["name"]; ?></td>
                    <td data-label="NPM"><?= $b['npm']; ?></td>
                    <td data-label="Email"><?= $b['email']; ?></td>
                    <td data-label="Phone Number"><?= $b['phone_number']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>