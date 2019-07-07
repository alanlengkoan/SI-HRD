<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomor_surat {
  // SET SUPER GLOBAL
  var $CI = NULL;
  public function __construct()
  {
    $this->CI =& get_instance();
  }

  public function cek_surat($kode)
  {
    if ($kode == "INV") {
      $query = $this->CI->db->query("SELECT nomor_surat FROM  data_suratinvoice ORDER BY uat DESC LIMIT 1");
      $query = $query->row_array();
      $data = explode("/", $query["nomor_surat"]);
      $bulan = date('n');
      if($query>0) {
        if(date('Y') == $data[4]) {
          if(number_to_roman($bulan) == $data[3]) {
            $surat = $data[0]+1;
            $surat = sprintf("%04d", $surat);
            $surat = $surat."/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          } else {
            $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          }
        } else {
          $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
          return $surat;
        }
      }
      else {
        $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
        return $surat;
      }
    } else if ($kode == "SPK01") {
      $query = $this->CI->db->query("SELECT nomor_surat FROM data_suratspk01 ORDER BY uat DESC LIMIT 1");
      $query = $query->row_array();
      $data = explode("/", $query["nomor_surat"]);
      $bulan = date('n');
      if($query>0) {
        if(date('Y') == $data[4]) {
          if(number_to_roman($bulan) == $data[3]) {
            $surat = $data[0]+1;
            $surat = sprintf("%04d", $surat);
            $surat = $surat."/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          } else {
            $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          }
        } else {
          $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
          return $surat;
        }
      } else {
        $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
        return $surat;
      }
    } else if ($kode == "SPK02") {
      $query = $this->CI->db->query("SELECT nomor_surat FROM data_suratspk02 ORDER BY uat DESC LIMIT 1");
      $query = $query->row_array();
      $data = explode("/", $query["nomor_surat"]);
      $bulan = date('n');
      if($query>0) {
        if(date('Y') == $data[4]) {
          if(number_to_roman($bulan) == $data[3]) {
            $surat = $data[0]+1;
            $surat = sprintf("%04d", $surat);
            $surat = $surat."/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          } else {
            $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
            return $surat;
          }
        } else {
          $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
          return $surat;
        }
      } else {
        $surat = "0001/".$kode."/USI/".number_to_roman($bulan)."/".date("Y");
        return $surat;
      }
    }
  }

}
