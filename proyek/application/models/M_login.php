<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

	/**
	* 
	*/
	class m_login extends CI_Model {
		var $table = 'petugas';
		function __construct(){
			parent::__construct();

		}
		function login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('petugas');

		}
		function ceklevel($username){
			$this->db->where('username', $username);
			return $this->db->get('petugas')->result();
		}
	}
 ?>