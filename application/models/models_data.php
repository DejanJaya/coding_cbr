<?php

class Models_data extends CI_Model
{
    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getRelasi()
    {
        $this->db->join('gejala g', 'r.kd_gejala = g.kd_gejala');
        $this->db->join('penyakit_solusi p', 'r.kd_penyakit = p.kd_penyakit');
        $this->db->where('r.kd_gejala = g.kd_gejala');
        $this->db->where('r.kd_penyakit = p.kd_penyakit');
        return $this->db->get('relasi r')->result_array();
    }

    public function tampilSatu($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    public function ubah($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
