<?php
//ini controller admin career center
class C_career_center_admin extends CI_Controller{
    public function __construct(){
        parent::__construct();

        //cek jika tidak ada session admin yang login
        if(!$this->session->userdata('id_admin') && !$this->session->userdata('username') && !$this->session->userdata('password')){
            redirect('c_main_career_center');
        }
    }

    //landing page
    public function index(){
        $data["count_jk"] = $this->M_admin_career_center->chart_jk_alumni();
        $data["count_pria"] = $this->M_admin_career_center->chart_lulus_pria();
        $data["count_wnt"] = $this->M_admin_career_center->chart_lulus_wnt();
        $data["count_kerja"] = $this->M_admin_career_center->chart_kerja_belum();
        $data["count_prodi_pria"] = $this->M_admin_career_center->chart_prodi_kerja_pria();
        $data["count_prodi_wnt"] = $this->M_admin_career_center->chart_prodi_kerja_wnt();
        $data["count_wkt_kerja"] = $this->M_admin_career_center->chart_waktu_kerja();
        
        $this->load->view('admin/V_home_admin', $data);
    }
    
    public function export_excel_jk(){
         $data = array( 'title' => 'Laporan Alumni per Jenis Kelamin',
                        'data_pria' => $this->db->query("select * from akun_alumni where j_kelamin = 'Pria' order by nama_alumni asc")->result(),
                        'data_wanita'=> $this->db->query("select * from akun_alumni where j_kelamin = 'Wanita' order by nama_alumni asc")->result());
        $this->load->view('admin/V_admin_excel_mhs_jk', $data);
    }
    
    public function export_excel_lulusan_pria_tahun(){
        $data['title']  = 'Laporan Alumni Pria per Tahun';
        $this->load->view('admin/V_admin_excel_lulusan_pria_tahun', $data);
    }
    
    public function export_excel_lulusan_wanita_tahun(){
        $data['title']  = 'Laporan Alumni Wanita per Tahun';
        $this->load->view('admin/V_admin_excel_lulusan_wanita_tahun', $data);
    }
    
    public function export_excel_kerja_vs_belum(){
        $data['title']  = 'Laporan Alumni yang Bekerja dan Belum';
        $this->load->view('admin/V_admin_excel_sts_kerja_blm', $data);
    }
    
    public function export_excel_lulusankerja_priaprodi(){
        $data['title']  = 'Laporan Alumni Pria per Prodi yang Bekerja';
        $this->load->view('admin/V_admin_excel_lulusan_pria_prodi', $data);
    }
    
    public function export_excel_lulusankerja_wanitaprodi(){
        $data['title']  = 'Laporan Alumni Wanita per Prodi yang Bekerja';
        $this->load->view('admin/V_admin_excel_lulusan_wanita_prodi', $data);
    }
    
    public function export_excel_waktu_kerja(){
        $data['title']  = 'Laporan Waktu Alumni Mendapatkan Kerja';
        $this->load->view('admin/V_admin_excel_waktu_dptkerja', $data);
    }

    /* Bagian view artikel */
    //halaman artikel di admin
    public function admin_artikel(){
        //menarik data dari model
        $data["article"] = $this->M_admin_career_center->get_data_article();
        $this->load->view('admin/V_admin_artikel', $data);
    }

    //function untuk data alumni
    public function list_alumni($param = NULL, $id = NULL){
        if (!$param && !$id) {
            $data["list_alumni"] = $this->M_admin_career_center->get_data_alumni();
            $this->load->view('admin/V_admin_list_alumni', $data);
        }else {
            $data["id_see"] = $id;
            $data["detail_alumni"] = $this->M_admin_career_center->detail_tracer_study($id);
            $this->load->view('admin/V_admin_list_alumni', $data);
        }
    }
    
    //function untuk merubah status aktif alumni
    public function ubah_aktifasi($id_alumni){
        $edit_aktif = $this->input->post("sts_aktif");
        
        $data_edit = array(
            "status" => $edit_aktif    
        );
        
        $this->M_admin_career_center->ubah_aktif($id_alumni, $data_edit);
        
        $this->session->set_flashdata("pesan_sts", "Status aktif alumni telah diubah");
        redirect("c_career_center_admin/list_alumni");
    }

