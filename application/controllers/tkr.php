<?php

class tkr extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Web Sekolah',
      'isi' => 'tkr'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
