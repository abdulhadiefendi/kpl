<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID Kategori</th>
      <th>Kategori</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $d) { ?>
    <tr>
      <td><?= esc_html($d->idKategori) ?></td>
      <td><?= esc_html($d->nmKategori) ?></td>
      <td class="text-center">
      	<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="<?= esc_url(base_url('editkategori/'.$d->idKategori)) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
		  <button type="button" data-toggle="modal" data-target="#hapusModal" data-href="<?= esc_url(base_url('hapuskategori/'.$d->idKategori)) ?>" class="btn btn-danger btn-hapus"><i class="far fa-trash-alt"></i></button>
		</div>
      </td>
    </tr>
	<?php } ?>
  </tbody>
</table>