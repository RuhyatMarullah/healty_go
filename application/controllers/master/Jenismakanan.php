<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenismakanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Makan_model');
        $this->load->library('form_validation');
        if (is_null($this->session->userdata('id'))) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['judul'] = 'Jenis Makanan';
        $data['cek'] = 'data_master';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('master/jenis_makanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Form Tambah Jenis Makanan';
        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['cek'] = 'data_master';

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('master/jenis_makanan/add', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Makan_model->tambahJenisMakanan();
            $this->session->set_flashdata('flash', 'Di tambahkan');
            redirect('master/jenismakanan');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Tambah Jenis Makanan';
        $data['jenis_makanan'] = $this->Makan_model->getJenisMakanById($id);
        $data['cek'] = 'data_master';

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('master/jenis_makanan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Makan_model->ubahJenisMakanan();
            $this->session->set_flashdata('flash', 'Di Ubah!');
            redirect('master/jenismakanan');
        }
    }
}
