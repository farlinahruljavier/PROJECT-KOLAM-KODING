<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}
	public function index()
	{
		$recordMhs = $this->model_mahasiswa->getDataMahasiwa();
		$DATA = array('data_mhs'=>$recordMhs);
		$this->load->view('Home.php', $DATA);
	}
	public function edit()
	{
		$recordMhs = $this->model_mahasiswa->getMhsDetail();
		print_r($recordMhs);
		$DATA = array('data_mhs'=>$recordMhs);
		$this->load->view("Form_edit.php", $DATA);
	}
	public function input()
	{
		$this->load->view("Form_input.php");
	}
	public function aksi_insert()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$datainsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		$this->model_mahasiswa->insertDataMhs($datainsert);
		redirect (base_url('Welcome/index'));
	}
}
