<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArsipSurat extends MY_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
    // load untuk modal join
    $this->load->model('model_join');
  }

  // fungsi untuk menampilkan file invoice
  public function Invoice()
  {
    $data = array(
      'title' => 'Administrator | Halaman Arsip Surat Aktif Kuliah',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'   => 'admin/ArsipSurat/arsipINV',
      'data'  => $this->model_join->getall_invoice()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

  // fungsi untuk menampilkan file perjanjian kerja
  public function SPK01()
  {
    $data = array(
      'title' => 'Administrator | Halaman Arsip Surat Aktif Kuliah',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'   => 'admin/ArsipSurat/arsipPK',
      'data'  => $this->model_join->getall_pk()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

  // fungsi untuk menampilkan file perjanjian kerja lepas
  public function SPK02()
  {
    $data = array(
      'title' => 'Administrator | Halaman Arsip Surat Aktif Kuliah',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'   => 'admin/ArsipSurat/arsipPKPK',
      'data'  => $this->model_join->getall_pkpk()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

}
