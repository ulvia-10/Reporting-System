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

            $data['dataCategory'] = $this->M_lapor_User->getDataCategory();
            $data['namamu'] = "Ulvia";

            $this->load->view('template/V_template_header'); // header
            $this->load->view('user/V_lapor', $data); // main content
            $this->load->view('template/V_template_footer'); // header
            
        }
        public function tambah()
        {

            $data ['title']='Tambah Data Lapor';

            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nama_lapor','Nama','required');
            $this->form_validation->set_rules('kecamatan','kecamatan','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('judul','judul','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');

            if ($this->form_validation->run()==FALSE){ // terdapat form yang dipenuhi...
                
                $this->index();
                
            }
            else {
                    
                // kirim data ke model 
                $this->M_lapor_User->processInsertData();
                
            }

         
        }
        public function detail($id)
        {
            $data['title']='Detail Kondisi Wilayah ';
            $data['lapor']= $this->M_lapor_Admin->getabsensiByID($id);
            $this->load->view("admin/lapor/detailabsensi",$data);
        }
        public function edit($id){
            $data ['title']='Form Edit Data Kondisi Wilayah ';
            $this->form_validation->set_rules('id_lapor','Id_lapor','required');
            $this->form_validation->set_rules('nama_lapor','Nama','required');
            $this->form_validation->set_rules('kecamatan','kecamatan','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('judul','judul','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('foto_tragedi','foto_tragedi','required');

            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['lapor']= $this->M_lapor_Admin->getabsensiByID($id);        
                $this->load->view("admin/absensi/editabsensi", $data);
            }
            else{
            #code...
                $this->M_lapor_Admin->ubahdataabsensi();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('lapor','refresh');
            }
        }   

        public function hapus($id){
            $this->M_lapor_Admin->hapusdatakpw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('lapor','refresh');
        }

      
    }
        ?>
