<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Data extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Data');
            $this->load->model('Cetak_model_data');
            $this->load->library('form_validation');
        } 
        public function index()
        {
            $data['lapor'] = $this->M_Data->getlaporkategori();
            if($this->input->post('keyword')){
                #code...
                $data['lapor']=$this->M_Data->cariData();
            }
            $this->load->view('template/V_template_admin_header',$data);
            $this->load->view('template/V_header_datatabels');
            $this->load->view('admin/tables',$data);
            $this->load->view('template/V_footer_datatabels');
            $this->load->view('template/V_template_admin_footer',$data);
        }
        public function tambah()
        {

            $data ['title']='Form Menambahkan Data Kondisi WIlayah';

            $this->load->helper(array('form','url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('id_lapor','id_lapor','required');
            $this->form_validation->set_rules('nama_lapor','nama','required');
            $this->form_validation->set_rules('judul','judul','required');
            $this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('kecamatan','kecamatan','required');
            $this->form_validation->set_rules('alamat','alamat','required');
            $this->form_validation->set_rules('keterangan','keterangan','required');

            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/tables");
            }
            else{
                $upload = $this->M_Data->upload();
                if($upload ['result'] == 'success'){
                    $this->M_Data->tambahdatalpr($upload);
                    $this->session->set_flashdata('flash-data','ditambahkan');
                    redirect('lapor','refresh');
                }else{
                    echo $upload['error'];
                }
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Data Kondisi Wilayah';
            $data['lapor']= $this->M_Data->getlaporByID($id);
            $this->load->view("admin/siswa/detailsiswa",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Siswa';
            $this->form_validation->set_rules('id_lapor','id_lapor','required');
            $this->form_validation->set_rules('nama_lapor','nama','required');
            $this->form_validation->set_rules('judul','judul','required');
            $this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('kecamatan','kecamatan','required');
            $this->form_validation->set_rules('alamat','alamat','required');
            $this->form_validation->set_rules('keterangan','keterangan','required');

            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['siswa']= $this->M_Data->getlaporByID($id);        
                $this->load->view("admin/siswa/editsiswa", $data);
            }
            else{
            #code...
                $this->M_Data->ubahdatapegawai();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('Siswa','refresh');
            }
        }   

        public function hapus($id){
            $this->M_Data->hapusdatalpr($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('Siswa','refresh');
        }
    public function cetakLaporan(){
        
        $this->load->library('pdf_siswa');
        $data['lapor'] = $this->Cetak_model_data->view();
        $this->pdf_siswa->setPaper('A4', 'portrait');
        $this->pdf_siswa->filename = "laporansiswa.pdf";
        $this->pdf_siswa->load_view('admin/siswa/laporansiswa',$data);
    }

    }
    ?>