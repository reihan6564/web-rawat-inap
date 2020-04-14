<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_Tampil');
	}

	public function index()
	{
		$data['tampil_k'] = $this->db->query("SELECT * FROM tb_kamar limit 3")->result_array();
		$this->load->view('Dashboard/index', $data);			
	}

	public function lihat_kamar(){
		$data['tampil_k'] = $this->db->query("SELECT * FROM tb_kamar ")->result_array();
		$this->load->view('Dashboard/lihat_kamar', $data);			
	}
	public function lihat_data(){
		$id_kamar = $this->input->post('id_kamar');
		$data['tampil_k'] = $this->db->query("SELECT * FROM tb_kamar ")->result_array();
		$tampil_kmr = $this->db->query("SELECT * FROM tb_kamar where id_kamar = '$id_kamar' AND status_k ='terisi'")->row_array();
		if($tampil_kmr){
			$tb_rawat = $this->db->query("SELECT * FROM tb_rawat WHERE id_kamar = '$id_kamar'")->row_array();
			$id_dp = $tb_rawat['id_detail_pasien'];
			$tb_detail_pasien = $this->db->query("SELECT * FROM tb_detail_pasien where id_detail_pasien = '$id_dp'")->row_array();
			$id_p = $tb_detail_pasien['id_pasien'];
			$tb_pasien = $this->db->query("SELECT * FROM tb_pasien where id_pasien = '$id_p'")->row_array();
			$id_d = $tb_rawat['id_dokter'];
			$tb_dokter = $this->db->query("SELECT * FROM tb_dokter where id_dokter = '$id_d'")->row_array();
			$data['pasiendata'] = $tb_pasien;
			$data['dokterdata'] = $tb_dokter;
			$data['rawatdata'] = $tb_rawat['id_rawat'];
			$data['id_k'] = $id_kamar;
			$this->session->set_flashdata('message', '<div class="alert alert-primary text-center" role="alert"><h5>Data Kamar Tampil, Silahkan Scroll Kebawah</h5></div>');
			$this->load->view('Dashboard/lihat_kamar', $data);	
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"><h5>Kamar Masih Kosong</h5></div>');
			$this->load->view('Dashboard/lihat_kamar', $data);	
		}
	}

	public function cari_pasien(){
		$kode = $this->input->post('kode');
		if($kode == null){
			$data['kode'] = $kode;
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"><h5>Kode Kosong Silahkan Isi Ulang</h5></div>');
			$this->load->view('Dashboard/cari_pasien', $data);

		}else{
			$cek_kode = $this->db->query("SELECT * FROM tb_pembayaran where id_detail_pasien = '$kode'")->row_array();
			if($cek_kode){
				$id_dp = $cek_kode['id_detail_pasien'];
				$tb_detail_pasien = $this->db->query("SELECT * FROM tb_detail_pasien where id_detail_pasien = '$id_dp'")->row_array();
				$id_p = $tb_detail_pasien['id_pasien'];
				$tb_pasien = $this->db->query("SELECT * FROM tb_pasien where id_pasien = '$id_p'")->row_array();
				$data['pasiendata'] = $tb_pasien;
				$data['kode_p'] = $cek_kode['id_pembayaran'];
				$data['kode'] = $kode;
				$this->session->set_flashdata('message', '<div class="alert alert-primary text-center" role="alert"><h5>Kode Sesuai </h5></div>');
				$this->load->view('Dashboard/cari_pasien', $data);
			}else{
				$data['kode'] = $kode;
				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"><h5>Kode Tidak Sesuai Silahkan Masukkan Kode Lain</h5></div>');
				$this->load->view('Dashboard/cari_pasien', $data);
			}
			
		}		

	}
}
