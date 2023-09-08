<?php
class Pegawai_model extends CI_Model
{
    public function getAllPegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahDataPegawai()
    {
        $data = [
            "pegawai_nama" => $this->input->post('nama'),
            "pegawai_jabatan" => $this->input->post('jabatan'),
            "pegawai_umur" => $this->input->post('umur'),
            "pegawai_alamat" => $this->input->post('alamat')
        ];

        $this->db->insert('pegawai', $data);
    }

    public function getPegawaiById($id)
    {
        return $this->db->get_where('pegawai', ['pegawai_id' => $id])->row_array();
    }

    public function hapusDataPegawai($id)
    {
        $this->db->where('pegawai_id', $id);
        $this->db->delete('pegawai');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pegawai');
    }

    public function ubahDataPegawai()
    {
        $data = [
            'pegawai_nama' => $this->input->post('nama'),
            'pegawai_jabatan' => $this->input->post('jabatan'),
            'pegawai_umur' => $this->input->post('umur'),
            'pegawai_alamat' => $this->input->post('alamat')
        ];

        $this->db->update('pegawai', $data, ['pegawai_id' => $this->input->post('id')]);
    }
}
