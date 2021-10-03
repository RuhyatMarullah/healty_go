<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekomendasimakanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Makan_model');
        if (is_null($this->session->userdata('id'))) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Rekomendasi Makan';
        $data['cek'] = 'rekomendasi_makanan';

        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['makan'] = [];

        foreach ($data['jenis_makanan']  as $jenis_makanan) {
            $makan = $this->Makan_model->getMakanByJenisMakanan($jenis_makanan['id'], 5);
            foreach ($makan as $m) {
                array_push($data['makan'], $m);
            }
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('rekomendasi_makanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil($id)
    {
        $data['judul'] = 'Rekomendasi Makan';
        $data['cek'] = 'rekomendasi_makanan';

        $data['jenis_makanan'] = $this->Makan_model->getJenisMakanById($id);
        $data['makan'] = $this->Makan_model->getMakanByJenisMakanan($id, null);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('rekomendasi_makanan/hasil', $data);
        $this->load->view('templates/footer');
    }
}
