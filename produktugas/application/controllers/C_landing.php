<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_landing extends CI_Controller {
	public $title = 'Produk';
	public $table = 'tbl_produk';

	public function __construct(){
	    parent::__construct();
	    $this->load->library('Template');
	    $this->load->model('M_produk', 'produk');
	    $this->load->model('M_global', 'global');
	}

	public function index(){
		$data['kategori'] = $this->global->getAll('tbl_kategori')->result();
		$data['subkategori'] = $this->global->getAll('tbl_subkategori')->result();
		if($this->input->post('kategori')){
			$where = array(
				'k.idKategori' => $this->input->post('kategori'),
				'sk.idSubKategori' => $this->input->post('subkategori')
			);
			$data['data'] = $this->produk->getAll($where,'')->result();
		}else if($this->input->post('cari')){
			$where = array(
				'p.nmProduk' => $this->input->post('cari')
			);
			$data['data'] = $this->produk->getAll('',$where)->result();
		}else{
			$data['data'] = $this->produk->getAll()->result();
		}
		$this->load->view('template/frontend/head',$data);
		$this->load->view('template/frontend/landing',$data);
		$this->load->view('template/frontend/footer',$data);
	}
	public function detail($id){
		$where = array(
			'p.idProduk' => $id
		);
		$data['data'] = $this->produk->getAll($where)->row();
		$this->load->view('template/frontend/head',$data);
		$this->load->view('template/frontend/detail',$data);
		$this->load->view('template/frontend/footer',$data);
	}
}
