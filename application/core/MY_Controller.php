<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    // Load database
    public function __construct()
    {
        parent::__construct();

        if ($this->session->akses_level == 'Blocked') view_error('Error 404');
        $this->simple_login->cek_login();
    }

    
}