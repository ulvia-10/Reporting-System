<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_lapor_User extends CI_Model {

   
        public function count_all(){
            return $this->db->count_all('lapor'); // Untuk menghitung semua data lapor
          }
        public function tambahdatalapor($upload){
            $data=array(
            "id_lapor"=>$this->input->post('id_lapor',true),
            "nama_lapor"=>$this->input->post('nama_lapor',true),
            "kecamatan"=>$this->input->post('kecamatan',true),
            "alamat"=>$this->input->post('alamat',true),
            "tgl_tragedi"=>$this->input->post('tgl_tragedi',true),
            "judul"=>$this->input->post('judul',true),
            "keterangan"=>$this->input->post('keterangan',true),
            "jurusan"=>$this->input->post('jurusan',true),
            "foto_tragedi" => $upload ['file']['file_name'],
            );
            $this->db->insert('', $data);
        }
        public function upload(){    
            $config['upload_path'] = './images/';    
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto_tragedi')){
                $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
                return $return;
            }else{      
                $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
                return $return;   
            }  
        }


    }
  
?>