    //function untuk menampilkan tracer study di admin
    public function tracer_study_alumni($show_tracer = NULL, $id_alumni = NULL){
        if(empty($show_tracer) && empty($id_alumni)){
            $data["tracer_study"] = $this->M_admin_career_center->get_all_tracer_study();
            $this->load->view('admin/V_admin_tracer_study', $data);
        }else{
            $data["detail_tracer"] = $this->M_admin_career_center->get_detail_tracer_study($id_alumni);
            $this->load->view('admin/V_admin_detail_tracer_study', $data);
        }
    }

    //function untuk menampilkan data alumni yang akan di feedback
    public function feedback_alumni($id_alumni){
        $data["detail_tracer"] = $this->M_admin_career_center->get_detail_tracer_study($id_alumni);
        $this->load->view('admin/V_admin_feedback_alumni', $data);
    } 

    //function konsultasi alumni
    public function konsultasi_alumni(){
        $data["konsultasi_alumni"] = $this->M_admin_career_center->get_konsultasi_alumni();
        $this->load->view('admin/V_admin_konsultasi_alumni', $data);
    }

    //atur jadwal konsultasi alumni
    public function set_jadwal_konsultasi($id_alumni){
        //echo $id_alumni ;
        $data["konsultasi_id"] = $this->M_admin_career_center->get_konsultasi_alumni_id($id_alumni);
        //echo $konsultasi_id;
        $this->load->view('admin/V_admin_set_jadwal_konsultasi', $data);
    }

    //masukkan jadwal konsultasi
    public function atur_jadwal_consult(){
        $nim = $this->input->post('nim_alumni');
        $data = array(
            'jadwal_consult' => $this->input->post('jadwal_hari'),
            'tgl_consult' => date('Y-m-d', strtotime($this->input->post('tgl')))
        );

        //print_r($data);

        $this->M_admin_career_center->edit_alumni_consult($nim, $data);

        $this->session->set_flashdata('pesan_consult', 'Jadwal alumni telah di atur');
        redirect('c_career_center_admin/konsultasi_alumni');
    }

    //hapus konsultasi alumni
    public function delete_consulting($id_alumni_consult){
        echo $id_alumni_consult;
        $this->M_admin_career_center->delete_data_consult($id_alumni_consult);
    }

    //function hapus alumni
    public function delete_alumni($id){
        $query = $this->db->query('select foto_alumni from akun_alumni where id_alumni = "'.$id.'" ')->result();
        foreach($query as $qal){
            $foto_alumni = $qal->foto_alumni;
        }
        
        //echo $foto_alumni;

        if($foto_alumni != "20180821064501default-user-image.png"){
            unlink("foto_alumni/".$foto_alumni);
        }

        $this->M_admin_career_center->delete_data_alumni($id);

        $this->session->set_flashdata('pesan_hapus', 'Data alumni sudah dihapus');
        redirect('c_career_center_admin/list_alumni');
    }

    //function forum diskusi alumni
    public function discussion_forum_alumi(){
        $data["thread"] = $this->M_admin_career_center->show_data_thread_alumni();
        $this->load->view('admin/V_admin_forum_alumni', $data);
    }

    //menampilkan thread alumni
    public function show_thread_alumni($thread){
        $data["detail_thread"] = $this->M_admin_career_center->detail_thread_alumni($thread);
        $data["thread_comments"] = $this->M_admin_career_center->get_comments($thread);
        $this->load->view('admin/V_admin_detail_thread', $data);
    }

    //hapus thread dan komentar
    public function delete_a_thread($thread){
        $this->M_admin_career_center->delete_thread($thread);

        $this->session->set_flashdata('pesan_thread', 'Thread sudah dihapus');
        redirect('c_career_center_admin/discussion_forum_alumi');
    }

    //function untuk edit artikel directing from view to model and controller
    public function edit_article($id_article){
        $data["edit_article"] = $this->M_admin_career_center->get_data_edit_article($id_article);
        $this->load->view('admin/V_admin_edit_artikel', $data);
    }

    /* bagian view lowongan */
    //bagian daftar lowongan
    public function lowongan_admin(){
        $data["lowongan_kerja"] = $this->M_admin_career_center->get_data_lowongan();
        $this->load->view('admin/V_admin_lowongan', $data);
    }

