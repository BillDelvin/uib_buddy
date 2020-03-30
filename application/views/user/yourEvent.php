<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/	'); ?>img/logo_UIB_White.png" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link font-weight-bold" href="<?= base_url('welcome') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-weight-bold" href="<?= site_url('welcome') ?>">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-weight-bold" href="<?= base_url('user/event'); ?>">Event</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <?php if(!isset($_SESSION['npmUser'])) : ?>
                    <a href="<?= base_url('auth/sign_in'); ?>" class="btn btn-outline-light my-2 my-sm-0" type="submit">Sign in</a>
                <?php else : ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $user['nameMahasiswa'] ." ". $user['npmUser']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if($user['role'] == 1) : ?>
                                    <a class="dropdown-item" href="<?= base_url('admin'); ?>">Dashboard</a>
                                <?php else : ?>
                                    <a class="dropdown-item" href="<?= base_url('user/yourEvent'); ?>">My Event</a>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log Out</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </form>
        </div>
    </nav>

    <div class="container pt-3">
        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($userEvent as $ue ) { ?>
                    <tr>
                        <td data-label="No"><?= $i; ?></td>
                        <td data-label="Event Name"><?= $ue["eventTitle"]; ?></td>
                        <td data-label="Event Date"><?= $ue["eventDate"]; ?></td>
                        <td data-label="Email">
                            <?php if( $ue['status'] == 'interview' ) :?>
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                                    <?= $ue['status']; ?>
                                </button>
                            <?php else : ?>
                                <?= $ue['status']; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Interview Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4 text-right">
                <label>Event Name :</label>
            </div>
            <div class="col-md-8">
                <label>Event Title</label>
            </div>
            <div class="col-md-4 text-right">
                <label>Interview Date :</label>
            </div>
            <div class="col-md-8">
                <label>Kamis , 27 Juni 2019</label>
            </div>
            <div class="col-md-4 text-right">
                <label>Interview Time :</label>
            </div>
            <div class="col-md-8">
                <label>09:30</label>
            </div>
            <div class="col-md-4 text-right">
                <label>Interview Place :</label>
            </div>
            <div class="col-md-8">
                <label>UIB</label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>