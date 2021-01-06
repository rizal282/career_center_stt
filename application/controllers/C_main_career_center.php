<?php
//selamat datang di career center, ini adalah file controller utama

class C_main_career_center extends CI_Controller{
    //ini landing page
    /*public function index(){
        $this->load->view('utama/V_main_career_center');
    }*/

    //fungsi untuk login alumni
    public function index(){
        $this->load->view('alumni/V_login_alumni');
    }

    //fungsi untuk login admin
    public function login_admin(){
        $this->load->view('admin/V_login_admin');
    }

    //function untuk menampilkan form pembuatan akun baru alumni
    public function create_new_account(){
        $this->load->view('alumni/V_alumni_buat_akun');
    }

    //register user alumni
    public function add_new_alumni(){
        $this->form_validation->set_rules('nim','NIM','required');
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
        $this->form_validation->set_rules('gender','Jenis Kelamin','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('pgr_study','Program Studi','required');
        $this->form_validation->set_rules('thn_masuk','Tahun Masuk','required');
        $this->form_validation->set_rules('thn_lulus','Tahun Lulus','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('no_hp','Nomor HP','required|numeric');
        $this->form_validation->set_rules('password','Password','required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if($this->form_validation->run() == TRUE){
            //variable upload foto alumni
            $nama_foto = $_FILES["foto_alumni"]["name"];
            $tipe_foto = $_FILES["foto_alumni"]["type"];
            $size_foto = $_FILES["foto_alumni"]["size"];
            $temp_foto = $_FILES["foto_alumni"]["tmp_name"];

            $lokasi = "./foto_alumni/";

            $size = 2000000;

            if(!empty($nama_foto)){
                if($tipe_foto == "image/jpg" || $tipe_foto == "image/jpeg" || $tipe_foto == "image/png"){
                    if($size_foto <= $size){
                        
                        $nim = $this->input->post('nim');

                        $cek_nim = $this->M_main_career_center->cek_nim($nim);

                        if($cek_nim->num_rows() == 1){
                            $this->session->set_flashdata('pesan_tambah_alumni', 'NIM yang Anda masukkan sudah digunakan!');
                            redirect('c_main_career_center/create_new_account');
                        }else{
                            $foto_alumni = date('YmdHis').$nama_foto;
                            //memecah tanggal masuk kuliah
                            $input_date = $this->input->post('thn_masuk');
                            $date_join = explode("-", $input_date);

                            //memecah tanggal lulus kuliah
                            $input_tgl = $this->input->post('thn_lulus');
                            $date_grad = explode("-", $input_tgl);

                            $new_data_alumni = array(
                                'id_alumni' => $this->input->post('nim'),
                                'nama_alumni' => $this->input->post('nama_lengkap'),
                                'j_kelamin' => $this->input->post('gender'),
                                'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
                                'program_studi' => $this->input->post('pgr_study'),
                                'tahun_masuk' => $date_join[0],
                                'tahun_lulus' => $date_grad[0],
                                'email' => $this->input->post('email'),
                                'no_hp' => $this->input->post('no_hp'),
                                'password' => $this->input->post('password'),
                                'foto_alumni' => $foto_alumni
                            );

                            move_uploaded_file($temp_foto, $lokasi.$foto_alumni);

                            $this->M_main_career_center->add_new_data_alumni($new_data_alumni, 'akun_alumni');

                            $this->session->set_flashdata('pesan_tambah_alumni', 'Anda berhasil membuat akun, <a href="'.site_url().'c_main_career_center">silahkan login</a>');
                            redirect('c_main_career_center/create_new_account');
                        }
                    }else{
                        $this->session->set_flashdata('pesan_tambah_alumni', 'Foto Anda harus dibawah 2MB');
                        redirect('c_main_career_center/create_new_account');
                    }
                }else{
                    $this->session->set_flashdata('pesan_tambah_alumni', 'Type foto yang anda masukkan harus JPG, JPEG, atau PNG');
                    redirect('c_main_career_center/create_new_account');
                }
            }else{
                $this->session->set_flashdata('pesan_tambah_alumni', 'Foto Anda belum dimasukkan');
                redirect('c_main_career_center/create_new_account');
            }
        }else{
            $this->load->view('alumni/V_alumni_buat_akun');
        }
    }
    
    //login alumni
    public function processing_login_alumni(){
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if($this->form_validation->run() == TRUE){
            $nim_alumni = $this->input->post('nim');
            $password_alumni = $this->input->post('password');

            $data_login_alumni = $this->M_main_career_center->get_data_log_alumni($nim_alumni, $password_alumni);

            //cek jika data ada 1
            if($data_login_alumni->num_rows() == 1){
                foreach($data_login_alumni->result() as $row){
                   $alumni["id_alumni"] = $row->id_alumni;
                   $alumni["nama_alumni"] = $row->nama_alumni;
                   $alumni["password"] = $row->password;
                }

                $this->session->set_userdata($alumni);
                redirect('c_career_center_alumni');
            }else{
                $this->session->set_flashdata('pesan_login', 'Tidak bisa login, mungkin anda belum daftar akun');
                redirect('c_main_career_center');
            }
        }else{
            $this->load->view('alumni/V_login_alumni');
        }
    }
    
    //proses login admin
    public function proses_login_admin(){
        //set validasi form sebelum masuk ke halaman admin
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

        //jika validasi form login benar atau salah
        if($this->form_validation->run() == TRUE){
            
            //tangkap yang diinput oleh user dengan method post dan simpan dalam variable
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //panggil fungsi login yang ada di model m_main_career_center dan simpan dlm variable
            $data_admin_login = $this->M_main_career_center->get_data_log_admin($username, $password);

            //cek data login admin jika ada
            if($data_admin_login->num_rows() == 1){

                //tangkap data dari tbl akun_admin, lalu simpan dalam variable untuk autentikasi login
                foreach($data_admin_login->result() as $admin){
                    $data_log["id_admin"] = $admin->id_admin;
                    $data_log["username"] = $admin->username;
                    $data_log["password"] = $admin->password;
                }

                $this->session->set_userdata($data_log);

                //arahkan ke controller admin
                redirect('c_career_center_admin');
            }else{
                $this->session->set_flashdata('login_warning', 'Anda Bukan Admin!');
                redirect('c_main_career_center/login_admin');
            }
        }else{
            $this->session->set_flashdata('login_warning', 'Isi Lengkap Form Login!');
            redirect('c_main_career_center/login_admin');
        }
    }

    //logout untuk admin
    public function logout_admin(){
        $this->session->sess_destroy();
        redirect('c_main_career_center/login_admin');
    }

    //logout untuk alumni
    public function logout_alumni(){
        $this->session->sess_destroy();
        redirect('c_main_career_center');
    }
}


?>