<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_pegawai extends CI_Controller {
	public $title = 'Pegawai';
	public $table = 'tbl_pegawai';

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
		$data['goTo'] = 'tambahpegawai';
		$this->template->_backend('backend/pegawai/pegawaimain','table',$data);
	}

	public function create(){
		$data['backTo'] = 'pegawai';
		$this->template->_backend('backend/pegawai/pegawaitambah','form',$data);
	}



	public function edit($idPegawai){
		$where = array('idPegawai' => $id);
		$data['d'] = $this->global->getAll($this->table,$where)->row();
		$data['backTo'] = 'pegawai';
		$this->template->_backend('backend/pegawai/pegawaiedit','form',$data);
	}

	public function store(){
		$this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[tbl_pegawai.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_pegawai.username]|max_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[8]');
		$this->form_validation->set_rules('level', 'Level', 'required');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('is_unique','%s sudah ada!');
	    $this->form_validation->set_message('max_length','%s melibihi batas!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal ditambahkan!');
            $this->create();
        }
        if ($this->form_validation->run() == TRUE){
        	$record = array(
                "nmLengkap" => $this->input->post('nama'),
                "username" => $this->input->post('username'),
                "email" => $this->input->post('email'),
                "password" => $this->input->post('password'),
                "level" => $this->input->post('level')
            );
        	$this->global->insert($this->table,$record);
        	$this->session->set_flashdata('sukses','Data berhasil ditambahkan!');
            $this->template->_back();
        }
	}

	public function update(){
		$this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[10]');
		$this->form_validation->set_rules('level', 'Level', 'required');

	    $this->form_validation->set_message('required','%s harus diisi!');
	    $this->form_validation->set_message('max_length','%s melibihi batas!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->edit($this->input->post('id'));
        }else{
        	$where = array('idPegawai' => $this->input->post('id'));
        	$record = array(
                "nmLengkap" => $this->input->post('nama'),
                "username" => $this->input->post('username'),
                "email" => $this->input->post('email'),
                "level" => $this->input->post('level')
            );
        	$this->global->update($this->table,$record,$where);
        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
            $this->template->_back();
        }
	}
	public function delete($idPegawai){
		$where = array('idPegawai' => $id);
    	$delete = $this->global->delete($this->table,$where);
    	if($delete > 0){
			$this->session->set_flashdata('sukses','Data berhasil dihapus!');
    	}else{
			$this->session->set_flashdata('gagal','Data gagal dihapus!');
    	}
        $this->template->_back();
	}
}
