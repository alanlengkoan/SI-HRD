<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_join');
  }

  public function index()
  {

    $data = array(
      'title' => 'Administrator | Halaman Dashboard',
      // 'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'   => 'admin/dashboard',
      'data1' => $this->model_join->surat_selesai(),
      'data2' => $this->model_join->surat_proses(),
      'data3' => $this->model_join->surat_batal()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

}
