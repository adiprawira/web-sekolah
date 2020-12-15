<?php

class Admin extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'SMK Agak Pintar',
            'title2' => 'Dashboard',
            'isi' => 'admin/v_home'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
