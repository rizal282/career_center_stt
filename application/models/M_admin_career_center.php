<?php
//file model admin
class M_admin_career_center extends CI_Model{

    /* functions model untuk artikel */
    //mengambil data artikel dari database
    public function get_data_article(){
        $this->db->select('*');

        return $this->db->get('artikel');
    }

    //function untuk menambahkan artikel
    public function add_new_article($article, $table){
        $this->db->insert($table, $article);
    }

    //function untuk mengedit artikel
    public function get_data_edit_article($id_article){
        $this->db->select('*');
        $this->db->where('id_artikel', $id_article);

        return $this->db->get('artikel')->result();
    }

    //simpan data artikel yang diedit
    public function edit_article($id, $data){
        $this->db->where('id_artikel', $id);
        $this->db->update('artikel', $data);
    }

    //hapus data artikel dari database sesuai id artikel yang dikirim
    public function delete_article($id_artikel){
        $this->db->where('id_artikel', $id_artikel);
        $this->db->delete('artikel');
    }

    /* functions untuk alumni */
    public function get_data_alumni(){
        $this->db->select('*');

        return $this->db->get('akun_alumni')->result();
    }
    
    //function untuk edit sts alumni
    public function ubah_aktif($id_alumni, $data){
        $this->db->where("id_alumni", $id_alumni);
        $this->db->update("akun_alumni", $data);
    }

     //menampilkan thread yang ada di tabel forum thread
     public function show_data_thread_alumni(){
        $query = $this->db->query('select * from forum_thread inner join akun_alumni on forum_thread.id_alumni = akun_alumni.id_alumni order by forum_thread.id_thread desc');

        return $query->result();
    }

    //menampilkan detail thread yang ada di tabel forum thread
    public function detail_thread_alumni($thread){
        $query = $this->db->query('select * from forum_thread inner join akun_alumni on forum_thread.id_alumni = akun_alumni.id_alumni where forum_thread.id_thread ='.$thread);

        return $query->result();
    }

    public function get_comments($thread){
        $query = $this->db->query('select * from forum_chat_thread inner join akun_alumni on forum_chat_thread.id_alumni = akun_alumni.id_alumni where forum_chat_thread.thread_id = '. $thread);

        return $query->result();
    }

    //hapus thread
    public function delete_thread($thread){
        $query = $this->db->query('delete forum_thread, forum_chat_thread from forum_thread inner join forum_chat_thread on forum_thread.id_thread = forum_chat_thread.thread_id where forum_thread.id_thread ='.$thread.' and forum_chat_thread.thread_id = '.$thread);
        
        return $query;
    }

    //function untuk memanggil semua data tracer alumni
    public function get_all_tracer_study(){
        $query = $this->db->query('select * from tracer_study inner join akun_alumni on tracer_study.id_alumni = akun_alumni.id_alumni');

        return $query;
    }

    //detail view alumni di admin
    public function detail_tracer_study($id){
        $query = $this->db->query('select * from akun_alumni where id_alumni = '.$id);

        return $query->result();
    }

    //function untuk mengambil  detail tracer sesuai id
    public function get_detail_tracer_study($id_alumni){
        $query = $this->db->query('select * from tracer_study inner join akun_alumni on tracer_study.id_alumni = akun_alumni.id_alumni where tracer_study.id_alumni = '.$id_alumni);

        return $query->result();
    }

    //konsultasi alumni
    public function get_konsultasi_alumni(){
        $query = $this->db->query("select * from alumni_consult inner join akun_alumni on alumni_consult.id_alumni = akun_alumni.id_alumni");

        return $query->result();
    }

    //ambil data konsultasi per id alumni
    public function get_konsultasi_alumni_id($id_alumni){
        return $this->db->query('select * from alumni_consult inner join akun_alumni on alumni_consult.id_alumni = akun_alumni.id_alumni where alumni_consult.id_alumni = "'.$id_alumni.'"')->result();
    }

    //atur jadwal konsultasi
    public function edit_alumni_consult($id_alumni, $data){
        $this->db->where('id_alumni', $id_alumni);
        $this->db->update('alumni_consult', $data);
    }

    //hapus consult alumni
    public function delete_data_consult($id){
        $this->db->where('id_alumni', $id);
        $this->db->delete('alumni_consult');
    }

    //function hapus data alumni
    public function delete_data_alumni($id){
        $this->db->where('id_alumni', $id);
        $this->db->delete('akun_alumni');
    }

    /* functions model untuk lowongan */
    //mengambil data lowongan untuk ditampilkan di page lowongan admin
    public function get_data_lowongan(){
        $query = $this->db->query('select * from lowongan_kerja inner join mou on lowongan_kerja.nama_perusahaan = mou.id_mou ');

        return $query;
    }

    //get apply loker
    public function apply_loker($id_loker){
        $query = $this->db->query('select *, count(id_lowongan_kerja) as jumlah from apply_lowongan where id_lowongan_kerja = '.$id_loker);

        return $query->result();
    }

