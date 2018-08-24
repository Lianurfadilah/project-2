<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_apoteker extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function _Get_Obat($id_obat){
        $this->db->where('id_obat',$id_obat);
        $query = $this->db->get('stok_obat')->row();
        return $query;
    }
    
    function _Create_Obat(){
        $date        = $this->input->post('date');
        $quantity    = $this->input->post('quantity_masuk');
        $nama_obat   = $this->input->post('nama_obat');
        $harga_obat  = $this->input->post('harga_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');
        
        $data = array(  
            'date'              => mdate('%Y-%m-%d %H:%i:%s', now()),
            'quantity_masuk'    => $quantity,
            'nama_obat'         => $nama_obat,
            'harga_obat'        => $harga_obat,
            'jumlah_obat'       => $jumlah_obat
        );
        if($data != null){
            $this->db->insert('stok_obat',$data);
            return $this->db->insert_id();    
        }
        else{
            redirect(base_url('apoteker/obat'));
        }
    }

    function _Update_Obat($id_obat){
        $date        = $this->input->post('date');
        $quantity    = $this->input->post('quantity_masuk');
        $nama_obat   = $this->input->post('nama_obat');
        $harga_obat  = $this->input->post('harga_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');
        
        $data = array(  
            'date'              => mdate('%Y-%m-%d %H:%i:%s', now()),
            'quantity_masuk'    => $quantity,
            'nama_obat'         => $nama_obat,
            'harga_obat'        => $harga_obat,
            'jumlah_obat'       => $jumlah_obat
        );
        $this->db->where('id_obat',$id_obat);
        $this->db->update('stok_obat',$data);
    }

    public function delete($data) {
        $this->db->where('id_obat',$data['id_obat']);
        $this->db->delete('stok_obat',$data);
    }

    function listing(){
        $this->db->select('*');
        $this->db->from('stok_obat');
        $this->db->order_by('id_obat','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function jumlah_stok_obat() {
        $query = $this->db->get('stok_obat');
        return $query->num_rows();  
    }
}