<?php

class perkebunan extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Web Sekolah',
      'isi' => 'perkebunan'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
