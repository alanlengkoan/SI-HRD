<?php

date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '';
} else {
    echo 'Script timezone and ini-set timezone match.';
}

defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {

    // SET SUPER GLOBAL
    var $CI = NULL;
    public function __construct()
    {
        $this->CI =& get_instance();
    }

    // Query untuk pencocokan data
    private function get_user_data($username)
    {
        $query = $this->CI->db->get_where('data_user', array('username' => $username));
        return $query->row();
    }

    // Cek login
    public function cek_login()
    {
        header('Cache-control: private'); // IE 6 FIX
        // always modified
        header('Last-Modified: '.gmdate("D, d M Y H:i:s").' GMT');
        // HTTP/1.1
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        // HTTP/1.0
        header('Pragma: no-cache');

        // Mengecek session dan cookie
        if ($this->CI->session->username == '' && $this->CI->session->akses_level == '')
        {
            if (get_cookie('mylgn') != '') // cookie ada, verifikasi
            {
                parse_str(get_cookie('mylgn'));
                $cek = $this->get_user_data($usr);

                if (($cek->username != $usr) OR ($cek->password != $psw))
                {
                    $this->CI->session->set_flashdata('gagal', 'Data cookie Anda berubah.<br/>Silakan login ulang.');
                    redirect('administrator');
                }
                else
                {
                    $this->login($usr, $psw, 1, TRUE);
                }
            }
            else
            {
                $this->CI->session->set_flashdata('gagal', 'Sesi Anda sudah habis.<br/>Silakan login terlebih dahulu.');
                redirect('administrator');
            }
        }

        // Mengecek remember_me via database
//      else
//      {
//          $cek = $this->get_user_data($this->CI->session->username);
//          if ($cek->remember_me == 0 && $cek->session_id != session_id())
//          {
//              $this->CI->session->set_flashdata('gagal', 'Data sesi Anda berubah.<br/>Silakan login ulang.');
//              redirect(login_url());
//          }
//      }
    }

    // Cek akses_level
    public function cek_level($model, $method)
    {
        if ($this->CI->session->akses_level != 'Admin')
        {
            if ($model == 'user')
            {
                $data = array(  'title' => 'Akses Ditolak',
                                    'isi'       => 'admin/_error/404');
                $this->CI->load->view('admin/layout/wrapper', $data);
                return;
            }
        }
    }

    // Login
    public function login($username, $password, $remember, $auto = FALSE)
    {
        $admin = $this->get_user_data($username);

        // Cek password, jika benar maka login.
        if (compare_hash($password, $admin->password_admin, $auto))
        {
            $userdata = array(  'id'            => $admin->id_data_user,
                                'fullname'      => $admin->nama,
                                'username'      => $admin->username,
                                'akses_level'   => $admin->level_akses,
                                'id_login'      => uniqid(rand())
            );

            $this->CI->session->set_userdata($userdata);


            // var_dump($auto);
            // die();

            // if ( !$auto)
            // {
                // var_dump($auto);
                // die();
                // Menentukan kapan login terakhir
                $this->CI->session->set_userdata('last_login', get_hari(date('w')).', '.tgl_indo(date('Y-m-d')).' ['.waktu(date('H:i')).']');

                // Mengubah status remember_me via database
                session_regenerate_id();
                $this->CI->db->where('id_data_user', $admin->id_data_user);
                $this->CI->db->update('data_user', array('remember_me' => $remember, 'session_id' => session_id()));

                // Mengecek jika opsi "Remember me" diaktifkan maka set_cookie()
                $cookie = array(    'name'  => 'mylgn',
                                        'value' => 'log='.date('wYmdHis').'&usr='.$admin->username_admin.'&psw='.$admin->password_admin,
                                        'expire'    => (60 /*detik*/ * 60 /*menit*/ * 24 /*jam*/ * 30 /*hari*/ * 6 /*bulan*/));
                if ($remember == 1) set_cookie($cookie);
                else delete_cookie('mylgn');

                // Kalau benar di-redirect
                $this->CI->session->set_flashdata('sukses', 'Anda berhasil login.');
                //var_dump($userdata);
                //die();
                redirect('admin/dashboard');
            // }
        }
        else
        {
            $this->CI->session->set_flashdata('gagal', 'Username/password Anda salah!');
            redirect('administrator');
        }
        return false;
    }

    // Logout
    public function logout()
    {
        $userdata = array('id', 'nama', 'username', 'foto', 'akses_level', 'id_login', 'last_login');
        $this->CI->session->unset_userdata($userdata);
        delete_cookie('mylgn');

        $this->CI->session->set_flashdata('sukses', 'Anda sudah logout.');
        redirect('administrator');
    }
}
