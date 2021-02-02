<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Data extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('M_Data');
            $this->load->model('Cetak_model_data');
            $this->load->model('M_lapor_User');

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
            // $this->load->view('template/V_header_datatabels');
            $this->load->view('admin/tables',$data);
            // $this->load->view('template/V_footer_datatabels');
            $this->load->view('template/V_template_admin_footer',$data);
         
        }
        public function indexuser()
        {
            $data['user'] = $this->M_Data->getalluser();
            if($this->input->post('keyword')){
                #code...
                $data['user']=$this->M_Data->cariData();
            }
            $this->load->view('template/V_template_admin_header',$data);
            $this->load->view('template/V_header_datatabels');
            $this->load->view('admin/tables_user',$data);
            $this->load->view('template/V_footer_datatabels');
            $this->load->view('template/V_template_admin_footer',$data);
        }
      
        public function detail($id)
        {
            $data['title']='Detail Data Kondisi Wilayah';
            $data['lapor']= $this->M_Data->getlaporByID($id);
            $this->load->view('template/V_template_admin_header',$data);
            $this->load->view("admin/detailkondisi",$data);
            $this->load->view('template/V_template_admin_footer',$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Siswa';
            $data['dataCategory'] = $this->M_lapor_User->getDataCategory();

            $this->form_validation->set_rules('id_lapor','id_lapor','required');
            $this->form_validation->set_rules('nama_lapor','nama','required');
            $this->form_validation->set_rules('judul','judul','required');
            $this->form_validation->set_rules('tgl_tragedi','tgl_tragedi','required');
			$this->form_validation->set_rules('kecamatan','kecamatan','required');
            $this->form_validation->set_rules('alamat','alamat','required');
            $this->form_validation->set_rules('keterangan','keterangan','required');

            if ($this->form_validation->run() == FALSE){
                #code...    
                $data['lapor']= $this->M_Data->getlaporByID($id);        
                $this->load->view('template/V_template_admin_header',$data);
                $this->load->view("admin/editkondisi", $data);
                $this->load->view('template/V_template_admin_footer',$data);
            }
            else{
                // #code...
                $this->M_Data->ubahdata();

                $msg = '<div class="alert alert-info">Informasi pelaporan berhasil diperbarui <br> <small>Pada tanggal '.date('d F Y H.i A').'</small></div>';
                $this->session->set_flashdata('flash-data', $msg);
                redirect('C_Data/index','refresh');
            }
        }   

        public function hapus($id){
            $this->M_Data->hapusdatalpr($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('C_Data/index','refresh');
        }


        public function cetakData(){
            
            $this->load->library('pdf_laporan');
            // $data['lapor'] = $this->Cetak_model_data->view();
            // $this->pdf_siswa->setPaper('A4', 'portrait');
            // $this->pdf_siswa->filename = "laporankondisiwilayah.pdf";
            // $this->pdf_siswa->load_view('admin/laporankondisi',$data);

            $pdf = new Pdf_laporan('P', 'mm', 'A4', true, 'UTF-8', false);
            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Nicola Asuni');
            $pdf->SetTitle('TCPDF Example 001');
            $pdf->SetSubject('TCPDF Tutorial');
            $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
            $pdf->setFooterData(array(0,64,0), array(0,64,128));

            // set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
                $pdf->setLanguageArray($l);
            }

            // ---------------------------------------------------------

            // set default font subsetting mode
            $pdf->setFontSubsetting(true);

            // Set font
            // dejavusans is a UTF-8 Unicode font, if you only need to
            // print standard ASCII chars, you can use core fonts like
            // helvetica or times to reduce file size.
            // $pdf->SetFont('dejavusans', '', 14, '', true);

            // Add a page
            // This method has several options, check the source code documentation for more information.
            $pdf->AddPage();
            // header table


            $namaMahasiswa = ['Ulvia', 'Rizky Aul', 'Lusiana', 'Ely MSI'];
            $table_body = '';

            foreach ( $namaMahasiswa AS $row ) {

                $table_body .= '<tr>
                
                    <td>Nomornya</td>
                    <td></td>
                    <td>'.$row.'</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>';
            }

            $table = '
            <table border="1" width="100%" cellpadding="6">
                <tr>
                    <th width="5%" height="20" padding="5" align="center"><b>No</b></th>
                    <th width="11%" align="center"><b>Tanggal</b></th>
                    <th width="15%" align="center"><b>Nama</b></th>
                    <th width="21%" align="center"><b>Status</b></th>
                    <th width="10%" align="center"><b>Keperluan</b></th>
                    <th width="25%" align="center"><b>Rincian</b></th>
                    <th width="13%" align="center"><b>Selesai Pelayanan</b></th>
                    
                </tr>
                
                '.$table_body.'
            </table>';


            $pdf->writeHTML($table, true, false, true, false, '');


            // ---------------------------------------------------------

            // Close and output PDF document
            // This method has several options, check the source code documentation for more information.
            $pdf->Output('testing.pdf', 'I');

            //============================================================+
            // END OF FILE
            //============================================================+
                    }

    }
    ?>
