<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//membuat class

class Admin extends CI_Controller
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
    $data['pasien'] = $this->M_pasien->jumlah_pasien();
    $data['content'] = 'admin/dashboard/home';
    $this->load->view('templates/admin/template1', $data);

  }
}

