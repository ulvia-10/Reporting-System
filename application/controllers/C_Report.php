<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Report extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_lapor_User');
            $this->load->library('form_validation');
        }
        public function index()
        {
          
            $this->load->view('/user/lapor.php');
            
        }
    }
        ?>