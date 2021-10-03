<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cektubuhideal extends CI_Controller
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
        $data['judul'] = 'Cek Tubuh Ideal';
        $data['cek'] = 'cek_tubuh_ideal';

        $data['jenis_kelamin'] = $this->Individu_model->getJenisKelamin();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('cek_tubuh_ideal/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['judul'] = 'Cek Tubuh Ideal';
        $data['cek'] = 'cek_tubuh_ideal';

        $tinggi_badan = $this->input->post('tinggi_badan', true);
        $usia = $this->input->post('usia', true);
        $berat_badan = $this->input->post('berat_badan', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);

        $tinggi_badan_m = $tinggi_badan / 100;
        $tb_kuadrat = $tinggi_badan_m * $tinggi_badan_m;

        $imt = $berat_badan / $tb_kuadrat;

        $data['imt'] = $imt;

        if ($jenis_kelamin == 1) {
            $data['ideal'] = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 10 / 100);
            if ($imt < 18) {
                $data['keterangan'] = 'Kurus';
            } elseif ($imt < 25) {
                $data['keterangan'] = 'Normal';
            } elseif ($imt < 27) {
                $data['keterangan'] = 'Gemuk';
            } elseif ($imt > 27) {
                $data['keterangan'] = 'Obesitas';
            }
        } elseif ($jenis_kelamin == 2) {
            $data['ideal'] = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 15 / 100);
            if ($imt < 17) {
                $data['keterangan'] = 'Kurus';
            } elseif ($imt < 23) {
                $data['keterangan'] = 'Normal';
            } elseif ($imt < 27) {
                $data['keterangan'] = 'Gemuk';
            } elseif ($imt > 27) {
                $data['keterangan'] = 'Obesitas';
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('cek_tubuh_ideal/hasil', $data);
        $this->load->view('templates/footer');
    }
}
