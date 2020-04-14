<?php
class Model_Tambah extends CI_Model
{

    public function insert_pasien()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'nama_p' => htmlspecialchars($this->input->post('nama_p', true)),
            'umur_p' => htmlspecialchars($this->input->post('umur_p', true)),
            'tanggal_lahir_p' => htmlspecialchars($this->input->post('tanggal_lahir_p', true)),
            'notelp_p' => htmlspecialchars($this->input->post('notelp_p', true)),
            'alamat_p' => htmlspecialchars($this->input->post('alamat_p', true)),
            'jenis_kelamin_p' => htmlspecialchars($this->input->post('jenis_kelamin_p', true)),
            'kota_p' => htmlspecialchars($this->input->post('kota_p', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_pasien', $data);
    }

    public function insert_dokter()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'nama_d' => htmlspecialchars($this->input->post('nama_d', true)),
            'id_spesialis' => htmlspecialchars($this->input->post('spesialis', true)),
            'jam_praktek' => htmlspecialchars($this->input->post('jam_praktek', true)),
            'jenis_kelamin_d' => htmlspecialchars($this->input->post('jenis_kelamin_d', true))
        ];
        $this->db->insert('tb_dokter', $data);
    }

    public function insert_spesialis()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'nama_spesialis' => htmlspecialchars($this->input->post('nama_s', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_spesialis', $data);
    } 
    public function insert_kamar()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'nama_k' => htmlspecialchars($this->input->post('nama_k', true)),
            'no_k' => htmlspecialchars($this->input->post('no_k', true)),
            'kelas_k' => htmlspecialchars($this->input->post('kelas_k', true)),
            'status_k' => htmlspecialchars($this->input->post('status_k', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_kamar', $data);
    }


    public function insert_hasil($kode_p)
    {
        $tanggal = date('Y-m-d');
        $data = [
            'id_detail_pasien' => $kode_p,
            'id_pasien' => htmlspecialchars($this->input->post('pasien', true)),
            'ket' => htmlspecialchars($this->input->post('ket_dok', true)),
            'ketentuan_dirawat' => htmlspecialchars($this->input->post('ketentuan_r', true)),
            'lama_inap' => htmlspecialchars($this->input->post('lama_i', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_detail_pasien', $data);
    }

    public function insert_rawat()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'id_detail_pasien' => htmlspecialchars($this->input->post('kode', true)),
            'id_dokter' => htmlspecialchars($this->input->post('dokter', true)),
            'id_kamar' => htmlspecialchars($this->input->post('kamar', true)),
            'lama_inap' => htmlspecialchars($this->input->post('lama_i', true)),
            'tanggal_inap' => htmlspecialchars($this->input->post('tanggal_inap', true)),
            'tanggal_selesai_inap' => htmlspecialchars($this->input->post('tanggal_selesai_inap', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_rawat', $data);
    }
    public function insert_pembayaran()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'id_detail_pasien' => htmlspecialchars($this->input->post('kode', true)),
            'jenis_tindakan' => htmlspecialchars($this->input->post('jenis_tindakan', true)),
            'jumlah_p_tindakan' => htmlspecialchars($this->input->post('biaya_periksa', true)),
            'jumlah_p_inap' => htmlspecialchars($this->input->post('biaya_inap', true)),
            'total' => htmlspecialchars($this->input->post('total', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_pembayaran', $data);
    }

    public function insert_user()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
            'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
            'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
            'email_u' => htmlspecialchars($this->input->post('email_u', true)),
            'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
            'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true)),
            'jabatan_u' => htmlspecialchars($this->input->post('jabatan_u', true)),
            'tanggal' => $tanggal
        ];
        $this->db->insert('tb_user', $data);
    }

}
