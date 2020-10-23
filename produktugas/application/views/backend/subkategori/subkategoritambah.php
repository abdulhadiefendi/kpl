<form action="<?= esc_attr(base_url('storesubkategori')) ?>" method="post">
  <div class="form-group">
    <label for="nama">Sub Kategori</label>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Kategori" name="nama" value="<?= esc_html(set_value('nama')); ?>">
    <small id="namafail" class="form-text text-danger"><?= esc_html(form_error('nama')); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>