<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kebutuhanzatgizi extends CI_Controller
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
        $data['judul'] = 'Kebutuhan Zat Gizi';
        $data['cek'] = 'kebutuhan_zat_gizi';

        $data['jenis_kelamin'] = $this->Individu_model->getJenisKelamin();
        $data['aktivitas'] = $this->Individu_model->getAktivitas();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('kebutuhan_zat_gizi/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['judul'] = 'Kebutuhan Zat Gizi';
        $data['cek'] = 'kebutuhan_zat_gizi';

        if ($this->input->post('jenis_kelamin', true) == 1) {
            $berat_badan = 13.7 * $this->input->post('berat_badan', true);
            $tinggi_badan = 5 * $this->input->post('tinggi_badan', true);
            $usia = 6.8 * $this->input->post('usia', true);

            $bmr =  66 + $berat_badan + $tinggi_badan - $usia;
        } elseif ($this->input->post('jenis_kelamin', true) == 2) {
            $berat_badan = 9.6 * $this->input->post('berat_badan', true);
            $tinggi_badan = 1.8 * $this->input->post('tinggi_badan', true);
            $usia = 4.7 * $this->input->post('usia', true);

            $bmr =  65 + $berat_badan + $tinggi_badan - $usia;
        }

        if ($this->input->post('aktivitas', true) == 1) {
            $hasil_bmr = $bmr * 1.2;
        } elseif ($this->input->post('aktivitas', true) == 2) {
            $hasil_bmr = $bmr * 1.375;
        } elseif ($this->input->post('aktivitas', true) == 3) {
            $hasil_bmr = $bmr * 1.55;
        } elseif ($this->input->post('aktivitas', true) == 4) {
            $hasil_bmr = $bmr * 1.725;
        } elseif ($this->input->post('aktivitas', true) == 5) {
            $hasil_bmr = $bmr * 1.9;
        }

        $protein = $hasil_bmr * 15 / 100;
        $lemak = $hasil_bmr * 20 / 100;
        $karbohidrat = $hasil_bmr * 60 / 100;

        $data['protein'] = $protein / 4;
        $data['lemak'] = $lemak / 9;
        $data['karbohidrat'] = $karbohidrat / 4;
        $data['kalori'] = $hasil_bmr;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('kebutuhan_zat_gizi/hasil', $data);
        $this->load->view('templates/footer');
    }
}
