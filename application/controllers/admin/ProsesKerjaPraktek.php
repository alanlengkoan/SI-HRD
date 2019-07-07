<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsesKerjaPraktek extends MY_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_join');
  }

  public function index()
  {
    $data = array(
      'title'     => 'Administrator | Halaman Proses Surat Kerja Praktek',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'       => 'admin/suratKP',
      'data'      => $this->model_join->getall_kp()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

}
