<div class="container-fluid">
    <div class=" col-md-6 text-left pb-3">
        <a href="<?= base_url('admin/email'); ?>"><i class="fas fa-3x fa-arrow-left"></i></a>
    </div>
    <div class="row">
        <div class="col-md-4">
        <?= $this->session->flashdata('email_sent'); ?>
        <?= form_open_multipart('email/emailForm/'.$idEvent); ?>
                <div class="text-right">
                    <button type="submit" class="btn btn-outline-secondary">Send</button>
                </div>
                <label for="subject">Subject : </label>
                <input type="text" class="form-control" name="subject" id="subject" required/>
                <?= form_error('subject', '<small class="text-danger">', '</small>'); ?>
                <br/>
                <label for="message">Message : </label>
                <textarea type="text" class="form-control" name="message" id="message" required></textarea>
                <?= form_error('message', '<small class="text-danger">', '</small>'); ?>
            </form>
        </div>
        <div class="col-md-8">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody style="word-break : break-word">
                    <?php $i = 1; ?>
                    <?php foreach ($buddyEmail as $be) { ?>
                        <tr>
                            <th data-label="No"><?= $i; ?></th>
                            <td data-label="Name"><?= $be["nameMahasiswa"]; ?></td>
                            <td data-label="Email"><?= $be["email"]; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>