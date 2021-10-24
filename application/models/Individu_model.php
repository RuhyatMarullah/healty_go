<?php
class Individu_model extends CI_Model
{
    public function getJenisKelamin()
    {
        return $this->db->get('jenis_kelamin')->result_array();
    }

    public function getAktivitas()
    {
        return $this->db->get('aktivitas')->result_array();
    }

    public function get_individu($user_id)
    {
        $this->db->select('individu.*,jenis_kelamin.nama as nama_jenis_kelamin,aktivitas.nama as nama_aktivitas');
        $this->db->from('individu');
        $this->db->join('jenis_kelamin', 'jenis_kelamin.id = individu.id_jenis_kelamin');
        $this->db->join('aktivitas', 'aktivitas.id = individu.id_aktivitas');
        $this->db->order_by('individu.id', 'ASC');
        $this->db->where('individu.id_user', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah()
    {
        $makan = array(
            'nama' => $this->input->post('nama', true),
            'id_jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'usia' => $this->input->post('usia', true),
            'berat' => $this->input->post('berat', true),
            'tinggi' => $this->input->post('tinggi', true),
            'id_aktivitas' => $this->input->post('aktivitas', true),
            'id_user' => $this->session->userdata['id'],
        );
        $this->db->insert('individu', $makan);
    }

    public function get_individu_by_id($id)
    {
        $this->db->select('individu.*,jenis_kelamin.nama as nama_jenis_kelamin,aktivitas.nama as nama_aktivitas');
        // $this->db->from('individu');
        $this->db->join('jenis_kelamin', 'jenis_kelamin.id = individu.id_jenis_kelamin');
        $this->db->join('aktivitas', 'aktivitas.id = individu.id_aktivitas');
        $query = $this->db->get_where('individu', array('individu.id' => $id));
        return $query->row_array();
    }

    public function get_pangan($id_individu, $tgl)
    {
        $array = array('id_individu' => $id_individu, 'tanggal' => $tgl);
        $this->db->from('pangan');
        $this->db->select('pangan.*,makan.nama as nama,jenis_makan.nama as waktu');
        $this->db->join('makan', 'makan.id = pangan.id_makan');
        $this->db->join('jenis_makan', 'jenis_makan.id = makan.id_jenis_makan');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_nutrisi($id_individu, $tgl)
    {
        $array = array('id_individu' => $id_individu, 'tanggal' => $tgl);
        $this->db->from('pangan');
        $this->db->join('makan', 'makan.id = pangan.id_makan');
        $this->db->select_sum('makan.protein');
        $this->db->select_sum('makan.lemak');
        $this->db->select_sum('makan.kalori');
        $this->db->select_sum('makan.karbo');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->row_array();
    }
}
