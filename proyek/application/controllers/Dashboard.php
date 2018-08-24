<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('M_pasien');
    }

	public function index()
	{
		$data['pasien'] = $this->M_pasien->jumlah_pasien();
		$data['content'] = 'admin/dashboard/home';
		$this->load->view('templates/admin/template', $data);
	}

}
