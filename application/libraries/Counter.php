<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter {

    // SET SUPER GLOBAL
    var $ci = NULL;
    private $table = 'visitors';
    private $ip = 'ip_address';

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function identify_visitor($ipad)
    {
        $this->ci->load->library('user_agent');
        if ($this->ci->agent->is_browser()) $agent = $this->ci->agent->browser().' '.$this->ci->agent->version();
        elseif ($this->ci->agent->is_robot()) $agent = $this->ci->agent->robot();
        elseif ($this->ci->agent->is_mobile()) $agent = $this->ci->agent->mobile();
        else $agent = 'Unidentified User Agent';

        return '# '.$agent.' # '.$this->ci->agent->platform().' # '.gethostbyaddr($ipad).' # '.$this->ci->input->user_agent().' #';
    }

    public function check_visitor($ipad)
    {
        if ($this->ci->crud->cw('visitors', array($this->ip => $ipad)) > 0) return true;
        else return false;
    }

    public function add_visitor($ipad)
    {
        $this->ci->session->set_userdata('ipad', $ipad);
        $user_agent = $this->identify_visitor($ipad);
        if (!$this->check_visitor($ipad)) {
            $data = array(  'id_visitor'    => mt_rand(10000000, 99999999),
                            'ip_address'    => $ipad,
                            'user_agent'    => $user_agent,
                            'last_visit'    => date('Y-m-d H:i:s'));
            $this->ci->crud->i($this->table, $data);
        } else {
            $cek = $this->ci->crud->gd($this->table, array($this->ip => $ipad));
            $data = array(  'visit_count'   => $cek->visit_count + 1,
                            'user_agent'    => $user_agent,
                            'last_visit'    => date('Y-m-d H:i:s'));
            $this->ci->crud->u($this->table, $data, array($this->ip => $ipad));
        }
    }

    public function add_email($ipad, $email)
    {
        $this->ci->crud->u($this->table, array('email' => $email), array($this->ip => $ipad));
    }
}
