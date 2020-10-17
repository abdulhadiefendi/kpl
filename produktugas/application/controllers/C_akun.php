<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_akun extends CI_Controller {
	public $title = 'Akun';
	public $table = 'tbl_pegawai';

	public function __construct(){
	    parent::__construct();
	    $this->load->library('Template');
	    $this->load->model('M_global', 'global');
	    if ($this->session->userdata('level') != 1 && $this->session->userdata('level') == 1) {
            redirect('login');
        }else if ($this->session->userdata('level') != 2 && $this->session->userdata('level') == 2) {
            redirect('login');
        }

	    // echo $this->session->userdata('level');
	}

	public function bio(){
		$where = array('idPegawai' => $this->session->userdata('id'));
		$data['d'] = $this->global->getAll($this->table,$where)->row();
		$this->title = 'Biodata';
		$this->load->view('template/backend/header',$data);
        $this->load->view('template/backend/menu',$data);
        $this->load->view('backend/akun/biodata',$data);
        $this->load->view('template/backend/footer',$data);
	}

	public function password(){
		$this->title = 'Password';
		$this->load->view('template/backend/header');
        $this->load->view('template/backend/menu');
        $this->load->view('backend/akun/password');
        $this->load->view('template/backend/footer');
	}


	public function updatebio(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		$this->form_validation->set_message('required','%s harus diisi!');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->bio();
        }else{
        	$where = array('idPegawai' => $this->session->userdata('id'));
        	$record = array(
                "nmLengkap" => $this->input->post('nama')
            );
        	$this->global->update($this->table,$record,$where);
        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
        	$this->session->set_userdata('nama',$this->input->post('nama'));
            $this->template->_back();
        }
	}

	public function updatepassword(){
		$this->form_validation->set_rules('password', 'Password Lama', 'required');
		$this->form_validation->set_rules('passwordb', 'Password Baru', 'required');
		$this->form_validation->set_rules('passwordbl', 'Ulangi Password Baru', 'required|matches[passwordb]');

		$this->form_validation->set_message('required','%s harus diisi!');
		$this->form_validation->set_message('matches','%s tidak sama!');


		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('gagal','Data gagal diubah!');
            $this->password();
        }else{
        	$where = array(
        		'idPegawai' => $this->session->userdata('id'),
        		'password' => $this->input->post('password')
        	);
        	$cek = $this->global->getAll($this->table,$where)->num_rows();
        	
        	if($cek > 0){
        		$record = array(
	                "password" => md5($this->input->post('passwordb'))
	            );
	        	$this->global->update($this->table,$record,$where);
	        	$this->session->set_flashdata('sukses','Data berhasil diubah!');
	            $this->template->_back();
        	}else{
				$this->session->set_flashdata('gagal','Password lama tidak cocok!');
	            $this->template->_back();
        	}
        }
	}

}
