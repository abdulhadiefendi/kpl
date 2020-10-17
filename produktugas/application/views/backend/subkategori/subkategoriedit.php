<form action="<?= base_url('updatesubkategori') ?>" method="post">
  <div class="form-group">
    <label for="id">Sub Kategori</label>
    <input type="text" class="form-control" id="id" aria-describedby="idfail" placeholder="Nama Kategori" name="id" value="<?= $d->idSubKategori ?>" hidden>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Kategori" name="nama" value="<?= $d->nmSubKategori ?>">
    <small id="namafail" class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>


