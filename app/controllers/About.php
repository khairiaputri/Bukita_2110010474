<?php
    class About extends Controller {

        public function __construct(){
            if($_SESSION['session_login'] != 'sudah_login') {
                Flasher::setMessage('Login','Tidak ditemukan.','danger');
                header('location: '. base_url . '/login');
                exit;
            }
        }
        
        public function index(){
            $data['title'] = 'Halaman About me';
            $data['nama'] = 'Khairia Putri';
            $data['npm'] = '2110010474';
            $data['alamat'] = 'Jl.Sultan Adam';
            
            
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
    }
        