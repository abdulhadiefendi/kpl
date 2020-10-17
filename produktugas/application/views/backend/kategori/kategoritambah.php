<form action="<?= base_url('storekategori') ?>" method="post">
  <div class="form-group">
    <label for="nama">Kategori</label>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Kategori" name="nama" value="<?= set_value('nama'); ?>">
    <small id="namafail" class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>