<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID Produk</th>
      <th>Nama Produk</th>
      <th>Kategori</th>
      <th>Sub Kategori</th>
      <th>Warna</th>
      <th>Ukuran</th>
      <th>Harga</th>
      <th>Gambar</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $d) { ?>
    <tr>
      <td><?= $d->idProduk ?></td>
      <td><?= $d->nmProduk ?></td>
      <td><?= $d->nmKategori ?></td>
      <td><?= $d->nmSubKategori ?></td>
      <td><?= $d->warna ?></td>
      <td><?= $d->ukuran ?></td>
      <td><?= $d->harga ?></td>
      <td><img src="<?= $d->gambar ?>" alt="" class="img-fluid"></td>
      <td class="text-center">
      	<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="<?= base_url('editproduk/'.$d->idProduk) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
		  <button type="button" data-toggle="modal" data-target="#hapusModal" data-href="<?= base_url('hapusproduk/'.$d->idProduk) ?>" class="btn btn-danger btn-hapus"><i class="far fa-trash-alt"></i></button>
		</div>
      </td>
    </tr>
	<?php } ?>
  </tbody>
</table>