<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_lapor_User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_lapor_User');
            $this->load->library('form_validation');
        }
        public function index()
        {
          
            $this->load->view('/user/index.php');
            
        }
        public function tambah()
        {

            $data ['title']='Tambah Data Lapor';

            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('id_lapor','Id_lapor','required');
            $this->form_validation->set_rules('nama_lapor','Nama','required');
            $this->form_validation->set_rules('kecamatan','kecamatan','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('judul','judul','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('foto_tragedi','foto_tragedi','required');

            if ($this->form_validation->run()==FALSE){
                $this->load->view('/user/index.php');
            }
            else{
                $upload = $this->M_lapor->upload();
                if($upload ['result'] == 'success'){
                    $this->Siswa_model->tambahdatalapor($upload);
                    $this->session->set_flashdata('flash-data','ditambahkan');
                    redirect('lapor','refresh');
                }else{
                    echo $upload['error'];
                }
            }
        }

    }
    ?>