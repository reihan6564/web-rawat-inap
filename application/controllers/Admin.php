<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_Tampil');
        $this->load->model('Model_Update');
        $this->load->model('Model_Tambah');
        $this->load->model('Model_Hapus');
        $this->load->library('cetak_pdf');
    }

    public function index()
    {
        $this->load->view('Login/login');
    }

    public function dashboard()
    {
        if ($this->session->userdata('username') == null) {
            redirect('login');
        }else{
            $akses = $this->session->userdata('username');
            $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
            $data['akses'] = $hak_akses['jabatan_u'];
            $akses = $hak_akses['jabatan_u'];
            $data['nama'] = $hak_akses['nama_u'];
            $data['hitung_pas'] = $this->Model_Tampil->hitung_pas();
            $data['hitung_kam'] = $this->Model_Tampil->hitung_kam();
            $data['hitung_raw'] = $this->Model_Tampil->hitung_raw();
            $data['hitung_traw'] = $this->Model_Tampil->hitung_traw();
            $this->session->set_userdata('jabatan',$akses);
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/navbar', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/template/footer', $data);
        }
    }

    public function pasien()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['pasien'] =  $this->Model_Tampil->tampil_pasien();
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/pasien', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function dokter()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['dokter'] =  $this->Model_Tampil->tampil_dokter();
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/dokter', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function spesialis()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['spesialis'] =  $this->Model_Tampil->tampil_spesialis();
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/spesialis', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function kamar()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['kamar'] =  $this->Model_Tampil->tampil_kamar();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/kamar', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function user()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['user'] =  $this->Model_Tampil->tampil_user();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function pendaftaran()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/pendaftaran', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function hasil_periksa()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['pasien'] =  $this->Model_Tampil->tampil_pasien();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/hasil_periksa', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function pembayaran()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['pasien'] =  $this->Model_Tampil->tampil_pasien();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/pembayaran', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function rawat()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['nama'] = $hak_akses['nama_u'];
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['detail_pasien'] =  $this->Model_Tampil->tampil_detail_pasien();
        $data['dokter'] =  $this->Model_Tampil->tampil_dokter();
        $data['kamar'] =  $this->Model_Tampil->tampil_kamar();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/rawat', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function about()
    {

        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['pasien'] =  $this->Model_Tampil->tampil_pasien();
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/about', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function laporan()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['pasien'] =  $this->Model_Tampil->tampil_pasien();
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function lapor_proses()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();

        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('admin/template/footer', $data);
    } 

    public function lapor_pasien()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Pasien";
        $data['warna'] = "primary";
        if($this->input->post('periode') == "hari_ini"){
            $data['pasien'] = $this->Model_Tampil->tampil_pasien();
            $this->load->view('admin/laporan/laporan_m_pasien', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_pasien WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['pasien'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_m_pasien', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_pasien WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['pasien'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_pasien', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_pasien WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['pasien'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_pasien', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }   

    public function lapor_dokter()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Dokter";
        $data['warna'] = "primary";
        if($this->input->post('periode') == "hari_ini"){
            $data['dokter'] = $this->Model_Tampil->tampil_dokter();
            $this->load->view('admin/laporan/laporan_m_dokter', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_dokter WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['dokter'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_m_dokter', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_dokter WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['dokter'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_dokter', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_dokter WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['dokter'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_dokter', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_user()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "User";
        $data['warna'] = "primary";
        if($this->input->post('periode') == "hari_ini"){
            $data['user'] = $this->Model_Tampil->tampil_user();
            $this->load->view('admin/laporan/laporan_m_user', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_user WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['user'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_m_user', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_user WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['user'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_user', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_user WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['user'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_user', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_kamar()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Kamar";
        $data['warna'] = "success";
        if($this->input->post('periode') == "hari_ini"){
            $data['kamar'] = $this->Model_Tampil->tampil_kamar();
            $this->load->view('admin/laporan/laporan_m_kamar', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_kamar WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['kamar'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_m_kamar', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_kamar WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['kamar'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_kamar', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_kamar WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['kamar'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_kamar', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_spesialis()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Spesialis";
        $data['warna'] = "success";
        if($this->input->post('periode') == "hari_ini"){
            $data['spesialis'] = $this->Model_Tampil->tampil_spesialis();
            $this->load->view('admin/laporan/laporan_m_spesialis', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_spesialis WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['spesialis'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_m_spesialis', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_spesialis WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['spesialis'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_spesialis', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_spesialis WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['spesialis'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_m_spesialis', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_hasil_periksa()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Hasil Periksa";
        $data['warna'] = "danger";
        if($this->input->post('periode') == "hari_ini"){
            $data['detail_pasien'] = $this->Model_Tampil->tampil_detail_pasien();
            $this->load->view('admin/laporan/laporan_t_hasil_periksa', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_detail_pasien WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['detail_pasien'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_t_hasil_periksa', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_detail_pasien WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['detail_pasien'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_hasil_periksa', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_detail_pasien WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['detail_pasien'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_hasil_periksa', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_rawat()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Perawatan";
        $data['warna'] = "danger";
        if($this->input->post('periode') == "hari_ini"){
            $data['rawat'] = $this->Model_Tampil->tampil_rawat();
            $this->load->view('admin/laporan/laporan_t_rawat', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_rawat WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['rawat'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_t_rawat', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_rawat WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['rawat'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_rawat', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_rawat WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['rawat'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_rawat', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_pembayaran()
    {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $data['akses'] = $hak_akses['jabatan_u'];
        $data['nama'] = $hak_akses['nama_u'];
        $data['lapor'] = "Pembayaran";
        $data['warna'] = "danger";
        if($this->input->post('periode') == "hari_ini"){
            $data['pembayaran'] = $this->Model_Tampil->tampil_pembayaran();
            $this->load->view('admin/laporan/laporan_t_pembayaran', $data);
        }else if($this->input->post('btn_tanggal')){
            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');
            $query = $this->db->query("SELECT * FROM tb_pembayaran WHERE tanggal BETWEEN '".$tanggal1."' and '".$tanggal2."' ")->result_array();
            $data['pembayaran'] = $query;
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $this->load->view('admin/laporan/laporan_t_pembayaran', $data);
        }else if($this->input->post('btn_minggu')){
            echo "perminggu";
        }else if($this->input->post('btn_bulan')){
            $bulan1 = $this->input->post('bulan1');
            $tahun1 = $this->input->post('tahun1');
            $hasil = $tahun1."-".$bulan1;
            $query = $this->db->query("SELECT * FROM tb_pembayaran WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['pembayaran'] = $query;
            $data['bulan'] = $bulan1;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_pembayaran', $data);
        }else if($this->input->post('btn_tahun')){
            $tahun1 = $this->input->post('tahun2');
            $hasil = $tahun1;
            $query = $this->db->query("SELECT * FROM tb_pembayaran WHERE tanggal like '%".$hasil."%'")->result_array();
            $data['pembayaran'] = $query;
            $data['tahun'] = $tahun1;
            $this->load->view('admin/laporan/laporan_t_pembayaran', $data);
        }else {
            if($this->input->post('periode') == "hari"){
                $data['pilih'] = "Periode-Tanggal";
                $data['periode'] = "hari";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "minggu"){
                $data['pilih'] = "Periode- 1 Minggu";
                $data['periode'] = "minggu";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "bulan"){
                $data['pilih'] = "Periode-Bulan";
                $data['periode'] = "bulan";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
            else if($this->input->post('periode') == "tahun"){
                $data['pilih'] = "Periode-Tahun";
                $data['periode'] = "tahun";
                $this->load->view('admin/template/header', $data);
                $this->load->view('admin/template/sidebar', $data);
                $this->load->view('admin/template/navbar', $data);
                $this->load->view('admin/laporan_proses', $data);
                $this->load->view('admin/template/footer', $data);
            }
        }
    }

    public function lapor_bayar($id)
    {
        $kode = $id;
        $tb_pembayaran = $this->db->query("SELECT * FROM tb_pembayaran where id_detail_pasien = '$kode'")->row_array();
        if($tb_pembayaran){
            $tb_rawat = $this->db->query("SELECT * FROM tb_rawat where id_detail_pasien = '$kode'")->row_array();
            $tb_detail_pasien = $this->db->query("SELECT * FROM tb_detail_pasien where id_detail_pasien = '$kode'")->row_array();
            $id_r = $tb_rawat['id_kamar'];
            $id_p = $tb_detail_pasien['id_pasien'];
            $tb_pasien = $this->db->query("SELECT * FROM tb_pasien where id_pasien = '$id_p'")->row_array();
            $tb_kamar = $this->db->query("SELECT * FROM tb_kamar where id_kamar = '$id_r'")->row_array();
            $data['pasiendata'] = $tb_pasien;
            $data['rawatdata'] = $tb_rawat;
            echo $tb_rawat['id_rawat'];
            $data['kamardata'] = $tb_kamar;
            $data['pembayarandata'] = $tb_pembayaran;
            $this->load->view('admin/laporan/lapor_bayar', $data);
        }else{
         $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Anda Belum Melakukan Pembayaran</div>');
         redirect('admin/pembayaran');
     }

 }
 public function edit_profile()
 {

    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['id'] = $hak_akses['id_user'];
    $data['nama'] = $hak_akses['nama_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/edit_profile', $data);
    $this->load->view('admin/template/footer', $data);
}

public function edit_pasien($id)
{

    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['id'] = $id;
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['nama'] = $hak_akses['nama_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/e_pasien', $data);
    $this->load->view('admin/template/footer', $data);
}

public function edit_dokter($id)
{

    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['nama'] = $hak_akses['nama_u'];
    $data['id'] = $id;
    $data['akses'] = $hak_akses['jabatan_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/e_dokter', $data);
    $this->load->view('admin/template/footer', $data);
}

public function edit_spesialis($id)
{

    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['nama'] = $hak_akses['nama_u'];
    $data['id'] = $id;
    $data['akses'] = $hak_akses['jabatan_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/e_spesialis', $data);
    $this->load->view('admin/template/footer', $data);
}

public function edit_kamar($id)
{

    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['id'] = $id;
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['nama'] = $hak_akses['nama_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/e_kamar', $data);
    $this->load->view('admin/template/footer', $data);
}
public function edit_user($id)
{
    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $data['id'] = $id;
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['nama'] = $hak_akses['nama_u'];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/e_user', $data);
    $this->load->view('admin/template/footer', $data);
}

public function cek_kode()
{
    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $id = $this->input->post('kode');
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['dokter'] =  $this->Model_Tampil->tampil_dokter();
    $data['kamar'] =  $this->Model_Tampil->tampil_kamar();
    $query = $this->db->query("SELECT * FROM tb_detail_pasien WHERE id_detail_pasien = '".$id."' ")->row_array();
    $data['query'] = $query;
    if($query['id_pasien'] == null){
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Kode Pasien tidak cocok</div>');
        redirect('admin/rawat');
    }else if($this->input->post('kode') == ""){
       $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Kode Pasien tidak boleh kosong</div>');
       redirect('admin/rawat');
   }else{
    $query2 = $this->db->query("SELECT * FROM tb_pasien WHERE id_pasien = '". $query['id_pasien']."' ")->row_array();
    $data['berhasil'] = $query2; 
    $data['id'] = $id;
    $data['nama'] = $hak_akses['nama_u'];
    $this->session->set_flashdata('message', '<div class="alert alert-success col-md-12 text-center" role="alert">Detail Pasien Tersedia</div>');
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/rawat', $data);
    $this->load->view('admin/template/footer', $data);
}

}

public function cek_kode_p()
{
    $akses = $this->session->userdata('username');
    $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
    $id = $this->input->post('kode');
    $data['akses'] = $hak_akses['jabatan_u'];
    $data['dokter'] =  $this->Model_Tampil->tampil_dokter();
    $data['kamar'] =  $this->Model_Tampil->tampil_kamar();
    $query = $this->db->query("SELECT * FROM tb_detail_pasien WHERE id_detail_pasien = '".$id."' ")->row_array();
    $data['query'] = $query;
    if($query['id_pasien'] == null){
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Kode Pasien tidak cocok</div>');
        redirect('admin/pembayaran');
    }else if($this->input->post('kode') == ""){
       $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Kode Pasien tidak boleh kosong</div>');
       redirect('admin/pembayaran');
   }else{
    $query2 = $this->db->query("SELECT * FROM tb_pasien WHERE id_pasien = '". $query['id_pasien']."' ")->row_array();
    $data['berhasil'] = $query2; 
    $data['id'] = $id;
    $data['nama'] = $hak_akses['nama_u'];
    $this->session->set_flashdata('message', '<div class="alert alert-success col-md-12 text-center" role="alert">Detail Pasien Tersedia</div>');
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/sidebar', $data);
    $this->load->view('admin/template/navbar', $data);
    $this->load->view('admin/pembayaran', $data);
    $this->load->view('admin/template/footer', $data);
}

}

public function acakkode()
{
    $quer = $this->db->query("SELECT RIGHT(id_detail_pasien, 3) as pasien FROM `tb_detail_pasien` ORDER BY id_detail_pasien DESC")->row_array();
    $akhir = intval($quer['pasien']);
    $i = 1;
    $akhir = $akhir + 1;
    if (strlen($akhir) == 1) {
        $a = "PSN00" . $akhir;
    } elseif (strlen($akhir) == 2) {
        $a = "PSN0" . $akhir;
    } elseif (strlen($akhir) == 3) {
        $a = "PSN" . $akhir;
    } else {
        $a = "PSN001";
    }
    return $a;
}

public function input_pasien()
{
    $this->form_validation->set_rules('nama_p', 'Nama Pasien', 'required|trim');
    $this->form_validation->set_rules('umur_p', 'Umur Pasien', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir_p', 'Tanggal Lahir Pasien', 'required|trim');
    $this->form_validation->set_rules('notelp_p', 'No Telepon Pasien', 'required|trim');
    $this->form_validation->set_rules('alamat_p', 'Alamat Pasien', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_p', 'Gender Pasien', 'required|trim');
    $this->form_validation->set_rules('kota_p', 'Kota Pasien', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/pasien');
        echo "gak masuk";
    } else {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $this->Model_Tambah->insert_pasien();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pasien Sudah di Ditambahkan</div>');
        redirect('admin/pasien');
    } 
}

public function input_hasil()
{
    $kode_p = $this->acakkode();
    $this->form_validation->set_rules('pasien', 'Pasien', 'required|trim');
    $this->form_validation->set_rules('ket_dok', 'Keterangan Dokter', 'required|trim');
    $this->form_validation->set_rules('ketentuan_r', 'Ketentuan Rawat', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/hasil_periksa');
        echo "gak masuk";
    } else {
        $akses = $this->session->userdata('username');
        $hak_akses = $this->db->get_where('tb_user', ['username' => $akses])->row_array();
        $this->Model_Tambah->insert_hasil($kode_p);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hasil Periksa Sudah di Ditambahkan , Ingat Kode Pasien <strong>'.$kode_p.'</strong></div>');
        redirect('admin/hasil_periksa');
    } 
}

public function input_rawat()
{
    $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
    $this->form_validation->set_rules('dokter', 'Dokter', 'required|trim');
    $this->form_validation->set_rules('kamar', 'Kamar', 'required|trim');
    $this->form_validation->set_rules('lama_i', 'Lama Inap', 'required|trim');
    $this->form_validation->set_rules('tanggal_inap', 'Tanggal Inap', 'required|trim');
    $this->form_validation->set_rules('tanggal_selesai_inap', 'Tanggal Selesai Inap', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/rawat');
        echo "gak masuk";
    } else {
        $this->Model_Tambah->insert_rawat();
        $this->Model_Update->update_status();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Rawat Sudah di Ditambahkan</div>');
        redirect('admin/rawat');
    } 
}

public function input_pembayaran()
{
    $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
    $this->form_validation->set_rules('jenis_tindakan', 'Jenis Tindakan', 'required|trim');
    $this->form_validation->set_rules('biaya_periksa', 'Biaya Periksa', 'required|trim');
    $this->form_validation->set_rules('total', 'Total', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/pembayaran');
        echo "gak masuk";
    } else {

        $this->Model_Tambah->insert_pembayaran();
        //$this->Model_Update->update_stok($stokakhir);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pasien Sudah Membayar Administrasi</div>');
        redirect('admin/pembayaran');
    } 
}

public function input_user()
{

    $this->form_validation->set_rules('nama_u', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('username', 'username', 'required|trim');
    $this->form_validation->set_rules('password', 'password', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_u', 'Jenis Kelamin User', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir_u', 'Tanggal Lahir User', 'required|trim');
    $this->form_validation->set_rules('notelp_u', 'No Telepon', 'required|trim');
    $this->form_validation->set_rules('email_u', 'Email', 'required|trim');
    $this->form_validation->set_rules('jabatan_u', 'Jabatan U', 'required|trim');
    $this->form_validation->set_rules('alamat_u', 'Alamat User', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/user');
        echo "gak masuk";
    } else {
        $this->Model_Tambah->insert_user();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Sudah di Ditambahkan</div>');
        redirect('admin/user');
        echo "masuk";
    } 
}

public function input_dokter()
{

    $this->form_validation->set_rules('nama_d', 'Nama Dokter', 'required|trim');
    $this->form_validation->set_rules('spesialis', 'Spesialis', 'required|trim');
    $this->form_validation->set_rules('jam_praktek', 'Jam Praktik', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_d', 'Gender Dokter', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/dokter');
        echo "gak masuk";
    } else {
        $this->Model_Tambah->insert_dokter();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dokter Sudah di Ditambahkan</div>');
        redirect('admin/dokter');
    } 
}

public function input_kamar()
{

    $this->form_validation->set_rules('nama_k', 'Nama Kamar', 'required|trim');
    $this->form_validation->set_rules('no_k', 'No Kamar', 'required|trim');
    $this->form_validation->set_rules('kelas_k', 'Kelas Kamar', 'required|trim');
    $this->form_validation->set_rules('status_k', 'Status Kamar', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/kamar');
        echo "gak masuk";
    } else {
        $this->Model_Tambah->insert_kamar();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kamar Sudah di Ditambahkan</div>');
        redirect('admin/kamar');
    } 
}

public function input_spesialis()
{

    $this->form_validation->set_rules('nama_s', 'Nama Spesialis', 'required|trim');
    
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/spesialis');
        echo "gak masuk";
    } else {
        $this->Model_Tambah->insert_spesialis();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Spesialis Sudah di Ditambahkan</div>');
        redirect('admin/spesialis');
    } 
}

public function hapus_pasien($id)
{
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pasien Sudah di Hapus</div>');
    $this->Model_Hapus->hapus_pasien($id);
    redirect('admin/pasien');
}

public function hapus_kamar($id)
{
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kamar Sudah di Hapus</div>');
    $this->Model_Hapus->hapus_kamar($id);
    redirect('admin/kamar');
}

public function hapus_dokter($id)
{
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dokter Sudah di Hapus</div>');
    $this->Model_Hapus->hapus_dokter($id);
    redirect('admin/dokter');
}

public function hapus_spesialis($id)
{
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Spesialis Sudah di Hapus</div>');
    $this->Model_Hapus->hapus_spesialis($id);
    redirect('admin/spesialis');
}

public function hapus_user($id)
{
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Sudah di Hapus</div>');
    $this->Model_Hapus->hapus_user($id);
    redirect('admin/user');
}

public function update_pasien()
{
    $this->form_validation->set_rules('nama_p', 'Nama Pasien', 'required|trim');
    $this->form_validation->set_rules('umur_p', 'Umur Pasien', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir_p', 'Tanggal Lahir Pasien', 'required|trim');
    $this->form_validation->set_rules('notelp_p', 'No Telepon Pasien', 'required|trim');
    $this->form_validation->set_rules('alamat_p', 'Alamat Pasien', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_p', 'Gender Pasien', 'required|trim');
    $this->form_validation->set_rules('kota_p', 'Kota Pasien', 'required|trim');
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/edit_pasien');
    } else {
        $this->Model_Update->update_pasien();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pasien Sudah di Diubah</div>');
        redirect('admin/pasien');
    }
}

public function update_user()
{
    $this->form_validation->set_rules('nama_u', 'Nama Lengkap', 'required|trim');
    $this->form_validation->set_rules('username', 'username', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_u', 'Jenis Kelamin User', 'required|trim');
    $this->form_validation->set_rules('tanggal_lahir_u', 'Tanggal Lahir User', 'required|trim');
    $this->form_validation->set_rules('notelp_u', 'No Telepon', 'required|trim');
    $this->form_validation->set_rules('email_u', 'Email', 'required|trim');
    $this->form_validation->set_rules('alamat_u', 'Alamat User', 'required|trim');
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/edit_user');
    } else {
        $this->Model_Update->update_user();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Sudah di Diubah</div>');
        redirect('admin/dashboard');
    }
}

public function update_dokter()
{
    $this->form_validation->set_rules('nama_d', 'Nama Dokter', 'required|trim');
    $this->form_validation->set_rules('id_spesialis', 'Spesialis', 'required|trim');
    $this->form_validation->set_rules('jam_praktek', 'Jam Praktik', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin_d', 'Gender Dokter', 'required|trim');
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/edit_dokter');
    } else {
        $this->Model_Update->update_dokter();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dokter Sudah di Diubah</div>');
        redirect('admin/dokter');
    }
}
public function update_kamar()
{
    $this->form_validation->set_rules('nama_k', 'Nama Kamar', 'required|trim');
    $this->form_validation->set_rules('no_k', 'No Kamar', 'required|trim');
    $this->form_validation->set_rules('kelas_k', 'Kelas Kamar', 'required|trim');
    $this->form_validation->set_rules('status_k', 'Status Kamar', 'required|trim');
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/edit_kamar');
    } else {
        $this->Model_Update->update_kamar();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kamar Sudah di Diubah</div>');
        redirect('admin/kamar');
    }
}

public function update_spesialis()
{
    $this->form_validation->set_rules('nama_s', 'Nama Spesialis', 'required|trim');
    if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger col-md-12 text-center" role="alert">Isi data dengan lengkap</div>');
        redirect('admin/edit_spesialis');
    } else {
        $this->Model_Update->update_spesialis();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Spesialis Sudah di Diubah</div>');
        redirect('admin/spesialis');
    }
}

}
