<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('M_obat');
    }

    public function index()
	{
		$data['obat'] 	= $this->M_obat->listing();
		$data['content'] 	= 'admin/obat/data_obat';
		$this->load->view('templates/admin/template', $data);
	}

	public function form($id_obat = null){
		$data['content'] 	= 'admin/obat/form';

			if($id_obat == null){
				$data['form_type'] = 'INPUT';
				$data['obat'] = null;
				$this->load->view('templates/admin/template', $data);
			}else{
				$data['form_type'] = 'EDIT';
				$data['obat'] = $this->M_obat->_Get_Obat($id_obat);
				if($data['obat'] == null){
					redirect(base_url('admin/dashboard'));
				}else{
					$this->load->view('templates/admin/template', $data);
				}
			}
	}

	public function save_obat()
	{	
		if($this->input->post('form_type') == "INPUT"){;
			$id_obat = $this->M_obat->_Create_Obat();
			$this->M_obat->Id_Register($id_obat);
			redirect(base_url('admin/obat'));
			
		}else if($this->input->post('form_type') == "EDIT"){
			$id_obat = $this->input->post('id_obat');
			$this->M_obat->_Update_Obat($id_obat);
			redirect(base_url('admin/obat'));
		}
	}

	// Delete Obat
	public function delete($id_obat){
		$data = array('id_obat' => $id_obat);
		$this->M_obat->delete($data);
		redirect(base_url('admin/obat'));
	}
}