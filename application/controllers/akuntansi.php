<?php

class akuntansi extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Web Sekolah',
      'isi' => 'akuntansi'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
