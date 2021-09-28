<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('templateslogin/header');
        $this->load->view('v_register');
        $this->load->view('templateslogin/footer');
    }

    public function proses()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]|is_unique[admin.nama]', ['is_unique' => 'Nama Anda Sudah Terdaftar']);
        $this->form_validation->set_rules('nik', 'nik', 'trim|required|is_numeric|min_length[1]|max_length[17]|is_unique[admin.nik]', ['is_unique' => 'Nik Anda Sudah Terdaftar', 'is_numeric' => 'Nik harus berupa angka']);
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]|is_unique[admin.email]', ['is_unique' => 'Email Anda Sudah Terdaftar !']);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_length[255]|matches[password2]', ['matches' => 'Password Kamu Tidak Cocok!']);
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            $password = $this->input->post('password');


            $this->auth->register($nama, $nik, $email, $password);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('register');
        }
    }
}
