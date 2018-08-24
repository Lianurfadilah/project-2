<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function _Get_Pasien($id_pasien){
        $this->db->where('id_pasien',$id_pasien);
        $query = $this->db->get('pasien')->row();
        return $query;
    }
    
    function _Create_Pasien(){
        $nama_pasien = $this->input->post('nama_pasien');
        $nik         = $this->input->post('nik');
        $keluhan     = $this->input->post('keluhan');
        $alamat      = $this->input->post('alamat');
        $umur        = $this->input->post('umur');
        $notlp       = $this->input->post('notlp');
        $status       = $this->input->post('status');
        
        $data = array(  
            'nama_pasien'   => $nama_pasien,
            'nik'           => $nik,
            'keluhan'       => $keluhan,
            'alamat'        => $alamat,
            'umur'          => $umur,
            'notlp'         => $notlp,
            'status'        => 0
        );
        if($data != null){
            $this->db->insert('pasien',$data);
            return $this->db->insert_id();    
        }
        else{
            redirect(base_url('admin/pasien'));
        }
    }

    function _Update_Pasien($id_pasien){
        $nama_pasien = $this->input->post('nama_pasien');
        $nik         = $this->input->post('nik');
        $keluhan     = $this->input->post('keluhan');
        $alamat      = $this->input->post('alamat');
        $umur        = $this->input->post('umur');
        $notlp       = $this->input->post('notlp');
        
        $data = array(  
            'nama_pasien'   => $nama_pasien,
            'nik'           => $nik,
            'keluhan'       => $keluhan,
            'alamat'        => $alamat,
            'umur'          => $umur,
            'notlp'         => $notlp,
        );
        $this->db->where('id_pasien',$id_pasien);
        $this->db->update('pasien',$data);
    }

    function _Update_Pasien_Dokter($id_pasien){
        // $nama_pasien = $this->input->post('nama_pasien');
        // $nik         = $this->input->post('nik');
        // $keluhan     = $this->input->post('keluhan');
        // $alamat      = $this->input->post('alamat');
        // $umur        = $this->input->post('umur');
        $status       = $this->input->post('status');
        
        $data = array(  
            'status'         => 1
        );
        $this->db->where('id_pasien',$id_pasien);
        $this->db->update('pasien',$data);
    }

    public function delete($data) {
        $this->db->where('id_pasien',$data['id_pasien']);
        $this->db->delete('pasien',$data);
    }

    function listing(){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->order_by('id_pasien','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    function listing_pasien_blm_periksa(){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('status','0');
        $this->db->order_by('id_pasien','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    function listing_pasien_sdh_periksa(){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('status','1');
        $this->db->order_by('id_pasien','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function jumlah_pasien() {
        $query = $this->db->get('pasien');
        return $query->num_rows();  
    }

    public function Id_Register($id_pasien) {
        $tgl_jam = $this->input->post('tgl_jam');
        $data = array(  
            'tgl_jam'       => mdate('%Y-%m-%d %H:%i:%s', now()),
            'id_pasien'     => $id_pasien
        );
        $this->db->insert('registrasi',$data);
        return $this->db->insert_id();
    }

    public function Id_Resep($id_pasien) {
        $data = array(  
            'id_pasien'     => $id_pasien
        );
        $this->db->insert('resep',$data);
        return $this->db->insert_id();
    }
}