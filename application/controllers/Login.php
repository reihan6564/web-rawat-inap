<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_login');
    }

	public function index()
	{
		$this->load->view('Login/login');
	}

	public function registrasi()
	{
		$this->load->view('Login/register');
	}

	public function registrasi_akun()
	{
		$this->Model_login->registrasi_akun();
		redirect('login');
	}


	public function cek_login()
	{
		$username = htmlspecialchars($this->input->post('username'));
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-12" role="alert">Login Berhasil</div>');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
               redirect('login');
                echo $user['username'];
                echo "error";
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda tidak ada</div>');
            redirect('login');
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Telah Dilogout</div>');
        redirect('Login');
    }
}
