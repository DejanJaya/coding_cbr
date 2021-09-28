<?php

class Relasi extends CI_Controller
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
        $data['title'] = "Relasi";
        $data['relasi'] = $this->models_data->getRelasi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('relasi/index', $data);
        $this->load->view('templates/footer');
    }


    function add()
    {
        $data['gejala'] = $this->models_data->get('gejala');
        $data['penyakit'] = $this->models_data->get('penyakit_solusi');
        $data['relasi'] = $this->models_data->getRelasi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('relasi/add', $data);
        $this->load->view('templates/footer');
    }

    function proses_add()
    {
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', ['required' => 'Bobot harus diisi']);
        $this->form_validation->set_rules('kd_gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('kd_penyakit', 'Penyakit', 'required');



        if ($this->form_validation->run() == true) {
            // $data['id_barang'] = 'B' . $number;
            $data = [
                'bobot'          => $this->input->post('bobot'),
                'kd_gejala'          => $this->input->post('kd_gejala'),
                'kd_penyakit'        => $this->input->post('kd_penyakit')
            ];
            $save = $this->models_data->insert('relasi', $data);
            if ($save) {
                echo "<script>";
                echo "alert('Data berhasil ditambah')";
                echo "</script>";
                redirect(base_url('relasi'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal ditambah')";
                echo "</script>";
                redirect(base_url('relasi/add'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('relasi/add');
        }
    }

    function edit($id_relasi)
    {
        $data['gejala'] = $this->models_data->get('gejala');
        $data['penyakit'] = $this->models_data->get('penyakit_solusi');
        $data['relasi'] = $this->models_data->get('relasi', ['id_relasi' => $id_relasi]);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('relasi/edit', $data);
        $this->load->view('templates/footer');
    }

    function proses_edit()
    {
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', ['required' => 'Bobot harus diisi']);
        $this->form_validation->set_rules('kd_gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('kd_penyakit', 'Penyakit', 'required');
        $id_relasi       = $this->input->post('id_relasi');
        if ($this->form_validation->run() == true) {
            $data['title'] = "Relasi";
            $data = [
                'bobot'          => $this->input->post('bobot'),
                'kd_gejala'          => $this->input->post('kd_gejala'),
                'kd_penyakit'        => $this->input->post('kd_penyakit')
            ];
            $where = [
                'id_relasi'    =>  $id_relasi
            ];
            $ubah = $this->models_data->ubah('relasi', $data, $where);
            if ($ubah) {
                echo "<script>";
                echo "alert('Data berhasil di ubah')";
                echo "</script>";
                redirect(base_url('relasi'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagal di ubah')";
                echo "</script>";
                redirect(base_url('relasi/edit'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('relasi/edit');
        }
    }

    public function delete($id_relasi)
    {
        $where = ['id_relasi' => $id_relasi];
        $this->models_data->delete($where, 'relasi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
        redirect('relasi');
    }
}
