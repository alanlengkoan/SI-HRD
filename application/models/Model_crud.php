<?php defined('BASEPATH') OR exit('No direct script access allowed');

class model_crud extends CI_Model {
  public function ca($t){
    return $this->db->get($t)->num_rows();
  }
  public function ga($t){
    return $this->db->get($t)->result();
  }
  public function gao($t,$o){
    return $this->db->order_by($o)->get($t)->result();
  }
  public function gl($t,$l,$f){
    return $this->db->limit($l,$f)->get($t)->result();
  }
  public function glo($t,$l,$f,$o){
    return $this->db->limit($l,$f)->order_by($o)->get($t)->result();
  }
  public function cw($t,$w){
    return $this->db->where($w)->get($t)->num_rows();
  }
  public function gw($t,$w){
    return $this->db->where($w)->get($t)->result();
  }
  public function gwo($t,$w,$o){
    return $this->db->where($w)->order_by($o)->get($t)->result();
  }
  public function gwl($t,$w,$l,$f){
    return $this->db->where($w)->limit($l,$f)->get($t)->result();
  }
  public function gwlo($t,$w,$l,$f,$o){
    return $this->db->where($w)->limit($l,$f)->order_by($o)->get($t)->result();
  }
  public function gd($t,$w){
    return $this->db->where($w)->get($t)->row();
  }
  public function gda($t,$w){
    return $this->db->where($w)->get($t)->row_array();
  }
  public function i($t,$d){
    $this->db->insert($t,$d);
  }
  public function u($t,$d,$w){
    $this->db->where($w)->update($t,$d);
  }
  public function d($t,$w){
    $this->db->where($w)->delete($t);
  }
  public function q($q){
    return $this->db->query($q);
  }
}
