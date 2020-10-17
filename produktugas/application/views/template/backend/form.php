<!-- Begin Page Content -->
<div class="container-fluid">
    <?php $this->load->view('template/backend/alert'); ?>
  	<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $this->title ?></h6>
            </div>
            <div class="card-body">
              <div class="float-right">
              <a href="<?= base_url($backTo) ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-angle-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
              </div>
              <div class="clearfix"></div>
              <hr>
         