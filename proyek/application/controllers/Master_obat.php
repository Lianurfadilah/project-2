<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_obat extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('M_apoteker');
    }

    public function index()
	{
		$data['Master_obat'] 	= $this->M_apoteker->listing();
		$data['content'] 	= 'apoteker/obat/data_obat';
		$this->load->view('templates/apoteker/template', $data);
	}

	public function form($id_obat = null){
		$data['content'] 	= 'apoteker/obat/form';

			if($id_obat == null){
				$data['form_type'] = 'INPUT';
				$data['Master_obat'] = null;
				$this->load->view('templates/apoteker/template', $data);
			}else{
				$data['form_type'] = 'EDIT';
				$data['Master_obat'] = $this->M_apoteker->_Get_Obat($id_obat);
				if($data['Master_obat'] == null){
					redirect(base_url('apoteker/dashboard/home'));
				}else{
					$this->load->view('templates/apoteker/template', $data);
				}
			}
	}

	public function save_obat()
	{	
		if($this->input->post('form_type') == "INPUT"){;
			$this->M_apoteker->_Create_Obat();
			redirect(base_url('Master_obat'));
			
		}else if($this->input->post('form_type') == "EDIT"){
			$id_obat = $this->input->post('id_obat');
			$this->M_apoteker->_Update_Obat($id_obat);
			redirect(base_url('Master_obat'));
		}
	}

	// Delete Obat
	public function delete($id_obat){
		$data = array('id_obat' => $id_obat);
		$this->M_apoteker->delete($data);
		redirect(base_url('Master_obat'));
	}
}