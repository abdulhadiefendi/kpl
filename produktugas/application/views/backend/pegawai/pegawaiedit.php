<form action="<?= base_url('updatepegawai') ?>" method="post">
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" id="id" aria-describedby="idfail" placeholder="Nama Kategori" name="id" value="<?= $d->idPegawai ?>" hidden>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Lengkap" name="nama" value="<?= $d->nmLengkap ?>">
    <small id="namafail" class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailfail" placeholder="Email" name="email" value="<?= $d->email ?>">
    <small id="emailfail" class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="usernamefail" placeholder="Username" name="username" value="<?= $d->username ?>">
    <small id="usernamefail" class="form-text text-dark">Maksimal 10 karakter!</small>
    <small id="usernamefail" class="form-text text-danger"><?= form_error('username'); ?></small>
  </div>
  <div class="form-group">
    <label for="level">Level</label>
    <select name="level" id="level" class="form-control" aria-describedby="levelfail">
    	<option value="" disabled>Pilih Level</option>
    	<option value="1" <?= $d->level == '1' ? 'selected' : '' ?>>Admin</option>
    	<option value="2" <?= $d->level == '2' ? 'selected' : '' ?>>Manager</option>
    </select>
    <small id="levelfail" class="form-text text-danger"><?= form_error('level'); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>