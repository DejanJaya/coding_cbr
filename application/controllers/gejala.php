<?php

class Gejala extends CI_Controller
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
        $data['gejala'] = $this->models_data->get('gejala');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/index', $data);
        $this->load->view('templates/footer');
    }

    function add()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/add');
        $this->load->view('templates/footer');
    }

    function proses_add()
    {
        $this->form_validation->set_rules('kd_gejala', 'Kode Gejala', 'required|trim', ['required' => 'Kode gejala harus diisi']);
        $this->form_validation->set_rules('gejala', 'Gejala', 'required|trim', ['required' => 'Gejala harus diisi']);

        if ($this->form_validation->run() == true) {
            $data['title'] = "Gejala";
            $data = [
                'kd_gejala'          => $this->input->post('kd_gejala'),
                'gejala'          => $this->input->post('gejala')
            ];
            $save = $this->models_data->insert('gejala', $data);
            if ($save) {
                echo "<script>";
                echo "alert('Data berhasil ditambah')";
                echo "</script>";
                redirect(base_url('gejala'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal ditambah')";
                echo "</script>";
                redirect(base_url('gejala/add'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('gejala/add');
        }
    }

    function edit($kd_gejala)
    {
        $where = [
            'kd_gejala' => $kd_gejala,
        ];
        $gejala = $this->models_data->tampilSatu('gejala', $where)->row();
        $data = ['gejala' => $gejala];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gejala/edit', $data);
        $this->load->view('templates/footer');
    }

    function proses_edit()
    {
        $this->form_validation->set_rules('kd_gejala', 'Kode Gejala', 'required|trim', ['required' => 'Kode gejala harus diisi']);
        $this->form_validation->set_rules('gejala', 'Gejala', 'required|trim', ['required' => 'Gejala harus diisi']);

        $kd_gejala       = $this->input->post('kd_gejala');
        if ($this->form_validation->run() == true) {
            $data['title'] = "Gejala";
            $data = [
                'kd_gejala'          => $this->input->post('kd_gejala'),
                'gejala'          => $this->input->post('gejala')
            ];
            $where = [
                'kd_gejala'    =>  $kd_gejala
            ];
            $ubah = $this->models_data->ubah('gejala', $data, $where);
            if ($ubah) {
                echo "<script>";
                echo "alert('Data berhasil di ubah')";
                echo "</script>";
                redirect(base_url('gejala'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal di ubah')";
                echo "</script>";
                redirect(base_url('gejala/edit'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('gejala/edit');
        }
    }

    public function delete($kd_gejala)
    {
        $where = ['kd_gejala' => $kd_gejala];
        $this->models_data->delete($where, 'gejala');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
        redirect('gejala');
    }
}
