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
        <h6 class="m-0 font-weight-bold text-primary"><?= esc_html($this->title) ?></h6>
      </div>
      <div class="card-body">
        <form action="<?= esc_attr(base_url('actprofile')) ?>" method="post">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="id" aria-describedby="idfail" placeholder="Nama Kategori" name="id" value="<?= esc_html($d->idPegawai) ?>" hidden>
            <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Lengkap" name="nama" value="<?= esc_html($d->nmLengkap) ?>">
            <small id="namafail" class="form-text text-danger"><?= esc_html(form_error('nama')); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
      </div>
    </div>
</div>