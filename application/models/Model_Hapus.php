<?php
class Model_Hapus extends CI_Model
{
    public function hapus_pasien($id)
    {
        $this->db->delete('tb_pasien', ['id_pasien' => $id]);
    }

    public function hapus_dokter($id)
    {
        $this->db->delete('tb_dokter', ['id_dokter' => $id]);
    }

    public function hapus_spesialis($id)
    {
        $this->db->delete('tb_spesialis', ['id_spesialis' => $id]);
    }
	
	public function hapus_kamar($id)
    {
        $this->db->delete('tb_kamar', ['id_kamar' => $id]);
    }

    public function hapus_user($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
    }
}