    //function tampilan form tambah lowongan
    public function add_new_job_vacancy(){
        $this->load->view('admin/V_admin_form_lowongan');
    }

    /* bagian job fair */
    //function tampilan job fair
    public function job_fair($add = NULL){
        if(!empty($add)){
            $this->load->view('admin/V_admin_add_job_fair');
        }else{
            $data["job_fair"] = $this->M_admin_career_center->get_job_fair();
            $this->load->view('admin/V_admin_job_fair', $data);
        }
    }


    /* proses crud job fair */
    public function process_adding_job_fair(){
        $this->form_validation->set_rules('nama_job_fair', 'Nama Job Fair', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('tgl_test', 'Tanggal Tes', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-info">', '</div>');

        if($this->form_validation->run() == TRUE){
            //variable foto job fair
            $nama_foto = $_FILES["foto_jobfair"]["name"];
            $tipe_foto = $_FILES["foto_jobfair"]["type"];
            $size_foto = $_FILES["foto_jobfair"]["size"];
            $temp_foto = $_FILES["foto_jobfair"]["tmp_name"];

            $lokasi = "./foto_jobfair/";

            $size = 2000000;

            if(!empty($nama_foto)){
                if($tipe_foto == "image/jpg" || $tipe_foto == "image/jpeg" || $tipe_foto == "image/png"){
                    if($size_foto <= $size){
                        $nama_job_fair = $this->input->post('nama_job_fair');
                        $deskripsi = $this->input->post('deskripsi');
                        $tgl_test = $this->input->post('tgl_test');
                        $foto_jobfair = date('YmdHis').$nama_foto;

                        $data_job_fair = array(
                            'nama_job_fair' => $nama_job_fair,
                            'deskripsi' => $deskripsi,
                            'tgl_test' => date('Y-m-d', strtotime($tgl_test)),
                            'foto_jobfair' => $foto_jobfair
                        );

                        move_uploaded_file($temp_foto, $lokasi.$foto_jobfair);

                        $this->M_admin_career_center->add_job_fair($data_job_fair, 'job_fair');

                        $this->session->set_flashdata('pesan_job_fair', 'Data Job Fair telah disimpan');

                        redirect('c_career_center_admin/job_fair');                             
                    }else{
                        $this->session->set_flashdata('pesan_job_fair', 'Foto Job fair jangan melebihi 2MB');
                        redirect('c_career_center_admin/job_fair'); 
                    }
                }else{
                    $this->session->set_flashdata('pesan_job_fair', 'Foto Job Fair harus tipe JPG atau JPEG atau PNG');
                    redirect('c_career_center_admin/job_fair'); 
                }
            }else{
                $this->session->set_flashdata('pesan_job_fair', 'Foto Job Fair masih kosong');
                redirect('c_career_center_admin/job_fair'); 
            }
            
        }else{
            $this->session->set_flashdata('pesan_job_fair', 'Form Harus diisi semua');
            redirect('c_career_center_admin/job_fair/add');
        }
    }

    //function untuk edit job fair
    public function edit_job_fair($id){
        $data["edit_job_fair"] = $this->M_admin_career_center->get_data_job_fair($id);
        $this->load->view('admin/V_alumni_edit_job_fair', $data);
    }

    //function proses edit job fair
    public function process_edit_job_fair(){
        $this->form_validation->set_rules('e_nama_job_fair','Nama Job Fair','xss_clean');
        $this->form_validation->set_rules('e_deskripsi','Deskripsi','xss_clean');
        $this->form_validation->set_rules('e_tgl_test','Tanggal Tes','xss_clean');

        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');

        $id_job_fair = $this->input->post('e_id_job_fair');

        $data_edit_job_fair = array(
            'nama_job_fair' => $this->input->post('e_nama_job_fair'),
            'deskripsi' => $this->input->post('e_deskripsi'),
            'tgl_test' => date('Y-m-d', strtotime($this->input->post('e_tgl_test')))
        );

        $this->M_admin_career_center->edit_job_fair($id_job_fair, $data_edit_job_fair);

        $this->session->set_flashdata('pesan_job_fair', 'Data Job Fair telah diperbarui');

        redirect('c_career_center_admin/job_fair');
    }

    //function hapus job fair
    public function delete_job_fair($id){
        $query = $this->db->query('select foto_jobfair from job_fair where id_job_fair = "'.$id.'" ')->result();
        foreach($query as $qf){
            $foto_jobfair = $qf->foto_jobfair;
        }

        unlink("./foto_jobfair/".$foto_jobfair);

        $this->M_admin_career_center->delete_job_fair($id);

        $this->session->set_flashdata('pesan_job_fair', 'Data Job Fair telah dihapus');

        redirect('c_career_center_admin/job_fair');
    }

    /* bagian processing crud data lowongan */
    //simpan data lowongan kerja baru
    public function process_adding_job_vacancy(){
        $this->form_validation->set_rules('nama_lowongan', 'Nama Lowongan', 'required');
        //$this->form_validation->set_rules('nama_perusahaan1', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir Lowongan', 'required');
        $this->form_validation->set_rules('tgl_tes', 'Tanggal Tes', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');

        if($this->form_validation->run() == TRUE){
            //variable upload foto lowongan kerja
            $nama_foto = $_FILES["foto_loker"]["name"];
            $tipe_foto = $_FILES["foto_loker"]["type"];
            $size_foto = $_FILES["foto_loker"]["size"];
            $temp_foto = $_FILES["foto_loker"]["tmp_name"];

            $lokasi = "./foto_lowongan_kerja/";

            $size = 2000000;
            
            if(!empty($nama_foto)){
                if($tipe_foto == "image/jpeg" || $tipe_foto == "image/jpg" || $tipe_foto == "image/png"){
                    if($size_foto <= $size){
                        $nama_lowongan = $this->input->post('nama_lowongan');
                        $nm_usaha = $this->input->post('nama_perusahaan1');
                        $nama_perusahaan = $this->input->post('nama_perusahaan');
                        $deskripsi = $this->input->post('deskripsi');
                        $tgl_post = date('Y-m-d');
                        $tgl_akhir = $this->input->post('tgl_akhir');
                        $tgl_tes = $this->input->post('tgl_tes');

                        $foto_loker = date('YmdHis').$nama_foto;
                        $loker_from = $this->input->post('loker_from');

                        $data_lowongan = array(
                            'nama_lowongan' => $nama_lowongan,
                            'nama_perusahaan' => $nama_perusahaan,
                            'deskripsi' => $deskripsi,
                            'tgl_post' => $tgl_post,
                            'tgl_berakhir' => date('Y-m-d', strtotime($tgl_akhir)),
                            'tgl_tes' => date('Y-m-d', strtotime($tgl_tes)),
                            'foto_loker' => $foto_loker,
                        );

                        move_uploaded_file($temp_foto, $lokasi.$foto_loker);

                        $this->M_admin_career_center->add_new_job_vacancy_data($data_lowongan, 'lowongan_kerja');

                        $this->session->set_flashdata('pesan_lowongan', 'Lowongan Kerja Baru Sudah Ditambahkan!');
                        redirect('c_career_center_admin/lowongan_admin');
                    }else{
                        $this->session->set_flashdata('pesan_lowongan', 'Foto Lowongan Kerja jangan lebih dari 2MB!');
                        redirect('c_career_center_admin/lowongan_admin');
                    }
                }else{
                    $this->session->set_flashdata('pesan_lowongan', 'Foto Lowongan Kerja harus tipe JPG atau JPEG atau PNG!');
                    redirect('c_career_center_admin/lowongan_admin');
                }
            }else{
                $this->session->set_flashdata('pesan_lowongan', 'Foto Lowongan Kerja masih kosong');
                redirect('c_career_center_admin/lowongan_admin');
            }

        }else{
            $this->load->view('admin/V_admin_form_lowongan');
        }
    }

    //edit atau hapus lowongan
    public function actions_job_vacancy($action_type, $id_lowongan){
        //cek jenis action yang dikirim
        if($action_type == 'edit'){
            $data["edit_lowongan"] = $this->M_admin_career_center->get_data_edit_lowongan($id_lowongan);

            $this->load->view('admin/V_admin_edit_lowongan', $data);
        }elseif($action_type == 'delete'){
            $data_file = $this->db->query('select foto_loker from lowongan_kerja where id_lowongan = '.$id_lowongan)->result();

            foreach($data_file as $df){
                $foto = $df->foto_loker;
            }

            unlink("./foto_lowongan_kerja/".$foto);

            $this->M_admin_career_center->delete_job_vacancy($id_lowongan);

            $this->session->set_flashdata('pesan_lowongan', 'Lowongan kerja sudah dihapus!');
            redirect('c_career_center_admin/lowongan_admin');
        }
    }

    //function untuk memproses edit lowongan kerja
    public function process_edit_job_vacancy(){
        $e_id_lowongan = $this->input->post('e_id_lowongan');
        $e_nama_lowongan = $this->input->post('e_nama_lowongan');
        $e_nama_perusahaan = $this->input->post('e_nama_perusahaan');
        $e_deskripsi = $this->input->post('e_deskripsi');
        $e_tgl_berakhir = $this->input->post('e_tgl_akhir');
        $e_tgl_tes = $this->input->post('e_tgl_tes');

        $data_edit = array(
            'nama_lowongan' => $e_nama_lowongan,
            'nama_perusahaan' => $e_nama_perusahaan,
            'deskripsi' => $e_deskripsi,
            'tgl_berakhir' => $e_tgl_berakhir,
            'tgl_tes' => $e_tgl_tes
        );

        $this->M_admin_career_center->edit_job_vacancy($e_id_lowongan, $data_edit);

        $this->session->set_flashdata('pesan_lowongan', 'Id lowongan kerja '.$e_id_lowongan.' sudah diperbarui');
        redirect('c_career_center_admin/lowongan_admin');
    }

    /* Bagian processing crud data untuk artikel*/
    //fungsi view untuk tambah artikel
    public function add_new_article(){
        //$this->session->set_flashdata('pesan_artikel','Artikel Sudah Ditambahkan!');
        //redirect('C_career_center_admin/admin_artikel');
        $this->load->view('admin/V_form_admin_artikel');
    }

    //fungsi proses tambah artikel
    public function process_adding_article(){
        $this->form_validation->set_rules('nama_artikel', 'Nama Artikel', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');

        if($this->form_validation->run() == TRUE){
            //variable upload foto artikel
            $nama_foto = $_FILES["foto_artikel"]["name"];
            $tipe_foto = $_FILES["foto_artikel"]["type"];
            $size_foto = $_FILES["foto_artikel"]["size"];
            $temp_foto = $_FILES["foto_artikel"]["tmp_name"];

            $lokasi = "./foto_artikel/";

            $size = 2000000;

            if(!empty($nama_foto)){
                if($tipe_foto == "image/jpg" || $tipe_foto == "image/jpeg" || $tipe_foto == "image/png"){
                    if($size_foto <= $size){
                        $name_foto_artikel = date('YmdHis').$nama_foto;
                        $nama_artikel = $this->input->post('nama_artikel');
                        $deskripsi = $this->input->post('deskripsi');

                        $data_artikel = array(
                            'nama_artikel' => $nama_artikel,
                            'deskripsi' => $deskripsi,
                            'foto_artikel' => $name_foto_artikel
                        );

                        move_uploaded_file($temp_foto, $lokasi.$name_foto_artikel);

                        $this->M_admin_career_center->add_new_article($data_artikel, 'artikel');

                        $this->session->set_flashdata('pesan_artikel','Artikel Sudah Ditambahkan!');
                        redirect('C_career_center_admin/admin_artikel');
                    }else{
                        $this->session->set_flashdata('pesan_artikel','Foto Artikel jangan melebihi 2MB!');
                        redirect('C_career_center_admin/admin_artikel');
                    }
                }else{
                    $this->session->set_flashdata('pesan_artikel','Foto Artikel harus tipe JPG atau JPEG atau PNG!');
                    redirect('C_career_center_admin/admin_artikel');
                }
            }else{
                $this->session->set_flashdata('pesan_artikel','Foto Artikel Belum dimasukkan!');
                redirect('C_career_center_admin/admin_artikel');
            }
        }else{
            $this->load->view('admin/V_form_admin_artikel');
        }
    }

    //function untuk proses edit artikel
    public function process_editing_article(){
        //tangkap dan simpan data artikel yang akan diedit
        $e_id_artikel = $this->input->post('e_id_artikel');
        $e_nama_artikel = $this->input->post('e_nama_artikel');
        $e_deskripsi = $this->input->post('e_deskripsi');
        
        $data_edit = array(
            'nama_artikel' => $e_nama_artikel,
            'deskripsi' => $e_deskripsi
        );

        $this->M_admin_career_center->edit_article($e_id_artikel, $data_edit);

        $this->session->set_flashdata('pesan_artikel', 'Artikel dengan id '.$e_id_artikel.' sudah di perbarui');
        redirect('c_career_center_admin/admin_artikel');
    }

    //bagian hapus data artikel
    public function delete_article($id_article){
        $query = $this->db->query("select foto_artikel from artikel where id_artikel = '".$id_article."'")->result();//kode proses delete foto artikel dan isinya
        foreach($query as $qa){
            $foto_artikel = $qa->foto_artikel;
        }

        unlink("./foto_artikel/".$foto_artikel);

        $this->M_admin_career_center->delete_article($id_article);

        $this->session->set_flashdata('pesan_artikel','Artikel Sudah Dihapus!');
        redirect('C_career_center_admin/admin_artikel');
    }

    /* bagian mou */
    public function mou(){
        $data["mou"] = $this->M_admin_career_center->get_data_mou();
        $this->load->view('admin/V_admin_mou', $data);
    }

    public function add_mou(){
        $this->load->view('admin/V_admin_add_mou');
    }

    /*proses crud mou*/
    public function processing_add_mou(){
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">','</div>');

        if($this->form_validation->run() == TRUE){
            //variable upload foto MOU
            $nama_foto = $_FILES["foto_mou"]["name"];
            $tipe_foto = $_FILES["foto_mou"]["type"];
            $size_foto = $_FILES["foto_mou"]["size"];
            $temp_foto = $_FILES["foto_mou"]["tmp_name"];

            //variable file pdf mou
            $nama_mou = $_FILES["file_mou"]["name"];
            $tipe_mou = $_FILES["file_mou"]["type"];
            $size_mou = $_FILES["file_mou"]["size"];
            $temp_mou = $_FILES["file_mou"]["tmp_name"];

            $dir_pdf = "./file_pdf_mou/";
            $lokasi = "./foto_mou/";

            $size = 2000000;

            if(!empty($nama_foto) && !empty($nama_mou)){
                if(($tipe_foto == "image/jpeg" || $tipe_foto == "image/png" || $tipe_foto == "image/jpg") && ($tipe_mou == "application/pdf")){
                    if($size_foto <= $size && $size_mou <= $size){
                        $nama_perusahaan = $this->input->post('nama_perusahaan');
                        $alamat = $this->input->post('alamat_perusahaan');
                        $desk_perusahaan = $this->input->post('deskripsi');
                        $foto_mou = date('YmdHis').$nama_foto;
                        $nama_file_mou = date('YmdHis').$nama_mou;

                        $data_mou = array(
                            'nama_perusahaan' => $nama_perusahaan,
                            'alamat' => $alamat,
                            'desk_perusahaan' => $desk_perusahaan,
                            'foto_mou' => $foto_mou,
                            'file_mou' => $nama_file_mou
                        );

                        move_uploaded_file($temp_foto, $lokasi.$foto_mou);
                        move_uploaded_file($temp_mou, $dir_pdf.$nama_file_mou);

                        $this->M_admin_career_center->add_data_mou($data_mou, 'mou');

                        $this->session->set_flashdata('pesan_mou', 'MOU Sudah ditambahkan');
                        redirect('c_career_center_admin/mou');
                    }else{
                        $this->session->set_flashdata('pesan_mou', 'Foto MOU dan File Mou jangan lebih dari 2MB');
                        redirect('c_career_center_admin/add_mou');
                    }
                }else{
                    $this->session->set_flashdata('pesan_mou', 'Foto MOU harus JPEG, JPG atau PNG dan file MoU harus PDF');
                    redirect('c_career_center_admin/add_mou');
                }
            }else{
                $this->session->set_flashdata('pesan_mou', 'Nama foto atau File MoU masih kosong');
                redirect('c_career_center_admin/add_mou');
            }
        }else{
            $this->load->view('admin/V_admin_add_mou');
        }
    }

    //read pdf
    public function file_pdf_mou($pdf_file){
        force_download("./file_pdf_mou/".$pdf_file, NULL);
        //$data["file_pdf"] = $pdf_file;
        //$this->load->view('admin/V_admin_read_pdf', $data);
    }

    //function edit mou
    public function edit_mou($id_mou){
            $data["edit_mou"] = $this->M_admin_career_center->get_data_edit_mou($id_mou);
            $this->load->view('admin/V_admin_edit_mou', $data);
    }

    public function process_edit_mou(){
        echo $id_edit_mou = $this->input->post('id_mou');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $alamat = $this->input->post('alamat_perusahaan');
        $desk_perusahaan = $this->input->post('deskripsi');

        $data_edit_mou = array(
            'nama_perusahaan' => $nama_perusahaan,
            'alamat' => $alamat,
            'desk_perusahaan' => $desk_perusahaan
        );

        $this->M_admin_career_center->edit_data_mou($id_edit_mou, $data_edit_mou);

        $this->session->set_flashdata('pesan_mou', 'MOU Sudah dirubah');
        redirect('c_career_center_admin/mou');
    }

    //function hapus mou
    public function delete_mou($id_mou){
        //ambil data foto mou untuk dihapus
        $foto_mou = $this->M_admin_career_center->get_foto_mou($id_mou);
        foreach($foto_mou as $mou){
            $foto_mou = $mou->foto_mou;
            $file_mou = $mou->file_mou;
        }

        //hapus file foto mou di folder foto_mou
        unlink('./foto_mou/'.$foto_mou);
        unlink('./file_pdf_mou/'.$file_mou);

        //hapus data mou di database
        $this->M_admin_career_center->delete_data_mou($id_mou);

        //keluarkan pesan jika berhasil menghapus foto dan datanya
        $this->session->set_flashdata('pesan_mou', 'MOU Sudah dihapus');
        redirect('c_career_center_admin/mou');
    }
    
    public function kritik_saran_alumni(){
        $data["ks_alumni"] = $this->M_admin_career_center->get_kritik_saran_alumni();
        
        $this->load->view('admin/V_admin_kritiksaran_alumni', $data);
    }
    
    public function detail_ks_alumni($id_ks){
        $data["detail_ks"] = $this->M_admin_career_center->get_detail_ks($id_ks);
        
        $this->load->view('admin/V_admin_detail_kritiksaran', $data);
    }
    
    public function hapus_kritiksaran($id){
        $this->db->query("delete from kritik_saran where id_ks = '".$id."'");
        
        $this->session->set_flashdata('pesan_ks', 'Kritik saran sudah dihapus');
        redirect("c_career_center_admin/kritik_saran_alumni");
    }
    
    public function input_feedback(){
        $nim_alumni = $this->input->post("nim_alumni");
        $fb_satu = $this->input->post("no_1");
        $fb_dua = $this->input->post("no_2");
        $fb_tiga = $this->input->post("no_3");
        $fb_empat = $this->input->post("no_4");
        $fb_lima = $this->input->post("no_5");
        $fb_enam = $this->input->post("no_6");
        $fb_tujuh = $this->input->post("no_7");
        $saran = $this->input->post("ks_feedback");
        $tgl_feedback = date("Y-m-d");

       $data_feedback = array(
            "nim_alumni" => $nim_alumni,
            "fb_satu" => $fb_satu,
            "fb_dua" => $fb_dua,
            "fb_tiga" => $fb_tiga,
            "fb_empat" => $fb_empat,
            "fb_lima" => $fb_lima,
            "fb_enam" => $fb_enam,
            "fb_tujuh" => $fb_tujuh,
            "saran" => $saran,
            "tgl_feedback" => $tgl_feedback
        );

        $this->db->insert("feedback", $data_feedback);

        $this->session->set_flashdata('pesan_feedback', 'Feedback Alumni sudah dikirim');
        redirect("c_career_center_admin/tracer_study_alumni");
    }

    
}
?>