<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Data extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Data');
            $this->load->library('form_validation');
        } 
        public function index()
        {
          
            $this->load->view('/admin/tables.php');
            
        }

    }
    ?>