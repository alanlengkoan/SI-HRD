<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  // Load database
  public function __construct()
  {
    parent::__construct();
  }

  // Index login
  public function index()
  {
    $valid = $this->form_validation;
    $valid->set_rules('username', 'Username', 'trim|required|strip_tags', array('required' => '{field} harus diisi.'));
    $valid->set_rules('password', 'Password', 'trim|required|strip_tags', array('required' => '{field} harus diisi.'));

    if ($valid->run() === FALSE)
    {
      $data = array('title' => 'Login Admin');
      $this->load->view('admin/login-admin', $data);
    }
    else
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $remember = $this->input->post('remember_me');
      $this->simple_login->login($username, md5($password), $remember, TRUE);
    }
  }

  // Kalo lupa password
  public function forget()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
      'email',
      'Alamat E-mail',
      'required|valid_email|callback_adakah',
      array(
        'required'    => '{field} harus diisi.',
        'valid_email' => '{field} harus format e-mail (contoh@email.com).'
      )
    );

    if ($valid->run() === FALSE)
    {
      $data = array('title'   => 'Lupa Password');
      $this->load->view('login/forget', $data);
    }
    else
    {
      $this->load->helper('string');
      $email    = $this->input->post('email', TRUE);
      $user     = $this->crud->gd('users', array('email' => $email));
      $new_pass = random_string('alnum', 8);
      $new_hash = do_hash($new_pass);
      $this->crud->u('users', array('password' => $new_hash), array('email' => $email));
      $this->kirim_reset_pass($email, $user->username, $new_pass);
      redirect(login_url('forget'));
    }
  }

  // Callback_adakah
  public function adakah($email)
  {
    if ($this->crud->cw('users', array('email' => $email)) == 0) {
      $this->form_validation->set_message('adakah', 'E-mail <b>'.$email.'</b> tidak terdaftar di database!');
      return false;
    }
    return true;

  }

  // Kirim password baru ke email
  public function kirim_reset_pass($email, $username, $new_pass)
  {
    $this->load->library('my_phpmailer');
    $subject = 'Reset Password Anda';
    $content = file_get_contents(base_url('templates/email/reset_pass.php'));
    $content = str_replace('{_subject_}', $subject, $content);
    $content = str_replace('{_username_}', $username, $content);
    $content = str_replace('{_new_pass_}', $new_pass, $content);
    $response = $this->my_phpmailer->send_email($email, $subject, $content);
    if ($response['success']) {
      $this->session->set_flashdata('sukses', 'Password berhasil di-reset. Silakan buka e-mail ('.$response['emails'].') untuk melihat password baru.');
    } else {
      $this->session->set_flashdata('gagal', 'Password gagal di-reset. Ulangi prosedur di atas.');
    }
  }

  // Logout
  public function logout()
  {
    $this->simple_login->logout();
  }
}
