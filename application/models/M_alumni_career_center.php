<?php
//model untuk alumni
class M_alumni_career_center extends CI_Model{
    //function untuk menampilkan artikel
    public function show_article(){
        $this->db->select('*');

        return $this->db->get('artikel');
    }

    //show detail article
    public function get_detail_article($id){
        $this->db->where('id_artikel', $id);

        return $this->db->get('artikel')->result();
    }

    //menampilkan thread yang ada di tabel forum thread
    public function show_data_thread_alumni($limit, $start){
        $query = $this->db->query('select * from forum_thread inner join akun_alumni on forum_thread.id_alumni = akun_alumni.id_alumni limit '.$start.','.$limit);

        return $query;
    }

    //menampilkan detail thread
    public function get_detail_thread($thread){
        $query = $this->db->query('select * from forum_thread inner join akun_alumni on forum_thread.id_alumni = akun_alumni.id_alumni where forum_thread.id_thread = '.$thread);

        return $query->result();
    }

    //total comments
    public function total_comments($id_thread){
        $query = $this->db->query('select count(pesan) as jumlah from forum_chat_thread where thread_id = '. $id_thread);

        return $query->result();
    }

    //menampilkan jumlah komentar thread
    public function get_comments($id_thread){
        $query = $this->db->query('select * from forum_chat_thread inner join akun_alumni on forum_chat_thread.id_alumni = akun_alumni.id_alumni where forum_chat_thread.thread_id = '. $id_thread);

        return $query->result();
    }

    //function untuk menambahkan thread
    public function add_new_thread($data, $table){
        $this->db->insert($table, $data);
    }

    //input komentar alumni
    public function add_new_comment($data, $table){
        $this->db->insert($table, $data);
    }

    //function untuk menampilkan data tracer study
    public function check_tracer_study($id){
        $query = $this->db->query('select * from tracer_study inner join akun_alumni on tracer_study.id_alumni = akun_alumni.id_alumni where tracer_study.id_alumni = '.$id);

        return $query;
    }

    //function untuk tambah tracer study
    public function add_tracer_study($data, $table){
        $this->db->insert($table, $data);
    }

    //edit tracer study
    public function get_edit_tracer($id_tracer){
        $this->db->select('*');
        $this->db->where('id_tracerstudy', $id_tracer);

        return $this->db->get('tracer_study')->result();
    }

    //simpan edit tracer
    public function edit_tracer($id_tracer, $data_tracer){
        $this->db->where('id_tracerstudy', $id_tracer);
        $this->db->update('tracer_study', $data_tracer);
    }

    //alumni consult
    public function get_alumni_consulting($id_alumni){
        $this->db->select('*');
        $this->db->where('id_alumni', $id_alumni);

        return $this->db->get('alumni_consult')->result();
    }

    //tambah alumni consulting
    public function add_alumni_consulting($data, $table){
        $this->db->insert($table, $data);
    }

    //function untuk menampilkan lowongan kerja
    public function show_job_vacancy($limit, $start){
        //query ini menggunakan teknik left join agar semua data lowongan yang kosong ikut tampil
        $query = $this->db->query('SELECT * FROM lowongan_kerja  limit '.$start.', '.$limit);

        return $query;
    }

    //function untuk apply job
    public function apply_job($data, $table){
        $this->db->insert($table, $data);
    }

    //function untuk menampilkan detail lowongan kerja
    public function show_detail_job($id_job){
        //$this->db->select('*');
        //$this->db->where('id_lowongan', $id_job);

        //return $this->db->get('lowongan_kerja')->result();
        $query = $this->db->query('select * from lowongan_kerja inner join mou on lowongan_kerja.nama_perusahaan = mou.id_mou where id_lowongan = '.$id_job);

        return $query->result();
    }

    //function mengambil data job fair
    public function get_data_job_fair(){
        $this->db->select('*');

        return $this->db->get('job_fair');
    }
    
    /* group grafik */
    public function lulusan_pria(){
        $query = $this->db->query('select tahun_lulus, count(j_kelamin) as jumlah from akun_alumni where j_kelamin = "Pria" group by tahun_lulus');
        
        return $query->result();
    }

    public function lulusan_wanita(){
        $query = $this->db->query('select tahun_lulus, count(j_kelamin) as jumlah from akun_alumni where j_kelamin = "Wanita" group by tahun_lulus');
        
        return $query->result();
    }

    public function lulusan_prodi(){
        $query = $this->db->query('select program_studi, count(program_studi) as jumlah from akun_alumni group by program_studi');
        
        return $query->result();
    }

    public function masa_jeda(){
        $query = $this->db->query('select waktu_bfr_kerja, count(waktu_bfr_kerja) as jumlah from tracer_study where waktu_bfr_kerja != "" group by waktu_bfr_kerja');

        return $query->result();
    }
    
    public function k_data_alumni($id_alumni){
        $query = $this->db->query("select * from akun_alumni where id_alumni = '".$id_alumni."'");
        
        return $query->result();
    }
    
    public function input_kritik($data, $table){
        $this->db->insert($table, $data);
    }
}
?>