<?php
class Model_Update extends CI_Model
{
    public function update_pasien()
    {
        $data = [
            'nama_p' => htmlspecialchars($this->input->post('nama_p', true)),
            'umur_p' => htmlspecialchars($this->input->post('umur_p', true)),
            'tanggal_lahir_p' => htmlspecialchars($this->input->post('tanggal_lahir_p', true)),
            'notelp_p' => htmlspecialchars($this->input->post('notelp_p', true)),
            'alamat_p' => htmlspecialchars($this->input->post('alamat_p', true)),
            'jenis_kelamin_p' => htmlspecialchars($this->input->post('jenis_kelamin_p', true)),
            'kota_p' => htmlspecialchars($this->input->post('kota_p', true))
        ];
        $id = $this->input->post('id_p');
        $this->db->where('id_pasien', $id);
        $this->db->update('tb_pasien', $data);
    }

    public function update_dokter()
    {
       $data = [
        'nama_d' => htmlspecialchars($this->input->post('nama_d', true)),
        'id_spesialis' => htmlspecialchars($this->input->post('id_spesialis', true)),
        'jam_praktek' => htmlspecialchars($this->input->post('jam_praktek', true)),
        'jenis_kelamin_d' => htmlspecialchars($this->input->post('jenis_kelamin_d', true))
    ];
    $id = $this->input->post('id_d');
    $this->db->where('id_dokter', $id);
    $this->db->update('tb_dokter', $data);
}    
public function update_spesialis()
{
    $data = [
        'nama_spesialis' => htmlspecialchars($this->input->post('nama_s', true))
    ];
    $id = $this->input->post('id_s');
    $this->db->where('id_spesialis', $id);
    $this->db->update('tb_spesialis', $data);
}      

public function update_kamar()
{
   $data = [
    'nama_k' => htmlspecialchars($this->input->post('nama_k', true)),
    'no_k' => htmlspecialchars($this->input->post('no_k', true)),
    'kelas_k' => htmlspecialchars($this->input->post('kelas_k', true)),
    'status_k' => htmlspecialchars($this->input->post('status_k', true))
];
$id = $this->input->post('id_k');
$this->db->where('id_kamar', $id);
$this->db->update('tb_kamar', $data);
}

public function update_status()
{
   $data = [
    'status_k' => 'terisi'
];
$id = $this->input->post('kamar');
$this->db->where('id_kamar', $id);
$this->db->update('tb_kamar', $data);
}

public function update_user()
{
    if ($this->input->post('password')) {
        if($this->input->post('jabatan_u')){
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
                'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
                'email_u' => htmlspecialchars($this->input->post('email_u', true)),
                'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
                'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true)),
                'jabatan_u' => htmlspecialchars($this->input->post('jabatan_u', true))
            ];
        }else{
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
                'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
                'email_u' => htmlspecialchars($this->input->post('email_u', true)),
                'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
                'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true))
            ];
        }  
    }else{
        if($this->input->post('jabatan_u')){
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
                'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
                'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
                'email_u' => htmlspecialchars($this->input->post('email_u', true)),
                'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
                'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true)),
                'jabatan_u' => htmlspecialchars($this->input->post('jabatan_u', true))
            ];
        }else{
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
                'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
                'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
                'email_u' => htmlspecialchars($this->input->post('email_u', true)),
                'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
                'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true))
            ];
        }
        
    }
    $id = $this->input->post('id_u');
    $this->db->where('id_user', $id);
    $this->db->update('tb_user', $data);
}


}
