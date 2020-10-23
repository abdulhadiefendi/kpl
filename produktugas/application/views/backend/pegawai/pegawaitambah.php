<form action="<?= htmlspecialchars(base_url('storepegawai')) ?>" method="post">
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Lengkap" name="nama" value="<?= htmlspecialchars(set_value('nama')); ?>">
    <small id="namafail" class="form-text text-danger"><?= htmlspecialchars(form_error('nama')); ?></small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailfail" placeholder="Email" name="email" value="<?= htmlspecialchars(set_value('email')); ?>">
    <small id="emailfail" class="form-text text-danger"><?= htmlspecialchars(form_error('email')); ?></small>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="usernamefail" placeholder="Username" name="username" value="<?= htmlspecialchars(set_value('username')); ?>">
    <small id="usernamefail" class="form-text text-dark">Maksimal 10 karakter!</small>
    <small id="usernamefail" class="form-text text-danger"><?= htmlspecialchars(form_error('username')); ?></small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="passwordfail" placeholder="Password" name="password" value="<?= htmlspecialchars(set_value('password')); ?>">
    <small id="usernamefail" class="form-text text-dark">Maksimal 8 karakter!</small>
    <small id="passwordfail" class="form-text text-danger"><?= htmlspecialchars(form_error('password')); ?></small>
  </div>
  <div class="form-group">
    <label for="level">Level</label>
    <select name="level" id="level" class="form-control" aria-describedby="levelfail">
    	<option value="" disabled selected>Pilih Level</option>
    	<option value="1" <?= set_value('level') == '1' ? 'selected' : '' ?>>Admin</option>
    	<option value="2" <?= set_value('level') == '2' ? 'selected' : '' ?>>Manager</option>
    </select>
    <small id="levelfail" class="form-text text-danger"><?= htmlspecialchars(form_error('level')); ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>