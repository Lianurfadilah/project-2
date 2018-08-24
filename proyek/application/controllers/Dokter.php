<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//membuat class

class Dokter extends CI_Controller
{

  private $aData = array();
  function __construct()
  {
    #code...
        parent::__construct();
        $this->load->model('M_pasien');
    $this->load->helper(array('form','url'));
    $this->load->library('parser');
    $this->aData = array('surl'=>site_url());
  }

  public function index(){
    $data['pasien']   = $this->M_pasien->listing();
    $data['content'] = 'dokter/dashboard/home';
    $this->load->view('templates/dokter/template', $data);

  }

  public function pasien(){
    $data['pasien']   = $this->M_pasien->listing_pasien_blm_periksa();
    $data['content'] = 'dokter/pasien/data_pasien';
    $this->load->view('templates/dokter/template', $data);
  }

  public function pasien_periksa(){
    $data['pasien']   = $this->M_pasien->listing_pasien_sdh_periksa();
    $data['content'] = 'dokter/pasien/data_pasien_periksa';
    $this->load->view('templates/dokter/template', $data);
  }
}

