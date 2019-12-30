<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('Model_mhs');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("LoginMahasiswa"));
		} 

	}

	public function index(){
		$data['title'] = "Dashboard mahasiswa | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('mahasiswa/head_mhs',$data);
		$this->load->view('mahasiswa/dashboard_mhs');
		$this->load->view('mahasiswa/foot_mhs');

	}
	
}
