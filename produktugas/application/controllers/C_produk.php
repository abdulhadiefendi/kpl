<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_produk extends CI_Controller {
	public $title = 'Produk';
	public $table = 'tbl_produk';

	public function __construct(){
	    parent::__construct();
	    $this->load->library('Template');
	    $this->load->model('M_global', 'global');
	    $this->load->model('M_produk', 'produk');
	    date_default_timezone_set("Asia/Jakarta");
	    if ($this->session->userdata('level') != 1) {
            redirect('login');
        }
	}

	public function index(){
		$data['data'] = $this->produk->getAll()->result();
		$data['goTo'] = 'tambahproduk';
		$this->template->_backend('backend/produk/produkmain','table',$data);
	}

	public function create(){
		$data['backTo'] = 'produk';
		$data['kategori'] = $this->global->getAll('tbl_kategori')->result();
		$data['subkategori'] = $this->global->getAll('tbl_subkategori')->result();
		$this->template->_backend('backend/produk/produktambah','form',$data);
	}

	public function edit($idProduk){
		$where 					= array('idProduk' => $id);
		$data['d'] 				= $this->global->getAll($this->table,$where)->row();
		$data['backTo'] 		= 'produk';
		$data['kategori'] 		= $this->global->getAll('tbl_kategori')->result();
		$data['subkategori'] 	= $this->global->getAll('tbl_subkategori')->result();
		$this->template->_backend('backend/produk/produkedit','form',$data);
	}

	public function store(){
		$namaGambar = $_FILES['gambar']['name'];
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required|is_unique[tbl_produk.nmProduk]');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('subkategori', 'Sub Kategori', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if (empty($namaGambar)
		{
		    $this->form_validation->set_rules('gambar', 'Gambar', 'required');
		}
	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');
	    $this->form_validation->set_message('numeric','%s harus angka!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal ditambahkan!');
            $this->create();
        }
        if ($this->form_validation->run() == TRUE{
        	$upload = $this->template->_upload();
        	if($upload['result'] == "success"){ 
		        $record = array(
	                "nmProduk" => $this->input->post('nama'),
	                "idKategori" => $this->input->post('kategori'),
	                "idSubKategori" => $this->input->post('subkategori'),
	                "warna" => $this->input->post('warna'),
	                "ukuran" => $this->input->post('ukuran'),
	                "harga" => $this->input->post('harga'),
	                "deskripsi" => $this->input->post('deskripsi'),
	                "last_update" => date("Y-m-d H:i:s"),
	                "idPegawai" => $this->session->userdata('id'),
	                "gambar" => base_url('assets/images/produk/'.$upload['file']['file_name'])
	            );
	        	$this->global->insert($this->table,$record);
	        	$this->session->set_flashdata('sukses','Data berhasil ditambahkan!');
	            $this->template->_back(); 
		    }
		    if($upload['result'] != "success"){ 
		        $this->session->set_flashdata('gagal',$upload['error']);
	            $this->template->_back();  
		    }
        }
	}

	public function update(){
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('subkategori', 'Sub Kategori', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		
	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('numeric','%s harus angka!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->edit($this->input->post('id'));
        }
        if ($this->form_validation->run() == TRUE){
        	$where = array('idProduk' => $this->input->post('id'));
        	$upload = $this->template->_upload();
        	if($upload['result'] == "success"){ 
		        $record = array(
	                "nmProduk" => $this->input->post('nama'),
	                "idKategori" => $this->input->post('kategori'),
	                "idSubKategori" => $this->input->post('subkategori'),
	                "warna" => $this->input->post('warna'),
	                "ukuran" => $this->input->post('ukuran'),
	                "harga" => $this->input->post('harga'),
	                "deskripsi" => $this->input->post('deskripsi'),
	                "last_update" => date("Y-m-d H:i:s"),
	                "idPegawai" => $this->session->userdata('id'),
	                "gambar" => base_url('assets/images/produk/'.$upload['file']['file_name'])
	            );
		    }
		    if($upload['result'] != "success"){  
		        $record = array(
	                "nmProduk" => $this->input->post('nama'),
	                "idKategori" => $this->input->post('kategori'),
	                "idSubKategori" => $this->input->post('subkategori'),
	                "warna" => $this->input->post('warna'),
	                "ukuran" => $this->input->post('ukuran'),
	                "harga" => $this->input->post('harga'),
	                "deskripsi" => $this->input->post('deskripsi'),
	                "last_update" => date("Y-m-d H:i:s"),
	                "idPegawai" => $this->session->userdata('id')
	            ); 
		    }
		    $this->global->update($this->table,$record,$where);
        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
            $this->template->_back();
        }
	}
	public function delete($idProduk){
		$where = array('idProduk' => $id);
    	$delete = $this->global->delete($this->table,$where);
    	if($delete > 0){
			$this->session->set_flashdata('sukses','Data berhasil dihapus!');
    	}
    	if($delete <= 0){
			$this->session->set_flashdata('gagal','Data gagal dihapus!');
    	}
        $this->template->_back();
	}
}
