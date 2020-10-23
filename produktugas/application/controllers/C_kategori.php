<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_kategori extends CI_Controller {
	public $title = 'Kategori';
	public $table = 'tbl_kategori';

	public function __construct(){
	    parent::__construct();
	    $this->load->library('Template');
	    $this->load->model('M_global', 'global');
	    if ($this->session->userdata('level') != 1) {
            redirect('login');
        }
	}

	public function index(){
		$data['data'] = $this->global->getAll($this->table)->result();
		$data['goTo'] = 'tambahkategori';
		$this->template->_backend('backend/kategori/kategorimain','table',$data);
	}

	public function create(){
		$data['backTo'] = 'kategori';
		$this->template->_backend('backend/kategori/kategoritambah','form',$data);
	}

	public function edit($idKategori){
		$where = array('idKategori' => $idKategori);
		$data['d'] = $this->global->getAll($this->table,$where)->row();
		$data['backTo'] = 'kategori';
		$this->template->_backend('backend/kategori/kategoriedit','form',$data);
	}

	public function store(){
		$this->form_validation->set_rules('nama', 'Kategori', 'required|is_unique[tbl_kategori.nmKategori]');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal ditambahkan!');
            $this->create();
        }
        if ($this->form_validation->run() == TRUE){
        	$record = array(
                "nmKategori" => $this->input->post('nama')
            );
        	$this->global->insert($this->table,$record);
        	$this->session->set_flashdata('sukses','Data berhasil ditambahkan!');
            $this->template->_back();
        }
		
	}

	public function update(){
		$this->form_validation->set_rules('nama', 'Kategori', 'required|is_unique[tbl_kategori.nmKategori]');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->edit($this->input->post('id'));
        }else{
        	$where = array('idKategori' => $this->input->post('id'));
        	$record = array(
                "nmKategori" => $this->input->post('nama')
            );
        	$this->global->update($this->table,$record,$where);
        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
            $this->template->_back();
        }
	}
	public function delete($idKategori){
		$where = array('idKategori' => $idKategori);
    	$delete = $this->global->delete($this->table,$where);
    	if($delete > 0){
			$this->session->set_flashdata('sukses','Data berhasil dihapus!');
    	}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus!');
    	}
        $this->template->_back();
	}
}
