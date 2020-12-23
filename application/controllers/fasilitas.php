<?php

class fasilitas extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Fasilitas',
      'isi' => 'v_fasilitas'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
