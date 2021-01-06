<?php
//ini model utama career center
class M_main_career_center extends CI_Model{
    //ambil data login admin
    public function get_data_log_admin($username, $password){
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('akun_admin');
    }

    //function cek nim yang sama
    public function cek_nim($nim){
        $this->db->select('id_alumni');
        $this->db->where('id_alumni', $nim);

        return $this->db->get('akun_alumni');
    }

    //function untuk mengambil data login alumni sesuai parameter yang dikirim
    public function get_data_log_alumni($nim, $password){
        $this->db->select('*');
        $this->db->where('id_alumni', $nim);
        $this->db->where('password', $password);

        return $this->db->get('akun_alumni');
    }

    //function untuk menambah akun baru alumni
    public function add_new_data_alumni($data, $table){
        $this->db->insert($table, $data);
    }
}
?>