<?php

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapel');
    }
    public function index()
    {
        $data = array(
            'title' => 'SMK Agak Pintar',
            'title2' => 'Mata Pelajaran',
            'mapel' => $this->m_mapel->lists(),
            'isi' => 'admin/mapel/v_list'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public  function add()
    {
        $this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'SMK Agak Pintar',
                'title2' => ' Add Mapel',
                'isi' => 'admin/mapel/v_add'
            );

            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {

            $data = array(
                'nama_mapel' => $this->input->post('nama_mapel'),

            );

            $this->m_mapel->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan !!!');
            redirect('mapel');
        }
    }

    public  function edit($id_mapel)
    {
        $this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'SMK Agak Pintar',
                'title2' => ' Edit Mapel',
                'mapel' => $this->m_mapel->detail($id_mapel),
                'isi' => 'admin/mapel/v_edit'
            );

            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {

            $data = array(
                'id_mapel' => $id_mapel,
                'nama_mapel' => $this->input->post('nama_mapel'),

            );

            $this->m_mapel->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Edit !!!');
            redirect('mapel');
        }
    }

    public  function delete($id_mapel)
    {
        $data = array(
            'id_mapel' => $id_mapel,

        );

        $this->m_mapel->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil diHapus !!!');
        redirect('mapel');
    }
}
