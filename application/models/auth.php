<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function register($nama, $nik, $email, $password)
    {
        $data_user = array(
            'nama' => $nama,
            'nik' => $nik,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)

        );
        $this->db->insert('admin', $data_user);
    }

    function login_user($email, $password)
    {
        $query = $this->db->get_where('admin', array('email' => $email));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('nama', $data_user->nama);
                $this->session->set_userdata('nik', $data_user->nik);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }
}
