<?php
class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model', 'pegawai');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['judul'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->pegawai->getAllPegawai();
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tambah data';
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->pegawai->tambahDataPegawai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pegawai');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pegawai';
        $data['pegawai'] = $this->pegawai->getPegawaiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->pegawai->hapusDataPegawai($id);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data';
        $data['p'] = $this->pegawai->getPegawaiById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pegawai->ubahDataPegawai($id);
            $this->session->set_flashData('flash', 'Diubah');
            redirect('pegawai');
        }
    }
}
