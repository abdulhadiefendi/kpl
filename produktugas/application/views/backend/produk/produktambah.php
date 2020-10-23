<form action="<?= htmlspecialchars(base_url('storeproduk')) ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="kategori">Nama Produk</label>
    <input type="text" class="form-control" id="nama" aria-describedby="namafail" placeholder="Nama Kategori" name="nama" value="<?= htmlspecialchars(set_value('nama')); ?>">
    <small id="namafail" class="form-text text-danger"><?= htmlspecialchars(form_error('nama')); ?></small>
  </div>

  <div class="form-group">
    <label for="kategori">Kategori</label>
    <select name="kategori" id="kategori" class="form-control" aria-describedby="kategorifail">
    	<option value="" disabled>Pilih Kategori</option>
    	<?php foreach($kategori as $l){?>
    		<option value="<?= htmlspecialchars($l->idKategori) ?>" <?= form_error('kategori') == $l->idKategori ? 'selected' : '' ?>><?= $l->nmKategori ?></option>
    	<?php } ?>
    </select>
    <small id="kategorifail" class="form-text text-danger"><?= htmlspecialchars(form_error('kategori')); ?></small>
  </div>

  <div class="form-group">
    <label for="subkategori">Sub Kategori</label>
    <select name="subkategori" id="subkategori" class="form-control" aria-describedby="subkategorifail">
    	<option value="" disabled>Pilih Sub Kategori</option>
    	<?php foreach($subkategori as $l){?>
    		<option value="<?= htmlspecialchars($l->idSubKategori) ?>" <?= form_error('subkategori') == $l->idSubKategori ? 'selected' : '' ?>><?= $l->nmSubKategori ?></option>
    	<?php } ?>
    </select>
    <small id="subkategorifail" class="form-text text-danger"><?= htmlspecialchars(form_error('subkategori')); ?></small>
  </div>
	
 <div class="row">
 	 <div class="form-group col-md-4">
	    <label for="warna">Warna</label>
	    <input type="text" class="form-control" id="warna" aria-describedby="warnafail" placeholder="Warna" name="warna" value="<?= htmlspecialchars(set_value('warna')); ?>">
	    <small id="warnafail" class="form-text text-danger"><?= htmlspecialchars(form_error('warna')); ?></small>
	  </div>
	  <div class="form-group col-md-4">
	    <label for="ukuran">Ukuran</label>
	    <input type="text" class="form-control" id="ukuran" aria-describedby="ukuranfail" placeholder="Ukuran" name="ukuran" value="<?= htmlspecialchars(set_value('ukuran')); ?>">
	    <small id="ukuranfail" class="form-text text-danger"><?= htmlspecialchars(form_error('ukuran')); ?></small>
	  </div>
	  <div class="form-group col-md-4">
	    <label for="harga">Harga</label>
	    <input type="number" class="form-control" id="harga" aria-describedby="hargafail" placeholder="Harga" name="harga" value="<?= htmlspecialchars(set_value('harga')); ?>">
	    <small id="hargafail" class="form-text text-danger"><?= htmlspecialchars(form_error('harga')); ?></small>
	  </div>
 </div>

 <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" aria-describedby="gambarfail" placeholder="gambar" name="gambar" value="<?= htmlspecialchars(set_value('gambar')); ?>">
    <small id="gambarfail" class="form-text text-danger"><?= htmlspecialchars(form_error('gambar')); ?></small>
  </div>

  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" cols="30" rows="7" class="form-control" aria-describedby="deskripsifail" placeholder="Deskripsi"><?= htmlspecialchars(set_value('deskripsi')); ?></textarea>
    <small id="deskripsifail" class="form-text text-danger"><?= htmlspecialchars(form_error('deskripsi')); ?></small>
  </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>