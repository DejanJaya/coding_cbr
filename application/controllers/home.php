<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('models_data');
    }

    function index()
    {
        $this->load->view('templateshome/home');
    }

    function informasi()
    {
        $data['penyakit'] = $this->models_data->get('penyakit_solusi');
        $this->load->view('templateshome/informasi', $data);
    }
    function konsultasi()
    {
        $data['gejala'] = $this->models_data->get('gejala');
        $this->load->view('templateshome/konsultasi', $data);
    }

    function hasil_konsultasi()
    {
        $this->load->view('templateshome/hasil_konsultasi');
    }

    function proses_konsultasi()
    {
        $kd_gejala = $this->input->post('kd_gejala');

        $arr_kdgejala = array();
        $arr_nilaiakhir = array();

        foreach ($kd_gejala as $kode) {
            $this->db->select('kd_penyakit');
            $this->db->from('relasi');
            $this->db->where('kd_gejala', $kode);
            $query_bobot = $this->db->get()->row_array();
            $kd_penyakit = $query_bobot['kd_penyakit'];

            $this->db->select_sum('bobot');
            $this->db->from('relasi');
            $this->db->where('kd_penyakit', $kd_penyakit);
            $query_jumlahbobot = $this->db->get()->row_array();
            $sum_bobot = $query_jumlahbobot['bobot'];

            $this->db->select('kd_gejala');
            $this->db->from('relasi');
            $this->db->where('kd_penyakit', $kd_penyakit);
            $query_kdgejala = $this->db->get()->result_array();

            // array_push($arr_kdgejala, $query_kdgejala);
            // print_r($query_kdgejala[0]);

            $arr_nilaikemiripan = array();

            foreach ($query_kdgejala as $value) {
                $this->db->select('(nilai_kemiripan*bobot) as nilai_kemiripan');
                $this->db->from('relasi');
                $this->db->where('kd_gejala', $value['kd_gejala']);
                $nilai_kemiripan1 = $this->db->get()->row_array()['nilai_kemiripan'];

                array_push($arr_nilaikemiripan, $nilai_kemiripan1);
            }

            $jml_nilaikemiripan2 = 0;

            foreach ($arr_nilaikemiripan as $value1) {
                $jml_nilaikemiripan2 += $value1;
            }

            $data = [
                "kd_penyakit" => $kd_penyakit,
                "nilai" => (($jml_nilaikemiripan2 / $sum_bobot))
            ];
            $save = $this->models_data->insert('hasil', $data);
            array_push($arr_nilaiakhir, ($jml_nilaikemiripan2 / $sum_bobot));
            if ($save) {
                redirect(base_url('home/hasil_konsultasi'), 'refresh');
            }
        }
    }
}
