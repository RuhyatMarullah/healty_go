<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('id')) {
            redirect('indexmasatubuh');
        }

        $this->load->view('login/index');
    }

    public function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // jika user ada
        if ($user = $this->db->get_where('user', ['email' => $email])->row_array()) {
            if (password_verify($password, $user['password'])) {

                // berhasil
                $data = [
                    'nama' => $user['nama'],
                    'id' => $user['id'],
                    'img' => $user['img'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 2) {
                    redirect('dashboard');
                } elseif ($user['role'] == 1) {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('pesan_login', '<div style="color:red;" role="alert">Password Salah!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan_login', '<div style="color:red;" role="alert"><strong>Email</strong> Tidak di temukan!</div>');
            redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[user.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('registrasi', '1');
            $this->session->set_flashdata('pesan_register', '<div style="color:red;"  role="alert"><strong>E-mail</strong> sudah terdaftar!</div>');
            redirect('login');
        }
        if ($this->input->post('password') != $this->input->post('verifikasi')) {
            $this->session->set_flashdata('pesan_register', '<div style="color:red;" role="alert">Pastikan<strong> Password Verifikasi</strong> sudah benar!</div>');
            $this->session->set_flashdata('registrasi', '1');
            redirect('login');
        }

        $this->User_model->tambahUser();
        $this->session->set_flashdata('pesan_login', '<div style="color:green;" role="alert"><strong>Registrasi</strong> berhasil!</div>');
        redirect('login');
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('img');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('login');
    }
}
