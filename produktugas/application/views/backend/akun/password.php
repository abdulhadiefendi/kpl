<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
  if($this->session->flashdata('sukses')){
      return '<div class="alert alert-success" role="alert">
            '. $this->session->flashdata('sukses') .'
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
  } else if($this->session->flashdata('gagal')){
      return '<div class="alert alert-danger" role="alert">
            '. $this->session->flashdata('gagal') .'
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
  } else {
    return "";
  }
  ?>
  	<!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $this->title ?></h6>
      </div>
      <div class="card-body">
        <form action="<?= base_url('actpassword') ?>" method="post">
          <div class="form-group">
            <label for="password">Password Lama</label>
            <input type="password" class="form-control" id="password" aria-describedby="passwordfail" placeholder="Password Lama" name="password">
            <small id="passwordfail" class="form-text text-danger"><?= form_error('password'); ?></small>
          </div>

          <div class="form-group">
            <label for="passwordb">Password Baru</label>
            <input type="password" class="form-control" id="passwordb" aria-describedby="passwordbfail" placeholder="Password Baru" name="passwordb">
            <small id="passwordbfail" class="form-text text-danger"><?= form_error('passwordb'); ?></small>
          </div>

          <div class="form-group">
            <label for="passwordbl">Ulangi Password Baru</label>
            <input type="password" class="form-control" id="passwordbl" aria-describedby="passwordblfail" placeholder="Ulangi Password" name="passwordbl">
            <small id="passwordblfail" class="form-text text-danger"><?= form_error('passwordbl'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
      </div>
    </div>
</div>