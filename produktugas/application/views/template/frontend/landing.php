<div class="container">
	<div class="mt-3">
		<form class="form-inline" action="<?= htmlspecialchars(base_url()) ?>" method="post">
		  <div class="form-group">
		    <label for="inputPassword6">Kategori</label>
		    <select name="kategori" id="kategori" class="form-control  mx-sm-3">
		    	<?php foreach ($kategori as $d) { ?>
				<option value="<?= htmlspecialchars($d->idKategori) ?>" <?= $this->input->post('kategori') == $d->idKategori ? 'selected' : ''?>><?= htmlspecialchars($d->nmKategori) ?></option>
		    	<?php } ?>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="inputPassword6">Sub Kategori</label>
		    <select name="subkategori" id="subkategori" class="form-control  mx-sm-3">
		    	<?php foreach ($subkategori as $d) { ?>
				<option value="<?= $d->idSubKategori ?>"  <?= $this->input->post('subkategori') == $d->idSubKategori ? 'selected' : ''?>><?= htmlspecialchars($d->nmSubKategori) ?></option>
		    	<?php } ?>
		    </select>
		  </div>

		  <button class="btn btn-dark" type="submit">Filter</button>
		</form>
	</div>

	<div class="mt-5">
		<div class="row">
			<?php foreach ($data as $d) { ?>
				<div class="col-md-3">
					<div class="card text-center card shadow-lg p-3 mb-5 bg-white rounded">
					  <img src="<?= htmlspecialchars($d->gambar) ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title"><?= htmlspecialchars($d->nmProduk) ?></h5>
					    <p class="card-text"><?= htmlspecialchars($d->harga) ?></p>
					    <a href="<?= htmlspecialchars(base_url('detail/'.$d->idProduk)) ?>" class="btn btn-dark">Detail</a>
					  </div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

    