<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Data extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        } 
        public function index()
        {
            $this->load->view('template/V_template_admin_header');
            $this->load->view('admin/tables');
            $this->load->view('template/V_template_admin_footer');
            
        }

    }
    ?>