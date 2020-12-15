<?php

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');
    }
    public function index()
    {
        $data = array(
            'title' => 'SMK Agak Pintar',
            'title2' => 'Gallery Foto',
            'gallery' => $this->m_gallery->lists(),
            'isi' => 'admin/gallery/v_list'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {

        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './sampul/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'SMK Agak Pintar',
                    'title2' => 'Add Gallery Foto',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/gallery/v_add'
                );

                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_gallery'   => $this->input->post('nama_gallery'),
                    'sampul'  => $upload_data['uploads']['file_name']

                );

                $this->m_gallery->add($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil di Simpan !!!');
                redirect('gallery');
            }
        }
        $data = array(
            'title' => 'SMK Agak Pintar',
            'title2' => 'Add Gallery Foto',
            'gallery' => $this->m_gallery->lists(),
            'isi' => 'admin/gallery/v_add'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
