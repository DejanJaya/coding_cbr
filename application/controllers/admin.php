<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('models_data');
        $this->auth->cek_login();
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_admin');
        $this->load->view('templates/footer');
    }

    // function gejala()
    // {
    //     $data['gejala'] = $this->models_data->tampil_gejala()->result();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('gejala/index', $data);
    //     $this->load->view('templates/footer');
    // }
    // function penyakit()
    // {
    //     $data['penyakit'] = $this->models_data->tampil_data()->result();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('penyakit/index', $data);
    //     $this->load->view('templates/footer');
    // }
}
