<?php
  if($this->session->flashdata('sukses')){
      echo '<div class="alert alert-success" role="alert">
            '. $this->session->flashdata('sukses') .'
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
  } else if($this->session->flashdata('gagal')){
      echo '<div class="alert alert-danger" role="alert">
            '. $this->session->flashdata('gagal') .'
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
  } else {
    echo "";
  }