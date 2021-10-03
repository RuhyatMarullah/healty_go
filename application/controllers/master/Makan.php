<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Makan extends CI_Controller
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
        $data['makan'] = $this->Makan_model->getAll();
        $data['judul'] = 'Makan';
        $data['cek'] = 'data_master';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('master/makanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Form Tambah Makan';
        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['cek'] = 'data_master';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('karbo', 'Karbo', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');
        $this->form_validation->set_rules('kalori', 'Kalori', 'required|numeric');
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('master/makanan/add', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['img']['name'];
            if ($img) {
                $config['upload_path'] = './assets/img/profile';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    $new_img = $this->upload->data('file_name');
                    $this->Makan_model->tambahMakan($new_img);
                    $this->session->set_flashdata('flash', 'Di tambahkan');
                    redirect('master/makan');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Makan';
        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['makan'] = $this->Makan_model->getMakanById($id);
        $data['cek'] = 'data_master';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('karbo', 'Karbo', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');
        $this->form_validation->set_rules('kalori', 'Kalori', 'required|numeric');
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('master/makanan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['img']['name'];
            if ($img) {
                $config['upload_path'] = './assets/img/profile';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    $new_img = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $new_img = null;
            }
            $this->Makan_model->ubahMakan($new_img);
            $this->session->set_flashdata('flash', 'Di ubah');

            redirect('master/makan');
        }
    }


    public function hapus($id)
    {
        $this->Doctor_model->hapusDokter($id);
        $this->session->set_flashdata('flash', 'Di hapus');
        redirect('master/doctor');
    }
}
