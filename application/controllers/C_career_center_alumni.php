<?php
//class untuk alumni
class C_career_center_alumni extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //setting default tanggal dan waktu
        date_default_timezone_set("asia/jakarta");

        //cek session login
        if(!$this->session->userdata('id_alumni') && !$this->session->userdata('nama_alumni') && !$this->session->userdata('password')){
            redirect('c_main_career_center');
        }
    }

    public function index(){
        $data["alumni_pria"] = $this->M_alumni_career_center->lulusan_pria();
        $data["alumni_wanita"] = $this->M_alumni_career_center->lulusan_wanita();
        $data["prodi_alumni"] = $this->M_alumni_career_center->lulusan_prodi();
        $data["masa_jeda"] = $this->M_alumni_career_center->masa_jeda();

        $this->load->view('alumni/V_home_alumni', $data);
    }

    //function untuk artikel
    public function article($id_article = NULL){
        if(empty($id_article)){
            $data["article"] = $this->M_alumni_career_center->show_article();
            $this->load->view('alumni/V_alumni_artikel', $data);
        }else{
            $data["detail_artikel"] = $this->M_alumni_career_center->get_detail_article($id_article);
            $this->load->view('alumni/V_alumni_detail_artikel', $data);
        }
    }

     //function untuk forum diskusi alumni
    public function alumni_discussion_forum(){
        //ini tampilan daftar lowongan
            //konfigurasi pagination
            $config['base_url'] = site_url('c_career_center_alumni/alumni_discussion_forum'); //site url
            $config['total_rows'] = $this->db->count_all('forum_thread'); //total row
            $config['per_page'] = 5;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
            $data['thread'] = $this->M_alumni_career_center->show_data_thread_alumni($config["per_page"], $data['page']);           

            $data['pagination'] = $this->pagination->create_links();
            //$data["thread"] = $this->M_alumni_career_center->show_data_thread_alumni();
            //$data["comments_thread"] = $this->M_alumni_career_center->get_comments();
            $this->load->view('alumni/V_alumni_forum', $data);
    }

    //tambah thread
    public function add_new_thread(){
        $this->load->view('alumni/V_alumni_tambah_thread');
    }

    //lihat thread
    public function comment_thread($id_thread, $var_edit = NULL, $id_edit_chat = NULL){          
        $data["detail_thread"] = $this->M_alumni_career_center->get_detail_thread($id_thread);
        $data["v_edit"] = $var_edit;
        $data["edit_chat"] = $id_edit_chat;
    
        $this->load->view('alumni/V_alumni_detail_thread', $data);      
    }

    //tambah komentar
    public function add_comment(){
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

        if($this->form_validation->run() == TRUE){
            $id_thread = $this->input->post('id_thread');
            $id_alumni = $this->session->userdata('id_alumni');
            $komentar = $this->input->post('komentar');
            $datetime = date('Y-m-d H:i:s');

            $data_chat = array(
                'thread_id' => $id_thread,
                'id_alumni' => $id_alumni,
                'pesan' => $komentar,
                'waktu' => $datetime
            );

            $this->M_alumni_career_center->add_new_comment($data_chat, 'forum_chat_thread');

            $this->session->set_flashdata('pesan_comments', 'Komentar anda sudah dikirim');
            redirect('c_career_center_alumni/alumni_discussion_forum');
        }else{
            $this->session->set_flashdata('pesan_comments', 'Komentar anda gagal dikirim');
            redirect('c_career_center_alumni/alumni_discussion_forum');
        }
    }

    //edit komentar
    public function edit_comment(){
        $id_comment = $this->input->post('e_id_chat');
        $edit_comment = $this->input->post('e_text_chat');

        $this->db->query('update forum_chat_thread set pesan = "'.$edit_comment.'" where id_chat = '.$id_comment);

        $this->session->set_flashdata('pesan_comments', 'Komentar anda sudah diperbarui');
        redirect('c_career_center_alumni/alumni_discussion_forum');
    }

    //hapus komentar thread
    public function delete_comment($id_comment){
        $this->db->query('delete from forum_chat_thread where id_chat = '.$id_comment);

        $this->session->flashdata('pesan_comments', 'Komentar anda sudah dihapus');
        redirect('c_career_center_alumni/alumni_discussion_forum');
    }

    //edit thread
    public function edit_thread($id_thread){
        $data["edit_thread"] = $this->db->query('select * from forum_thread where id_thread = '.$id_thread)->result();
        $this->load->view('alumni/V_alumni_edit_thread', $data);
    }

    //proses edit thread
    public function process_editing_thread(){
        $id_thread = $this->input->post('e_id_thread');
        $nama_thread = $this->input->post('e_nama_thread');
        $desc_thread = $this->input->post('e_deskripsi_thread');

        //langsung masukkan edit thread ke table forum_thread
        $this->db->query("update forum_thread set thread = '".$nama_thread."', deskripsi = '".$desc_thread."' where id_thread = '".$id_thread."'");

        $this->session->set_flashdata('pesan_thread', 'Thread anda sudah diubah');
        redirect('c_career_center_alumni/alumni_discussion_forum');
    }

    //hapus thread
    public function delete_thread($id_thread){
        $this->db->query('delete from forum_thread where id_thread = '.$id_thread);
        $this->db->query('delete from forum_chat_thread where thread_id = '.$id_thread);

        $this->session->set_flashdata('pesan_thread','Thread Anda sudah dihapus');
        redirect('c_career_center_alumni/alumni_discussion_forum');
    }

    /*tambah komentar
    public function add_comment(){
        
    }*/

    //function untuk tracer studi alumi
    public function alumni_tracer_study(){
        $id_alumni = $this->session->userdata('id_alumni'); //buat variable untuk parameter cek tracer setiap alumni

        $data["tracer_check"] = $this->M_alumni_career_center->check_tracer_study($id_alumni);
        $this->load->view('alumni/V_alumni_tracer_study', $data);
    }

    //function untuk consulting alumni
    public function alumni_consulting(){
        $id_alumni = $this->session->userdata('id_alumni');

        $data["alumni_consulting"] = $this->M_alumni_career_center->get_alumni_consulting($id_alumni);
        $this->load->view('alumni/V_alumni_consulting', $data);
    }

    //tambah konsultasi
    public function add_consulting(){
        $this->form_validation->set_rules('a_kons', 'Alasan Konsultasi', 'xss_clean|trim');

        if($this->form_validation->run() == TRUE){
            $id_alumni = $this->session->userdata('id_alumni');
            $date_consulting = date('Y-m-d');
            $reason = $this->input->post('a_kons');

            $data_consulting = array(
                'id_alumni' => $id_alumni,
                'tgl_input' => $date_consulting,
                'alasan' => $reason
            );

            $this->M_alumni_career_center->add_alumni_consulting($data_consulting, 'alumni_consult');

            $this->session->set_flashdata('pesan_consulting', 'Pengajuan konsultasi anda sudah dikirim');
            redirect('c_career_center_alumni/alumni_consulting');
        }else{
            redirect('c_career_center_alumni/alumni_consulting');
        }
    }

    //function untuk menampilkan data lowongan kerja
    public function job_vacancy(){
            //ini tampilan daftar lowongan
            //konfigurasi pagination
            $config['base_url'] = site_url('c_career_center_alumni/job_vacancy'); //site url
            $config['total_rows'] = $this->db->count_all('lowongan_kerja'); //total row
            $config['per_page'] = 5;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
            $data['lowongan'] = $this->M_alumni_career_center->show_job_vacancy($config["per_page"], $data['page']);           

            $data['pagination'] = $this->pagination->create_links();
            
            //$data["lowongan"] = $this->M_alumni_career_center->show_job_vacancy();
            $this->load->view('alumni/V_alumni_job_vacancy', $data);
    }

    //show job
    public function show_job($id_loker, $apply_job = NULL){
        $data["show_job"] = $this->M_alumni_career_center->show_detail_job($id_loker);
        $data["apply_job"] = $apply_job;
 
        $this->load->view('alumni/V_alumni_detail_lowongan', $data);
    }

    //tampilan apply job
    /*
    public function apply(){
        $this->load->view('alumni/V_alumni_apply_lowongan');
    }*/

    /* grup function untuk proses crud alumni*/
    public function process_adding_thread(){
        $this->form_validation->set_rules('nama_thread','Nama Thread','required');
        $this->form_validation->set_rules('deskripsi_thread','Deskripsi Thread','required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if($this->form_validation->run() == TRUE){
            $id_alumni = $this->session->userdata('id_alumni');
            $nama_thread = $this->input->post('nama_thread');
            $deskripsi_thread = $this->input->post('deskripsi_thread');
            $date_thread = date('Y-m-d');

            $data_threads = array(
                'id_alumni' => $id_alumni,
                'thread' => $nama_thread,
                'deskripsi' => $deskripsi_thread,
                'tanggal' => $date_thread,
                'date_input' => date('Y-m-d H:i:s')
            );

            $this->M_alumni_career_center->add_new_thread($data_threads, 'forum_thread');

            $this->session->set_flashdata('pesan_thread', 'Thread anda sudah diposting');
            redirect('c_career_center_alumni/alumni_discussion_forum');
        }else{
            $this->load->view('alumni/V_alumni_tambah_thread');
        }
    }

    //function untuk menyimpan data tracer study
    public function process_adding_tracer_study(){
        $sts_kerja = $this->input->post('sts_kerja');
        $m_kerja = $this->input->post('mulai_kerja');

        $this->form_validation->set_rules('sts_kerja', 'Status Kerja', 'required');

        //cek jika sudah bekerja
        if($sts_kerja == 'Sudah'){
            $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
            $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required');
            $this->form_validation->set_rules('job_position', 'Posisi Pekerjaan', 'required');
            $this->form_validation->set_rules('mulai_kerja', 'Mulai Kerja', 'required');
        }else{
            $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'xss_clean');
            $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'xss_clean');
            $this->form_validation->set_rules('mulai_kerja', 'Mulai Kerja', 'xss_clean');
            $this->form_validation->set_rules('tgl_kerja', 'Tanggal Kerja', 'xss_clean');
        }

        //cek input masuk kerja antara sebelum / sesudah kuliah
        if($m_kerja == 'Sebelum Kuliah'){
            $this->form_validation->set_rules('tgl_kerja', 'Waktu Dapat Kerja', 'xss_clean');
        }else{
            $this->form_validation->set_rules('tgl_kerja', 'Waktu Dapat Kerja', 'xss_clean');
        }

        $this->form_validation->set_error_delimiters('<div class="alert alert-info">','</div>');

        if($this->form_validation->run() == TRUE){
            $id_alumni = $this->session->userdata('id_alumni');
            $sts_kerja = $this->input->post('sts_kerja');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $alamat_perusahaan = $this->input->post('alamat_perusahaan');
            $job_pos = $this->input->post('job_position');
            
            if($m_kerja == "Sesudah kuliah"){
                $mulai_kerja = $this->input->post('mulai_kerja');
                $waktu_bfr_kerja = $this->input->post('tgl_kerja');
            }else{
                $mulai_kerja = $this->input->post('mulai_kerja');
                $waktu_bfr_kerja = "";
            }

            if($sts_kerja == "Sudah"){
                $mulai_kerja = $this->input->post('mulai_kerja');
            }else{
                $mulai_kerja = "";
            }

            $data_tracer = array(
                'id_alumni' => $id_alumni,
                'sts_kerja' => $sts_kerja,
                'nama_perusahaan' => $nama_perusahaan,
                'alamat_perusahaan' => $alamat_perusahaan,
                'posisi_kerja' => $job_pos,
                'mulai_kerja' => $mulai_kerja,
                'waktu_bfr_kerja' => $waktu_bfr_kerja,
                'date_input' => date('Y-m-d H:i:s')
            );


            //move_uploaded_file($temp_foto, $lokasi.$foto_alumni);

            $this->M_alumni_career_center->add_tracer_study($data_tracer, 'tracer_study');

            $this->session->set_flashdata('pesan_tracer', 'Tracer Study anda sudah disimpan');
            redirect('c_career_center_alumni/alumni_tracer_study');
        }else{
            $id_alumni = $this->session->userdata('id_alumni'); //buat variable untuk parameter cek tracer setiap alumni

            $data["tracer_check"] = $this->M_alumni_career_center->check_tracer_study($id_alumni);
            $this->load->view('alumni/V_alumni_tracer_study', $data);
        }
    }

    //edit tracer study
    public function edit_tracer_study($id_tracer){
        $data["edit_tracer"] = $this->M_alumni_career_center->get_edit_tracer($id_tracer);
        $this->load->view('alumni/V_alumni_edit_tracer', $data);
    }

    //proses edit tracer study
    public function process_editing_tracer_study(){
            $id_tracer = $this->input->post('id_tracer');
            $sts_kerja = $this->input->post('e_sts_kerja');
            $nama_perusahaan = $this->input->post('e_nama_perusahaan');
            $alamat_perusahaan = $this->input->post('e_alamat_perusahaan');
            $job_pos = $this->input->post('e_job_position');
            $mulai_kerja = $this->input->post('e_mulai_kerja');
            $waktu_bfr_kerja = $this->input->post('e_tgl_kerja');

            $data_tracer = array(
                'sts_kerja' => $sts_kerja,
                'nama_perusahaan' => $nama_perusahaan,
                'alamat_perusahaan' => $alamat_perusahaan,
                'posisi_kerja' => $job_pos,
                'mulai_kerja' => $mulai_kerja,
                'waktu_bfr_kerja' => $waktu_bfr_kerja
            );

            //move_uploaded_file($temp_foto, $lokasi.$foto_alumni);

            $this->M_alumni_career_center->edit_tracer($id_tracer, $data_tracer);

            $this->session->set_flashdata('pesan_tracer', 'Tracer Study anda sudah berhasil diperbarui');
            redirect('c_career_center_alumni/alumni_tracer_study');
    }

    //function untuk proses apply lowongan
    public function apply_process(){
        //jika gagal upload atau tidak ada file cv yang dimasukkan

            //proses input data apply lowongan dan upload file cv ke server
            $id_job = $this->input->post('id_job');
            $id_alumni = $this->session->userdata('id_alumni');

            $cv_name = $_FILES["cv_apply"]["name"];
            $file_type = $_FILES["cv_apply"]["type"];
            $temp_file = $_FILES["cv_apply"]["tmp_name"];
            $size_file = $_FILES["cv_apply"]["size"];

            $location = "./cv_uploads/";

            if(!empty($cv_name)){
                if($file_type == "application/pdf"){
                    if($size_file <= 2000000){
                        $new_name_cv = date('YmdHis').$cv_name;
    
                        $data = array(
                            'id_alumni' => $id_alumni,
                            'file_cv' => $new_name_cv,
                            'date_input' => date('Y-m-d H:i:s'),
                            'id_lowongan_kerja' => $id_job,
                        );
    
                        move_uploaded_file($temp_file, $location.$new_name_cv);
    
                        $this->M_alumni_career_center->apply_job($data, 'apply_lowongan');
            
                        $this->session->set_flashdata('pesan_upload', 'CV sudah di apply');
                        redirect('c_career_center_alumni/job_vacancy');
                    }else{
                        $this->session->set_flashdata('pesan_upload', 'CV harus kurang dari 2mb');
                        redirect('c_career_center_alumni/job_vacancy');
                    }
                }else{
                    $this->session->set_flashdata('pesan_upload', 'CV harus file PDF');
                    redirect('c_career_center_alumni/job_vacancy');
                }
            }else{
                $this->session->set_flashdata('pesan_upload', 'Belum dimasukkan file CV');
                redirect('c_career_center_alumni/job_vacancy');
            }
            /*
            $data = array(
                'id_lowongan' => $id_job,
                'id_alumni' => $id_alumni,
                'file_cv' => $cv_name
            );

            $this->M_alumni_career_center->apply_job($data, 'apply_lowongan');

            $this->session->set_flashdata('pesan_upload', 'CV sudah di apply');
            redirect('c_career_center_alumni/apply');*/
    }

    //function tampilan job fair
    public function job_fair_alumni(){
        $data["job_fair"] = $this->M_alumni_career_center->get_data_job_fair();
        $this->load->view('alumni/V_alumni_job_fair', $data);
    }
    
    //contact us
    public function kritik_saran(){
        $id_alumni = $this->session->userdata("id_alumni");
        $data["k_data_alumni"] = $this->M_alumni_career_center->k_data_alumni($id_alumni);
        
        $this->load->view("alumni/kritik_saran", $data);
    }
    
    //proses input ks
    public function process_tambah_ks(){
        $this->form_validation->set_rules("pesan", "Pesan", "required|trim|xss_clean");
        
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
        
        if($this->form_validation->run() == TRUE){
            $nim = $this->input->post("nim_alumni");
            $nama = $this->input->post("nama_alumni");
            $no_telepon = $this->input->post("no_telepon");
            $email = $this->input->post("email");
            $pesan = $this->input->post("pesan");
            
            $data_kritik = array(
                'nim' => $nim,
                'nama_alumni' => $nama,
                'no_telepon' => $no_telepon,
                'email' => $email,
                'pesan' => $pesan
            );
            
            $this->M_alumni_career_center->input_kritik($data_kritik, 'kritik_saran');
            
            $this->session->set_flashdata('kritik_saran', 'Kritik dan saran anda sudah dikirim');
            
            redirect("c_career_center_alumni/kritik_saran");
        }else{
            $id_alumni = $this->session->userdata("id_alumni");
            $data["k_data_alumni"] = $this->M_alumni_career_center->k_data_alumni($id_alumni);
            
            $this->load->view("alumni/kritik_saran", $data);
        }
    }
}
?>