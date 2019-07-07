<?php defined('BASEPATH') OR exit('No direct script access allowed');

class model_join extends CI_Model {


	// fungsi untuk mengambil seluruh data surat invoice
	public function getall_invoice()
	{
		$this->db->select('*');
		$this->db->from('data_suratinvoice');
		$query = $this->db->get();
		return $query->result();
	}

	// fungsi untuk mengambil surat perjanjian kerja
	public function getall_pk()
	{
		$this->db->select('*');
		$this->db->from('data_suratspk01');
		$query = $this->db->get();
		return $query->result();
	}

	// surat untuk mengambil surat perjanjian kerja pekerja lepas
	public function getall_pkpk()
	{
		$this->db->select('*');
		$this->db->from('data_suratspk02');
		$query = $this->db->get();
		return $query->result();
	}

	public function getsurat($t)
	{
		$query = $this->db->get($t);
		return $query->result();
	}

	public function surat_selesai()
	{
		$jml1 = $this->db->query("SELECT * FROM data_suratinvoice WHERE status = 'selesai'");
		$jml2 = $this->db->query("SELECT * FROM data_suratspk01 WHERE status = 'selesai'");
		$jml3 = $this->db->query("SELECT * FROM data_suratspk02 WHERE status = 'selesai'");

		$jml1 = $jml1->num_rows();
		$jml2 = $jml2->num_rows();
		$jml3 = $jml3->num_rows();
		$jumlah = $jml1+$jml2+$jml3;
		return $jumlah;
	}

	public function surat_proses()
	{
		$jml1 = $this->db->query("SELECT * FROM data_suratinvoice WHERE status = 'proses'");
		$jml2 = $this->db->query("SELECT * FROM data_suratspk01 WHERE status = 'proses'");
		$jml3 = $this->db->query("SELECT * FROM data_suratspk02 WHERE status = 'proses'");

		$jml1 = $jml1->num_rows();
		$jml2 = $jml2->num_rows();
		$jml3 = $jml3->num_rows();
		$jumlah = $jml1+$jml2+$jml3;
		return $jumlah;
	}

	public function surat_batal()
	{
		$jml1 = $this->db->query("SELECT * FROM data_suratinvoice WHERE status = 'batal'");
		$jml2 = $this->db->query("SELECT * FROM data_suratspk01 WHERE status = 'batal'");
		$jml3 = $this->db->query("SELECT * FROM data_suratspk02 WHERE status = 'batal'");

		$jml1 = $jml1->num_rows();
		$jml2 = $jml2->num_rows();
		$jml3 = $jml3->num_rows();
		$jumlah = $jml1+$jml2+$jml3;
		return $jumlah;
	}

	// untuk mengambil isi surat spk01
	public function get_isi_surat_spk01() {
		$this->db->select('*');
		$this->db->from('template_surat_spk01');
		$query = $this->db->get();
		return $query->result();
	}

	// mengambil data berdasarkan id surat spk 01
	public function get_id_surat_spk01($id_suratspk01)
	{
		$query = $this->db->get_where('data_suratspk01', array('id_data_suratspk01' => $id_suratspk01))->result();;
		return $query;
	}
}
