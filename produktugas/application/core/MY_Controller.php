<?php

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function nama_kamu($nama){
		return "Nama kamu adalah ". htmlspecialchars($nama) ." !";
	}
}