<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indexmasatubuh extends CI_Controller
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
        $data['judul'] = 'Masa Tubuh';
        $data['cek'] = 'masa_tubuh';

        $data['jenis_kelamin'] = $this->Individu_model->getJenisKelamin();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('masa_tubuh/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['judul'] = 'Masa Tubuh';
        $data['cek'] = 'masa_tubuh';

        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $berat_badan = $this->input->post('berat_badan', true);
        $tinggi_badan = $this->input->post('tinggi_badan', true);
        $tinggi_badan_m = $tinggi_badan / 100;

        $tb_kuadrat = $tinggi_badan_m * $tinggi_badan_m;

        $imt = $berat_badan / $tb_kuadrat;

        $data['imt'] = $imt;

        if ($jenis_kelamin == 1) {
            if ($imt < 18) {
                $data['kondisi'] = 'Nilai IMT anda <18 (hasil IMT) menandakan berat badan Anda kurang(underweight).';
                $data['resiko'] = 'Berdasarkan hasil penelitian, mereka yang memiliki berat badan kurang memiliki risiko lebih besar mengalami malnutrisi, penurunan imunitas tubuh, infertilitas, osteoporosis, infeksi, proses penyembuhan luka lambat, hingga komplikasi pada saat operasi';
            } elseif ($imt < 25) {
                $data['kondisi'] = 'Nilai IMT anda 18-25 (hasil IMT), artinya Anda memiliki berat badan normal.';
                $data['resiko'] = 'Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal. Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.';
            } elseif ($imt < 27) {
                $data['kondisi'] = 'Nilai IMT anda 25-27 memiliki kelebihan berat badan.';
                $data['resiko'] = ' Kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.';
            } elseif ($imt > 27) {
                $data['kondisi'] = 'Nilai IMT anda >27 (hasil IMT) Anda dianggap mengalami obesitas.';
                $data['resiko'] = 'Obesitas meningkatkan risiko seseorang terkena diabetes tipe 2, hipertensi, penyakit jantung, stroke, osteoartritis, perlemakan hati, penyakit ginjal, dan jenis kanker tertentu.';
            }
        } elseif ($jenis_kelamin == 2) {
            if ($imt < 17) {
                $data['kondisi'] = 'Nilai IMT anda <18 (hasil IMT) menandakan berat badan Anda kurang(underweight).';
                $data['resiko'] = 'Berdasarkan hasil penelitian, mereka yang memiliki berat badan kurang memiliki risiko lebih besar mengalami malnutrisi, penurunan imunitas tubuh, infertilitas, osteoporosis, infeksi, proses penyembuhan luka lambat, hingga komplikasi pada saat operasi';
            } elseif ($imt < 23) {
                $data['kondisi'] = 'Nilai IMT anda 17-23 (hasil IMT), artinya Anda memiliki berat badan normal.';
                $data['resiko'] = 'Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal. Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.';
            } elseif ($imt < 27) {
                $data['kondisi'] = 'Nilai IMT anda 23-27 memiliki kelebihan berat badan.';
                $data['resiko'] = ' Kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.';
            } elseif ($imt > 27) {
                $data['kondisi'] = 'Nilai IMT anda >27 (hasil IMT) Anda dianggap mengalami obesitas.';
                $data['resiko'] = 'Obesitas meningkatkan risiko seseorang terkena diabetes tipe 2, hipertensi, penyakit jantung, stroke, osteoartritis, perlemakan hati, penyakit ginjal, dan jenis kanker tertentu.';
            }
        }




        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('masa_tubuh/hasil', $data);
        $this->load->view('templates/footer');
    }
}
