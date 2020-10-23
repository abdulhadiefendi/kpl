<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID Sub Kategori</th>
      <th>Sub Kategori</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $d) { ?>
    <tr>
      <td><?= esc_html($d->idSubKategori) ?></td>
      <td><?= esc_html($d->nmSubKategori) ?></td>
      <td class="text-center">
      	<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="<?= esc_url(base_url('editsubkategori/'.$d->idSubKategori)) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
		  <button type="button" data-toggle="modal" data-target="#hapusModal" data-href="<?= esc_url(base_url('hapussubkategori/'.$d->idSubKategori)) ?>" class="btn btn-danger btn-hapus"><i class="far fa-trash-alt"></i></button>
		</div>
      </td>
    </tr>
	<?php } ?>
  </tbody>
</table>