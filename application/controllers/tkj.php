<?php

class tkj extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Web Sekolah',
      'isi' => 'tkj'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
