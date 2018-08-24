<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//membuat class

class Login extends CI_Controller
{

	function index(){
		$this->load->view('login');
	}
	function reallogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('m_login');
		if($this->m_login->login($username, $password)->num_rows()==1)
		{
			 $data = $this->m_login->ceklevel($username);
			 foreach($data as $result){
			 	$t = $result->type;
			 	redirect($t);
			 }
			//redirect('Admin');

		}else{
			echo "gagal";
		}
	}
	
}
