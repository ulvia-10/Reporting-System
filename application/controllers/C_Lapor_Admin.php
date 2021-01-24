<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_lapor_Admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Data');
            $this->load->library('form_validation');
        } 
        public function index()
        {
            $this->load->view('template/V_template_admin_header');
            $this->load->view('admin/index');
            $this->load->view('template/V_template_admin_footer');
            
        }
        public function tambah()
        {
            $data['title']='Form Menambahkan Data Kondisi Wilayah ';
        
            $this->form_validation->set_rules('tgl_absen','tgl_absen','required');
            $this->form_validation->set_rules('hadir','hadir');
            $this->form_validation->set_rules('sakit','sakit');
            $this->form_validation->set_rules('izin','izin');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/absensi/tambahabsensi", $data);
            }
            else{
                $this->M_lapor_Admin->tambahdataabsensi();
                redirect('lapor','refresh');
            
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
            $this->form_validation->set_rules('id_siswa','id_siswa','required');
            $this->form_validation->set_rules('tgl_absen','tgl_absen','required');
            $this->form_validation->set_rules('hadir','hadir','required');
            $this->form_validation->set_rules('sakit','sakit','required');
            $this->form_validation->set_rules('izin','izin','required');

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