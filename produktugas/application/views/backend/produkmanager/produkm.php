<h1 class="text-center">Data Produk</h1>
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
      <td><img src="<?= $d->gambar ?>" width="100" alt="" class="img-fluid"></td>
    </tr>
	<?php } ?>
  </tbody>
</table>

<hr>

<h1 class="text-center">Rekap Data Produk</h1>

<hr>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Kategori</th>
      <th>Sub Kategori</th>
      <th>Produk</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
    $row = 1;
    $sub = 1;
    foreach ($rekap as $d) { 
      if($row <= 1){
      ?>
        <td rowspan="<?= $d->jml ?>"><?= $d->nmKategori ?></td>
      <?php
      $row = $d->jml; 
      }else{
        $row--;
      }
      if($sub <= 1){
      ?>
        <td rowspan="<?= $d->sub ?>"><?= $d->nmSubKategori ?></td>
      <?php
      $sub = $d->sub; 
      }else{
        $sub--;
      }
      ?>
        <td><?= $d->nmProduk ?></td>
      </tr>
  <?php } ?>
  </tbody>
</table>