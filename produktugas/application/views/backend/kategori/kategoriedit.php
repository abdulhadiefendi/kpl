<form action="<?= esc_attr(base_url('updatekategori')) ?>" method="post">
  <div class="form-group">
    <label for="id">Kategori</label>
    <input type="text" class="form-control" id="id" aria-describedby="idfail" placeholder="Nama Kategori" name="id" value="<?= esc_html($d->idKategori) ?>" hidden>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Kategori" name="nama" value="<?= esc_html($d->nmKategori) ?>">
    <small id="namafail" class="form-text text-danger"><?= esc_html(form_error('nama')); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>