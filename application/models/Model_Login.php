<?php
class Model_Login extends CI_Model
{
    function chek_login($username, $password)
    {
        $chek = $this->db->get_where('tb_admin', array('username' => $username, 'password' => $password));
        if ($chek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function registrasi_akun()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama_u' => htmlspecialchars($this->input->post('nama_u', true)),
            'jenis_kelamin_u' => htmlspecialchars($this->input->post('jenis_kelamin_u', true)),
            'tanggal_lahir_u' => htmlspecialchars($this->input->post('tanggal_lahir_u', true)),
            'email_u' => htmlspecialchars($this->input->post('email_u', true)),
            'alamat_u' => htmlspecialchars($this->input->post('alamat_u', true)),
            'notelp_u' => htmlspecialchars($this->input->post('notelp_u', true)),
            'jabatan_u' => htmlspecialchars($this->input->post('jabatan_u', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        $this->db->insert('tb_user', $data);
    }
}
