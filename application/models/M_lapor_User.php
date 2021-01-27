<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_lapor_User extends CI_Model {
   
        public function count_all(){
            return $this->db->count_all('user'); // Untuk menghitung semua data lapor
          }
        
        public function tambahdatalapor($upload){
            $data=array(
            "id_user"=>$this->input->post('id_user',true),
            "nama_lengkap"=>$this->input->post('nama_lengkap',true),
            "jenis_kelamin"=>$this->input->post('jenis_kelamin',true),
            "email"=>$this->input->post('email',true),
            "no_telp"=>$this->input->post('no_telp',true),
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