<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_produkm extends CI_Controller {
	public $title = 'Produk';
	public $table = 'tbl_produk';

	public function __construct(){
	    parent::__construct();
	    $this->load->library('Template');
	    $this->load->model('M_global', 'global');
	    $this->load->model('M_produk', 'produk');
	    date_default_timezone_set("Asia/Jakarta");
	    if ($this->session->userdata('level') != 2) {
            redirect('login');
        }
	}

	public function index(){
		$data['data'] = $this->produk->getAll()->result();
		$data['rekap'] = $this->produk->rekap()->result();
		$this->template->_backend('backend/produkmanager/produkm','table',$data);
	}

	public function grafik(){
		$data['data'] = $this->produk->grafik();
		$this->title = 'Grafik';
		$this->load->view('template/backend/header', $data);
        $this->load->view('template/backend/menu', $data);
        $this->load->view('backend/produkmanager/grafik', $data);
        $this->load->view('template/backend/footer', $data);
	}
}
