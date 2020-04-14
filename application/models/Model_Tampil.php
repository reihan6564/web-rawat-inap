<?php
class Model_Tampil extends CI_Model
{
    
    public function tampil_pasien()
    {
        return $this->db->get('tb_pasien')->result_array();
    } 
    public function tampil_dokter()
    {
        return $this->db->get('tb_dokter')->result_array();
    }
    public function tampil_spesialis()
    {
        return $this->db->get('tb_spesialis')->result_array();
    }
    public function tampil_kamar()
    {
        return $this->db->get('tb_kamar')->result_array();
    }
    public function tampil_user()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function tampil_detail_pasien()
    {
        return $this->db->get('tb_detail_pasien')->result_array();
    }
    public function tampil_rawat()
    {
        return $this->db->get('tb_rawat')->result_array();
    }
    public function tampil_pembayaran()
    {
        return $this->db->get('tb_pembayaran')->result_array();
    }
    

    public function hitung_pas()
    {
        $query = "SELECT count(id_pasien) as pasien_j FROM tb_pasien";
        return $this->db->query($query)->result_array();
    }
    public function hitung_kam()
    {
        $query = "SELECT count(id_kamar) as kamar_j FROM tb_kamar";
        return $this->db->query($query)->result_array();
    }
    public function hitung_raw()
    {
        $query = "SELECT count(id_rawat) as rawat_j FROM tb_rawat";
        return $this->db->query($query)->result_array();
    }
    public function hitung_traw()
    {
        $query = "SELECT count(id_detail_pasien) as trawat_j FROM tb_detail_pasien where ketentuan_dirawat = 'tidak' ";
        return $this->db->query($query)->result_array();
    }
}
