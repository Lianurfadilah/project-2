<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

	/**
	* 
	*/
	class m_register extends CI_Model {
		function __construct(){
			parent::__construct();

		}
		function register($username, $password, $nama_petugas, $nik_petugas, $alamat_petugas, $umur_petugas, $type){
			$data = array(
				
        		'username'  	=> $username,
				'password'  	=> $password,
				'nama_petugas'	=> $nama_petugas,
				'nik_petugas'	=> $nik_petugas,
				'alamat_petugas'=> $alamat_petugas,
				'umur_petugas'	=> $umur_petugas,
				'type'			=> $type
			);

			return $this->db->insert('petugas', $data);
		}
	}

 ?>