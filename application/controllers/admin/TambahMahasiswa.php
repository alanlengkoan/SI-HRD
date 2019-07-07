<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahMahasiswa extends MY_Controller {

    // Load database
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        $data = array(  'title'     => 'Administrator | Tambah Data Mahasiswa',
                        //'subtitle'  => 'Selamat datang, '.$this->session->fullname.'.',
                        'isi'       => 'admin/tambah-mahasiswa');
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function Insert()
    {
        $this->load->model('model_crud');
        $data = array(
                'nim_mahasiswa' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama'),
                'alamat_mahasiswa' => $this->input->post('alamat'),
                'email_mahasiswa' => $this->input->post('email'),
                'telepon_mahasiswa' => $this->input->post('telepon'),
                'jenis_kelamin' => $this->input->post('kelamin')
            );
        $data = $this->model_crud->i('data_mahasiswa', $data);
        redirect('admin/Dashboard');
    }

}