    //mengambil data lowongan kerja yang akan di edit
    public function get_data_edit_lowongan($id_lowongan){
        $this->db->select('*');
        $this->db->where('id_lowongan', $id_lowongan);

        return $this->db->get('lowongan_kerja')->result();
    }

    //function untuk tambah data lowongan kerja
    public function add_new_job_vacancy_data($data, $table){
        $this->db->insert($table, $data);
    }

    //function untuk menyimpan data edit lowongan
    public function edit_job_vacancy($id, $data){
        $this->db->where('id_lowongan', $id);
        $this->db->update('lowongan_kerja', $data);
    }

    //function untuk hapus lowongan kerja
    public function delete_job_vacancy($id_lowongan){
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->delete('lowongan_kerja');
    }

    /* function untuk job fair */

    //function untuk menampilkan data job fair
    public function get_job_fair(){
        $this->db->select('*');

        return $this->db->get('job_fair');
    } 

    //function tambah data job fair
    public function add_job_fair($data, $table){
        $this->db->insert($table, $data);
    }

    //function untuk menampilkan data job fair yang akan di edit
    public function get_data_job_fair($id){
        $this->db->select('*');
        $this->db->where('id_job_fair', $id);

        return $this->db->get('job_fair')->result();
    }

    //function proses edit job fair
    public function edit_job_fair($id, $data){
        $this->db->where('id_job_fair', $id);
        $this->db->update('job_fair', $data);
    }

    //function hapus job fair
    public function delete_job_fair($id){
        $this->db->where('id_job_fair', $id);
        $this->db->delete('job_fair');
    }

    /* function untuk mou */
    //menampilkan data mou
    public function get_data_mou(){
        $query = $this->db->query('select * from mou');

        return $query;
    }

    //menambah data mou
    public function add_data_mou($data, $table){
        $this->db->insert($table, $data);
    }

    //ambil data mou yang akan di edit
    public function get_data_edit_mou($id_mou){
        $this->db->select('*');
        $this->db->where('id_mou', $id_mou);

        return $this->db->get('mou')->result();
    }

    //edit data mou
    public function edit_data_mou($id_mou, $data){
        $this->db->update('mou', $data);
        $this->db->where('id_mou', $id_mou);
    }

    //ambil data foto untuk dihapus
    public function get_foto_mou($id_mou){
        //$this->db->select('foto_mou');
        //$this->db->where('id_mou', $id_mou);
        $query = $this->db->query('select foto_mou, file_mou from mou where id_mou = '.$id_mou);

        return $query->result();
    }

    //hapus data mou dari database
    public function delete_data_mou($id_mou){
        $this->db->where('id_mou', $id_mou);
        $this->db->delete('mou');
    }

    //bagian charts admin
    public function chart_jk_alumni(){
        $query = $this->db->query('SELECT j_kelamin, count(j_kelamin) as jumlah FROM `akun_alumni` group by j_kelamin');

        return $query->result();
    }
    
    //lulusan pria per tahun
    public function chart_lulus_pria(){
        $query = $this->db->query('select j_kelamin, tahun_lulus, count(tahun_lulus) as jumlah from akun_alumni where j_kelamin = "Pria" group by tahun_lulus');

        return $query->result();
    }

    public function chart_lulus_wnt(){
        $query = $this->db->query('select j_kelamin, tahun_lulus, count(tahun_lulus) as jumlah from akun_alumni where j_kelamin = "Wanita" group by tahun_lulus');

        return $query->result();
    }
    
    //grafik perbandingan yang sudah kerja dan yang belum
    public function chart_kerja_belum(){
        $query = $this->db->query('select sts_kerja, count(sts_kerja) as jumlah from tracer_study group by sts_kerja');

        return $query->result();
    }

    public function chart_prodi_kerja_pria(){
        $query = $this->db->query('select program_studi, count(sts_kerja) as jumlah from akun_alumni inner join tracer_study on akun_alumni.id_alumni = tracer_study.id_alumni where tracer_study.sts_kerja = "Sudah" and akun_alumni.j_kelamin = "Pria" group by akun_alumni.program_studi');

        return $query->result();
    }

    public function chart_prodi_kerja_wnt(){
        $query = $this->db->query('select program_studi, count(sts_kerja) as jumlah from akun_alumni inner join tracer_study on akun_alumni.id_alumni = tracer_study.id_alumni where tracer_study.sts_kerja = "Sudah" and akun_alumni.j_kelamin = "Wanita" group by akun_alumni.program_studi');

        return $query->result();
    }

    public function chart_waktu_kerja(){
        $query = $this->db->query('SELECT waktu_bfr_kerja, count(waktu_bfr_kerja) as jumlah from tracer_study where waktu_bfr_kerja != "" group by waktu_bfr_kerja');

        return $query->result();
    }
    
    public function get_kritik_saran_alumni(){
        $query = $this->db->query("select * from kritik_saran");
        
        return $query->result();
    }
    
    public function get_detail_ks($id){
        $query = $this->db->query("select * from kritik_saran where id_ks = '".$id."'");
        
        return $query->result();
    }
}
?>