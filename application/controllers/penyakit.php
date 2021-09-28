<?php

class Penyakit extends CI_Controller
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
        $data['penyakit'] = $this->models_data->get('penyakit_solusi');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/index', $data);
        $this->load->view('templates/footer');
    }

    function add()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/add');
        $this->load->view('templates/footer');
    }

    function proses_add()
    {
        $this->form_validation->set_rules('kd_penyakit', 'Kode Penyakit', 'required|trim', ['required' => 'Kode penyakit harus diisi']);
        $this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|trim', ['required' => 'Nama Penyakit harus diisi']);
        $this->form_validation->set_rules('definisi', 'Definisi', 'required|trim', ['required' => 'Definisi harus diisi']);
        $this->form_validation->set_rules('solusi', 'Solusi', 'required|trim', ['required' => 'Solusi harus diisi']);

        if ($this->form_validation->run() == true) {
            $data['title'] = "Penyakit";
            $data = [
                'kd_penyakit'          => $this->input->post('kd_penyakit'),
                'nama_penyakit'          => $this->input->post('nama_penyakit'),
                'definisi'      => $this->input->post('definisi'),
                'solusi'  => $this->input->post('solusi')
            ];
            $save = $this->models_data->insert('penyakit_solusi', $data);
            if ($save) {
                echo "<script>";
                echo "alert('Data berhasil ditambah')";
                echo "</script>";
                redirect(base_url('penyakit'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal ditambah')";
                echo "</script>";
                redirect(base_url('penyakit/add'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('penyakit/add');
        }
    }

    function edit($kd_penyakit)
    {
        $where = [
            'kd_penyakit' => $kd_penyakit,
        ];
        $penyakit = $this->models_data->tampilSatu('penyakit_solusi', $where)->row();
        $data = ['penyakit' => $penyakit];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('penyakit/edit', $data);
        $this->load->view('templates/footer');
    }

    function proses_edit()
    {
        $this->form_validation->set_rules('kd_penyakit', 'Kode Penyakit', 'required|trim', ['required' => 'Kode penyakit harus diisi']);
        $this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|trim', ['required' => 'Nama Penyakit harus diisi']);
        $this->form_validation->set_rules('definisi', 'Definisi', 'required|trim', ['required' => 'Definisi harus diisi']);
        $this->form_validation->set_rules('solusi', 'Solusi', 'required|trim', ['required' => 'Solusi harus diisi']);

        $kd_penyakit       = $this->input->post('kd_penyakit');
        if ($this->form_validation->run() == true) {
            $data['title'] = "Penyakit";
            $data = [
                'kd_penyakit'          => $this->input->post('kd_penyakit'),
                'nama_penyakit'          => $this->input->post('nama_penyakit'),
                'definisi'      => $this->input->post('definisi'),
                'solusi'  => $this->input->post('solusi')
            ];
            $where = [
                'kd_penyakit'    =>  $kd_penyakit
            ];
            $ubah = $this->models_data->ubah('penyakit_solusi', $data, $where);
            if ($ubah) {
                echo "<script>";
                echo "alert('Data berhasil di ubah')";
                echo "</script>";
                redirect(base_url('penyakit'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal di ubah')";
                echo "</script>";
                redirect(base_url('penyakit/edit'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('penyakit/edit');
        }
    }

    function delete($kd_penyakit)
    {
        $where = ['kd_penyakit' => $kd_penyakit];
        $this->models_data->delete($where, 'penyakit_solusi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
        redirect('penyakit');
    }
}
