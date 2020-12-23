<?php

class visimisi extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Visi Misi',
      'isi' => 'v_visimisi'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
