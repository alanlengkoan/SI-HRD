<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditTemplate extends MY_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
    // untuk menload model_join
    $this->load->model('model_join');
    // untuk menload model_crud
    $this->load->model('model_crud');
  }

  // untuk menampilkan tampilan awal edit template surat
  public function index()
  {
    $data = array(
        'title' => 'Administrator | Halaman Arsip Surat Izin Penelitian',
        //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
        'isi'   => 'admin/EditSurat/editSurat',
        'data'  => $this->model_join->getsurat('master_surat')
      );
      $this->load->view('admin/_layout/wrapper', $data);
  }

  public function cek_surat()
  {
    echo "CEK SURAT";
  }

  public function INV()
  {
    echo "SURAT INVOICE";
  }

  // fungsi untuk menampilkan edit surat perjanjian kerja 1
  public function SPK01(){
    $data = array(
        'title'     => 'Administrator | Halaman Arsip Surat Izin Penelitian',
        'isi'       => 'admin/EditSurat/editSurat',
        'data'      => $this->model_join->getsurat('master_surat'),
        'isi_surat' => $this->model_join->get_isi_surat_spk01()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

  public function SPK02()
  {
    echo "SURAT PERJANJIAN KERJA 2";
  }

  // fungsi untuk proses mengubah data perjanjian kerja 1
  public function EditSpk01(){

    if ($this->input->post('key') == 'isi_pertama') {

        $id    = $this->input->post('id');
        $value = $this->input->post('value');
        $ubah  = $this->db->query("UPDATE template_surat_spk01 SET isi_pertama = '$value' WHERE id_template_surat_izinpenelitian = '$id'");
        echo "Ubah";

    } else if ($this->input->post('key') == 'isi_kedua') {

        $id    = $this->input->post('id');
        $value = $this->input->post('value');
        $ubah  = $this->db->query("UPDATE template_surat_spk01 SET isi_kedua = '$value' WHERE id_template_surat_izinpenelitian = '$id'");
        echo "Ubah";

    } else if ($this->input->post('key') == 'isi_ketiga') {

        $id    = $this->input->post('id');
        $value = $this->input->post('value');
        $ubah  = $this->db->query("UPDATE template_surat_spk01 SET isi_ketiga = '$value' WHERE id_template_surat_izinpenelitian = '$id'");
        echo "Ubah";

    } else if ($this->input->post('key') == 'isi_keempat') {

      $id    = $this->input->post('id');
      $value = $this->input->post('value');
      $ubah  = $this->db->query("UPDATE template_surat_spk01 SET isi_keempat = '$value' WHERE id_template_surat_izinpenelitian = '$id'");
      echo "Ubah";

    }

  }

}
