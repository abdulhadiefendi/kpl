<div class="container">
	<div class="mt-3">
		<div class="card shadow-lg p-3 mb-5 bg-white rounded">
		  <div class="card-body">
		    <div class="row">
		    	<div class="col-md-3">
		    		<img src="<?= htmlspecialchars($data->gambar) ?>" alt="<?= $data->gambar ?>" class="img-fluid">
		    	</div>
		    	<div class="col-md-8">
		    		<dl class="row">
					  <dt class="col-sm-3">Nama Produk</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->nmProduk) ?></dd>

					  <dt class="col-sm-3">Harga</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->harga) ?></dd>

					  <dt class="col-sm-3">Warna</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->warna) ?></dd>

					  <dt class="col-sm-3">Kategori</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->nmKategori) ?></dd>

					  <dt class="col-sm-3">Sub Kategori</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->nmSubKategori) ?></dd>

					  <dt class="col-sm-3">Ukuran</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->ukuran) ?></dd>

					  <dt class="col-sm-3">Deskripsi</dt>
					  <dd class="col-sm-9"><?= htmlspecialchars($data->deskripsi) ?></dd>
					</dl>
		    	</div>
		    </div>
		  </div>
		</div>
	</div>
</div>

    