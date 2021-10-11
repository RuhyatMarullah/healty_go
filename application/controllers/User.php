<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data['judul'] = 'My Profile';
        $data['cek'] = 'profile';


        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        $data['cek'] = 'edit_profile';

        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function postEdit()
    {
        $img = $_FILES['img']['name'];

        if ($img) {

            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '10000';

            $this->load->library('upload', $config);
            // $this->upload->initialize($config);


            if ($this->upload->do_upload('img')) {
                $new_img = $this->upload->data('file_name');
                $this->db->set('img', $new_img);
                $this->db->where('id', $this->session->userdata('id'));
                $this->db->update('user');
            } else {
                echo $this->upload->display_errors();
                exit;
            }
        } else {
            redirect('user');
        }

        $old_img = $this->session->userdata('img');

        if ($old_img != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_img);
        }

        $this->session->set_userdata(['img' => $new_img]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Berhasil Diubah!</div>');
        redirect('user');
    }
}
