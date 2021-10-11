<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['cek'] = 'dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
