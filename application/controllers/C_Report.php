<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_report extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_lapor_User');
            $this->load->library('form_validation');
        }
        public function index()
        {
 
            // template
            $this->load->view('template/V_template_header'); // header
            $this->load->view('user/V_lapor'); // main content
            
        }
        public function test()
        {
          
           echo"Hello!";
            
        }
    }
        ?>