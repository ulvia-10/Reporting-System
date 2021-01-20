<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_lapor_Admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Lapor_Admin');
            $this->load->library('form_validation');
        } 
        public function index()
        {
          
            $this->load->view('/admin/index.php');
            
        }

    }
    ?>