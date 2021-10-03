<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Individu_model');
        $this->load->model('Makan_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Menigkatkan Imun';
        $data['cek'] = 'meningkatkan_imun';

        $data['individu'] = $this->Individu_model->get_individu($this->session->userdata['id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('imun/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_individu()
    {
        $data['judul'] = 'Menigkatkan Imun';
        $data['cek'] = 'meningkatkan_imun';

        $data['jenis_kelamin'] = $this->Individu_model->getJenisKelamin();
        $data['aktivitas'] = $this->Individu_model->getAktivitas();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('berat', 'Berat Badan', 'required');
        $this->form_validation->set_rules('tinggi', 'Tinggi Badan', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('imun/tambah_individu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Individu_model->tambah();
            $this->session->set_flashdata('flash', 'Di Tambah!');
            redirect('imun');
        }
    }

    public function detail_individu($id)
    {
        $data['judul'] = 'Pangan';
        $individu = $this->Individu_model->get_individu_by_id($id);

        $tinggi_badan_m = $individu['tinggi'] / 100;
        $tb_kuadrat = $tinggi_badan_m * $tinggi_badan_m;
        $imt = $individu['berat'] / $tb_kuadrat;
        $data['imt'] = $imt;



        // var_dump($data);
        // exit;

        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['cek'] = 'meningkatkan_imun';
        $data['individu'] = $individu;



        // var_dump($data['pangan']);
        // exit;

        $this->form_validation->set_rules('makan', 'Makan', 'required');
        $this->form_validation->set_rules('waktu_makan', 'Waktu Makan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['pangan'] = $this->Makan_model->get_pangan_individu($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('imun/detail_individu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Makan_model->tambah_pangan();
            $this->session->set_flashdata('flash', 'Di Tambah!');

            $data['pangan'] = $this->Makan_model->get_pangan_individu($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('imun/detail_individu', $data);
            $this->load->view('templates/footer');
        }
    }

    public function ajax_get_makan($id)
    {
        $data = $this->Makan_model->getMakanByJenisMakanan($id, null);
        echo json_encode($data);
    }



    public function ajax_get_pangan($id_individu, $tgl)
    {
        $data = $this->Individu_model->get_pangan($id_individu,  $tgl);
        echo json_encode($data);
    }

    public function detail_nutrisi($id, $tgl)
    {
        $data['judul'] = 'Pangan';
        $individu = $this->Individu_model->get_individu_by_id($id);
        $data_nutrisi = $this->Individu_model->get_nutrisi($id,  $tgl);

        $tinggi_badan_m = $individu['tinggi'] / 100;
        $tb_kuadrat = $tinggi_badan_m * $tinggi_badan_m;
        $imt = $individu['berat'] / $tb_kuadrat;
        $data['imt'] = $imt;

        if ($individu['id_jenis_kelamin'] == 1) {
            $berat_badan = 13.7 * $this->input->post('berat_badan', true);
            $tinggi_badan = 5 * $this->input->post('tinggi_badan', true);
            $usia = 6.8 * $this->input->post('usia', true);

            $bmr =  66 + $berat_badan + $tinggi_badan - $usia;
        } elseif ($individu['id_jenis_kelamin'] == 2) {
            $berat_badan = 9.6 * $this->input->post('berat_badan', true);
            $tinggi_badan = 1.8 * $this->input->post('tinggi_badan', true);
            $usia = 4.7 * $this->input->post('usia', true);

            $bmr =  65 + $berat_badan + $tinggi_badan - $usia;
        }

        if ($individu['id_aktivitas']  == 1) {
            $hasil_bmr = $bmr * 1.2;
        } elseif ($individu['id_aktivitas']  == 2) {
            $hasil_bmr = $bmr * 1.375;
        } elseif ($individu['id_aktivitas']  == 3) {
            $hasil_bmr = $bmr * 1.55;
        } elseif ($individu['id_aktivitas']  == 4) {
            $hasil_bmr = $bmr * 1.725;
        } elseif ($individu['id_aktivitas']  == 5) {
            $hasil_bmr = $bmr * 1.9;
        }

        $protein = $hasil_bmr * 15 / 100;
        $lemak = $hasil_bmr * 20 / 100;
        $karbohidrat = $hasil_bmr * 60 / 100;

        $data['protein'] = $protein / 4;
        $data['lemak'] = $lemak / 9;
        $data['karbohidrat'] = $karbohidrat / 4;
        $data['kalori'] = $hasil_bmr;

        $data['p_protein'] = $data_nutrisi['protein'] / $data['protein'] * 100;
        $data['p_lemak'] =  $data_nutrisi['lemak'] / $data['protein']  * 100;
        $data['p_karbohidrat'] = $data_nutrisi['karbo']  / $data['protein'] *  100;
        $data['p_kalori'] = $data_nutrisi['kalori']  / $hasil_bmr * 100;
        $data['nutrisi'] = $data_nutrisi;

        $data['judul'] = 'Pangan';
        $individu = $this->Individu_model->get_individu_by_id($id);

        $tinggi_badan_m = $individu['tinggi'] / 100;
        $tb_kuadrat = $tinggi_badan_m * $tinggi_badan_m;
        $imt = $individu['berat'] / $tb_kuadrat;
        $data['imt'] = $imt;



        // var_dump($data);
        // exit;

        $data['jenis_makanan'] = $this->Makan_model->getJenisMakan();
        $data['cek'] = 'meningkatkan_imun';
        $data['individu'] = $individu;



        // var_dump($data['pangan']);
        // exit;

        $this->form_validation->set_rules('makan', 'Makan', 'required');
        $this->form_validation->set_rules('waktu_makan', 'Waktu Makan', 'required');



        $data['pangan'] = $this->Makan_model->get_pangan_individu($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('imun/detail_nutrisi', $data);
        $this->load->view('templates/footer');
    }
}
