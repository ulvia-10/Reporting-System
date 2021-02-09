<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    class C_login extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Login');
            $this->load->library('form_validation');
        } 
        public function index()
        {
            $this->load->view('login/login');
        }
        public function register()
        {
            $this->load->view('login/register');
        }
        public function forgotpassword()
        {
            $this->load->view('login/forgot-password');
        }
    }
    ?>
        