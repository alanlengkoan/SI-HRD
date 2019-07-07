<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratPerjanKerja extends MY_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_join');
  }

  public function index()
  {
    $data = array(
      'title'     => 'Administrator | Halaman Proses Surat Aktif Kuliah',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'       => 'admin/suratPK',
      'data'		=> $this->model_join->getall_pk()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

  // fungsi untuk menampilkan hasil sebelum dicetak
  public function CetakSPK01()
  {
    $id_suratspk01 = $this->uri->segment(4);
    $data = array(
      'title' => 'Administrator | Halaman Proses Surat Aktif Kuliah',
      //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
      'isi'   => 'admin/cetakPK',
      'data'	=> $this->model_join->get_id_surat_spk01($id_suratspk01),
      'isi_surat' => $this->model_join->get_isi_surat_spk01()
    );
    $this->load->view('admin/_layout/wrapper', $data);
  }

  // fungsi untuk mencetak surat ke word
  public function CetakHasilSPK01()
  {

    if ($this->input->post('cetak')) {
      
      if (!empty($this->input->post('cetakspk01'))) {

        // mengambil isi surat
        $content = $this->input->post('cetakspk01');

        // mengambil fungsi dari php office
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $content);

        // menyimpan data ke dalam bentuk word
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('helloWorld.docx');

        // header("Content-type: application/vnd.ms-word");
        // header("Content-Disposition: attachment;Filename=Surat_Perjanjian_Kerja.doc");
        // header("Expires: 0");
        // header("Cache-control: must-revalidate, post-check = 0, pre-check = 0 ");
        // echo $this->input->post('cetakspk01');
      }

    }

  }

}
