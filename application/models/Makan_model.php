<?php
class Makan_model extends CI_Model
{
    public function getALl()
    {
        $this->db->select('makan.*,  jenis_makan.nama as nama_jenis_makan');
        $this->db->join('jenis_makan', 'jenis_makan.id = makan.id_jenis_makan');
        $this->db->order_by('id', 'ASC');
        return $this->db->get('makan')->result_array();
    }

    public function getMakanById($id)
    {
        $this->db->select('makan.*,  jenis_makan.nama as nama_jenis_makan,jenis_makan.id as id_jenis_makan');
        $this->db->join('jenis_makan', 'jenis_makan.id = makan.id_jenis_makan');
        $query = $this->db->get_where('makan', array('makan.id' => $id));
        return $query->row_array();
    }

    public function getMakanByJenisMakanan($jenis_makan, $limit)
    {
        if ($limit == null) {
            $this->db->select('makan.*');
            $query = $this->db->get_where('makan', array('makan.id_jenis_makan' => $jenis_makan));
            return $query->result_array();
        } else {
            $this->db->select('makan.*');
            $this->db->limit($limit);
            $query = $this->db->get_where('makan', array('makan.id_jenis_makan' => $jenis_makan));
            return $query->result_array();
        }
    }

    public function tambahMakan($foto)
    {

        $makan = array(
            'nama' => $this->input->post('nama', true),
            'karbo' => $this->input->post('karbo', true),
            'protein' => $this->input->post('protein', true),
            'lemak' => $this->input->post('lemak', true),
            'kalori' => $this->input->post('kalori', true),
            'berat' => $this->input->post('berat', true),
            'id_jenis_makan' => $this->input->post('jenis_makanan', true),
            'foto' => $foto,
        );
        $this->db->insert('makan', $makan);
    }

    public function ubahMakan($foto)
    {


        /* update tbl makan */
        if ($foto ==  null) {
            $makan = array(
                'nama' => $this->input->post('nama', true),
                'karbo' => $this->input->post('karbo', true),
                'protein' => $this->input->post('protein', true),
                'lemak' => $this->input->post('lemak', true),
                'kalori' => $this->input->post('kalori', true),
                'berat' => $this->input->post('berat', true),
                'id_jenis_makan' => $this->input->post('jenis_makanan', true),
            );

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('makan', $makan);
        } else {
            $makan = array(
                'nama' => $this->input->post('nama', true),
                'karbo' => $this->input->post('karbo', true),
                'protein' => $this->input->post('protein', true),
                'lemak' => $this->input->post('lemak', true),
                'kalori' => $this->input->post('kalori', true),
                'berat' => $this->input->post('berat', true),
                'id_jenis_makan' => $this->input->post('jenis_makanan', true),
                'foto' => $foto,
            );

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('makan', $makan);

            $old_img = $this->input->post('img_old', true);
            if ($old_img != 'default.jpg') {
                unlink(FCPATH . 'assets/img/profile/' . $old_img);
            }
        }
    }

    public function hapusMakan($id)
    {
        $this->db->delete('makan', ['id' => $id]);
    }

    public function getJenisMakan()
    {
        return $this->db->get('jenis_makan')->result_array();
    }

    public function getJenisMakanById($id)
    {
        return $this->db->get_where('jenis_makan', array('id' => $id))->row_array();
    }

    public function tambahJenisMakanan()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
        );
        $this->db->insert('jenis_makan', $data);
    }

    public function ubahJenisMakanan()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jenis_makan', $data);
    }

    public function tambah_pangan()
    {
        $makan = array(
            'id_individu' => $this->input->post('individu', true),
            'id_makan' => $this->input->post('makan', true),
            'tanggal' => $this->input->post('tanggal', true),
        );

        $this->db->insert('pangan', $makan);
    }

    public function get_pangan_individu($id)
    {
        $this->db->group_by("tanggal");
        $query = $this->db->get_where('pangan', array('pangan.id_individu' => $id));
        return $query->result_array();
    }
}
