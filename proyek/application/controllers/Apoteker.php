<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//membuat class

class Apoteker extends CI_Controller
{

  private $aData = array();
  function __construct()
  {
    #code...
        parent::__construct();
        $this->load->model('M_apoteker');
    $this->load->helper(array('form','url'));
    $this->load->library('parser');
    $this->aData = array('surl'=>site_url());
  }

  public function index(){
    $data['pasien']   = $this->M_apoteker->listing();
    $data['content'] = 'apoteker/dashboard/home';
    $this->load->view('templates/apoteker/template', $data);

  }
}
