<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID Pegawai</th>
      <th>Nama Lengkap</th>
      <th>Username</th>
      <th>Email</th>
      <th>Level</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($data as $d) { ?>
    <tr>
      <td><?= esc_html($d->idPegawai) ?></td>
      <td><?= esc_html($d->nmLengkap) ?></td>
      <td><?= esc_html($d->username) ?></td>
      <td><?= esc_html($d->email) ?></td>
      <td><?= esc_html($d->level) == 1 ? 'Admin' : 'Manager' ?></td>
      <td class="text-center">
      	<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="<?= esc_url(base_url('editpegawai/'.$d->idPegawai)) ?>" class="btn btn-warning"><i class="far fa-edit"></i></a>
		  <button type="button" data-toggle="modal" data-target="#hapusModal" data-href="<?= esc_url(base_url('hapuspegawai/'.$d->idPegawai)) ?>" class="btn btn-danger btn-hapus"><i class="far fa-trash-alt"></i></button>
		</div>
      </td>
    </tr>
	<?php } ?>
  </tbody>
</table>