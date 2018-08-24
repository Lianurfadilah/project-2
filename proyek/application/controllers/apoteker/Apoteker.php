<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoteker extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('M_apoteker');
    }

    public function index2()
	{
		$data['apoteker'] 	= $this->M_apoteker->listing();
		$data['content'] 	= 'apoteker/obat/stok_obat';
		$this->load->view('templates/apoteker/template', $data);
	}

	public function form($id_obat = null){
		$data['content'] 	= 'obat/form';

			if($id_obat == null){
				$data['form_type'] = 'INPUT';
				$data['stok_obat'] = null;
				$this->load->view('templates/apoteker/template', $data);
			}else{
				$data['form_type'] = 'EDIT';
				$data['stok_obat'] = $this->M_apoteker->_Get_obat($id_obat);
				if($data['stok_obat'] == null){
					redirect(base_url('apoteker/dashboard'));
				}else{
					$this->load->view('templates/apoteker/template', $data);
				}
			}
	}

	public function save_obat()
	{	
		if($this->input->post('form_type') == "INPUT"){;
			$id_obat = $this->M_apoteker->_Create_obat();
			$this->M_apoteker->id_obat($id_obat);
			redirect(base_url('apoteker'));
			
		}else if($this->input->post('form_type') == "EDIT"){
			$id_obat = $this->input->post('id_obat');
			$this->M_apoteker->_Update_Obat($id_obat);
			redirect(base_url('apoteker'));
		}
	}

	// Delete Pasien
	public function delete($id_obat){
		$data = array('id_obat' => $id_obat);
		$this->M_apoteker->delete($data);
		redirect(base_url('apoteker/obat'));
	}
}