<?php

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_home');
  }

  public function index()
  {
    $data = array(
      'title' => 'Home',
      'isi' => 'v_home'
    );

    $this->load->view('layout/v_wrapperhome', $data, false);
  }

  public function download()
  {
    $data = array(
      'title' => 'Download',
      'download' => $this->m_home->download(),
      'isi' => 'v_download'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }

  public function guru()
  {
    $data = array(
      'title' => 'Guru & Karyawan',
      'guru' => $this->m_home->guru(),
      'isi' => 'v_guru'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }

  public function berita()
  {
    $this->load->library('pagination');
    $config['base_url'] = base_url('home/berita');
    $config['total_rows'] = count($this->m_home->total_berita());
    $config['per_page'] = 8;
    $config['uri_segmen'] = 3;

    // Limit & start
    $limit =  $config['per_page'];
    $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
    //-------------
    $config['first_link']    = 'First';
    $config['last_link']     = 'Last';
    $config['next_link']     = 'Next';
    $config['prev_link']     = 'Prev';
    $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center">	<ul class="pagination_list">';
    $config['num_tag_open']  = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li clas="active"><a>';
    $config['cur_tag_close'] = '</a></li>';
    $config['next_tag_open']  = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open']  = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open']  = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open']  = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['full_tag_close'] = '</ul></div>';
    //---------------------------------------------------------

    $this->pagination->initialize($config);

    $data = array(
      'paginasi'      => $this->pagination->create_links(),
      'latets_berita' => $this->m_home->latets_berita(),
      'berita'        => $this->m_home->berita($limit, $start),
      'title'         => 'Berita',
      'isi'           => 'v_berita'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }


  public function detail_berita($slug_berita)
  {
    $data = array(
      'title' => 'Detail Berita',
      'latets_berita' => $this->m_home->latets_berita(),
      'detail_berita' => $this->m_home->detail_berita($slug_berita),
      'isi' => 'v_detail_berita'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }

  public function siswa()
  {
    $data = array(
      'title' => 'Siswa',
      'siswa' => $this->m_home->siswa(),
      'isi' => 'v_siswa'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }

  public function gallery()
  {
    $data = array(
      'title' => 'Gallery Foto',
      'gallery' => $this->m_home->gallery(),
      'isi' => 'v_gallery'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }

  public function detail_gallery($id_gallery)
  {
    $data = array(
      'title' => 'Detail Gallery Foto',
      'gallery' => $this->m_home->detail_gallery($id_gallery),
      'nama_gallery' => $this->m_home->nama_galery($id_gallery),
      'isi' => 'v_detail_gallery'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
