<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detakjantung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Individu_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Detak Jantung';
        $data['cek'] = 'detak_jantung';

        $data['jenis_kelamin'] = $this->Individu_model->getJenisKelamin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('detak_jantung/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['judul'] = 'Detak Jantung';
        $data['cek'] = 'detak_jantung';

        $tinggi_badan = $this->input->post('jenis_kelamin', true);
        $usia = $this->input->post('usia', true);

        $data['detak_jantung_maksimal'] = 220 - $usia;
        $data['detakan_per_menit'] = $data['detak_jantung_maksimal'] / 220 - 25;
        $data['detak_jantung_ideal_r'] = $data['detak_jantung_maksimal'] * 50 / 100;
        $data['detak_jantung_ideal_t'] = $data['detak_jantung_maksimal'] * 70 / 100;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('detak_jantung/hasil', $data);
        $this->load->view('templates/footer');
    }
}
