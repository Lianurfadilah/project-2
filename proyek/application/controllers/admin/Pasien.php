<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('M_pasien');
    }

    public function index()
	{
		$data['pasien'] 	= $this->M_pasien->listing();
		$data['content'] 	= 'admin/pasien/data_pasien';
		$this->load->view('templates/admin/template', $data);
	}

	public function form($id_pasien = null){
		$data['content'] 	= 'admin/pasien/form';

			if($id_pasien == null){
				$data['form_type'] = 'INPUT';
				$data['pasien'] = null;
				$this->load->view('templates/admin/template', $data);
			}else{
				$data['form_type'] = 'EDIT';
				$data['pasien'] = $this->M_pasien->_Get_Pasien($id_pasien);
				if($data['pasien'] == null){
					redirect(base_url('admin/dashboard'));
				}else{
					$this->load->view('templates/admin/template', $data);
				}
			}
	}

	public function save_pasien()
	{	
		if($this->input->post('form_type') == "INPUT"){;
			$id_pasien = $this->M_pasien->_Create_Pasien();
			$this->M_pasien->Id_Register($id_pasien);
			redirect(base_url('admin/pasien'));
			
		}else if($this->input->post('form_type') == "EDIT"){
			$id_pasien = $this->input->post('id_pasien');
			$this->M_pasien->_Update_Pasien($id_pasien);
			redirect(base_url('admin/pasien'));
		}
	}

	// Delete Pasien
	public function delete($id_pasien){
		$data = array('id_pasien' => $id_pasien);
		$this->M_pasien->delete($data);
		redirect(base_url('admin/pasien'));
	}
}