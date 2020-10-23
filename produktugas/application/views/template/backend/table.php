<!-- Begin Page Content -->
<div class="container-fluid">
    <?php $this->load->view('template/backend/alert'); ?>
  	<!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= esc_html($this->title) ?></h6>
      </div>
      <div class="card-body">
      	<div class="float-right">
      	<?php if($this->session->userdata('level') == 1){?>
          <a href="<?= esc_url(base_url($goTo)) ?>" class="btn btn-success btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah</span>
          </a>
        <?php } ?>
      	</div>
      	<div class="clearfix"></div>
        <hr>

        <div class="table-responsive">
