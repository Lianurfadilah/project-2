<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//membuat class
class Register extends CI_Controller
{
	 function __construct()
  {
    #code...
    parent::__construct();
}
	function realregister(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_petugas = $this->input->post('nama_petugas');
		$nik_petugas = $this->input->post('nik_petugas');
		$alamat_petugas = $this->input->post('alamat_petugas');
		$umur_petugas = $this->input->post('umur_petugas');
		$type = $this->input->post('type');

		$this->load->model('m_register');
		if($this->m_register->register($username, $password, $nama_petugas, 
			$nik_petugas, $alamat_petugas, $umur_petugas, $type)){
		redirect ('login');
		}else{
			redirect ('login#signup');
		}
	}
}