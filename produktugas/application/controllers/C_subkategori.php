<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_subkategori extends CI_Controller {
	public $title = 'Sub Kategori';
	public $table = 'tbl_subkategori';

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
		$data['goTo'] = 'tambahsubkategori';
		$this->template->_backend('backend/subkategori/subkategorimain','table',$data);
	}

	public function create(){
		$data['backTo'] = 'subkategori';
		$this->template->_backend('backend/subkategori/subkategoritambah','form',$data);
	}
	public function edit($idSubKategori){
		$where = array('idSubKategori' => $idSubKategori);
		$data['d'] = $this->global->getAll($this->table,$where)->row();
		$data['backTo'] = 'subkategori';
		$this->template->_backend('backend/subkategori/subkategoriedit','form',$data);
	}

	public function store(){
		$this->form_validation->set_rules('nama', 'Sub Kategori', 'required|is_unique[tbl_subkategori.nmSubKategori]');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal ditambahkan!');
            $this->create();
        } 
        if ($this->form_validation->run() == TRUE){
        	$record = array(
                "nmSubKategori" => $this->input->post('nama')
            );
        	$this->global->insert($this->table,$record);
        	$this->session->set_flashdata('sukses','Data berhasil ditambahkan!');
            $this->template->_back();
        }
		
	}

	public function update(){
		$this->form_validation->set_rules('nama', 'Sub Kategori', 'required|is_unique[tbl_subkategori.nmSubKategori]');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->edit($this->input->post('id'));
        }
        if ($this->form_validation->run() == TRUE){
        	$where = array('idSubKategori' => $this->input->post('id'));
        	$record = array(
                "nmSubKategori" => $this->input->post('nama')
            );
        	$this->global->update($this->table,$record,$where);
        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
            $this->template->_back();
        }
	}
	public function delete($idSubKategori){
		$where = array('idSubKategori' => $idSubKategori);
    	$delete = $this->global->delete($this->table,$where);
    	if($delete > 0){
			$this->session->set_flashdata('sukses','Data berhasil dihapus!');
    	}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus!');
    	}
        $this->template->_back();
	}
}
