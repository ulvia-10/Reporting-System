<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Data extends CI_Model {
        public function count_all(){
            return $this->db->count_all('lapor'); // Untuk menghitung semua data siswa
          }
          public function getlaporByID($id)
        {
            return $this->db->get_where('lapor',array('id_lapor'=>$id));
        }
        public function getlaporkategori()
        {
            $sql="SELECT a.id_lapor,b.id_kategori,b.nama_kategori, a.nama_lapor,a.kecamatan,a.alamat
            FROM lapor a, kategori b 
            where a.id_kategori = b.id_kategori";
            return $this->db->query($sql);
        }
        
         public function tambahdatalpr($upload){
            $data=array(
                "nama"=>$this->input->post('nama',true),
                "alamat"=>$this->input->post('alamat',true),
                "umur"=>$this->input->post('umur',true),
                "agama"=>$this->input->post('agama',true),
                "gender"=>$this->input->post('gender',true),
                "nama_ortu"=>$this->input->post('nama_ortu',true),
                "jurusan"=>$this->input->post('jurusan',true),
                "kelas"=>$this->input->post('kelas',true),
                "no_hp"=>$this->input->post('no_hp',true),
                "tgl_lahir"=>$this->input->post('tgl_lahir',true)

            );
            $this->db->insert('siswa', $data);
        }
        public function upload(){    
            $config['upload_path'] = './images/';    
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto')){
                $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
                return $return;
            }else{    
                $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
                return $return;   
            }  
        }

        public function cariData(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama_lapor',$keyword);
            $this->db->or_like('id_lapor',$keyword);
            return $this->db->get('lapor')->result_array();
        }
        public function ubahdata(){
            $data = [
                "nama"=>$this->input->post('nama',true),
                "alamat"=>$this->input->post('alamat',true),
                "umur"=>$this->input->post('umur',true),
                "agama"=>$this->input->post('agama',true),
                "gender"=>$this->input->post('gender',true),
                "nama_ortu"=>$this->input->post('nama_ortu',true),
                "jurusan"=>$this->input->post('jurusan',true),
                "kelas"=>$this->input->post('kelas',true),
                "no_hp"=>$this->input->post('no_hp',true),
                "tgl_lahir"=>$this->input->post('tgl_lahir',true)
                ];
            $this->db->where('id_lapor', $this->input->post('id_lapor'));
            $this->db->update('lapor', $data);
        }    
        public function hapusdata($id){
            $this->db->where('id_lapor',$id);
            $this->db->delete('lapor');
            redirect('C_Data/index','refresh');
        }

        public function datatabels(){
            $query = $this->db->order_by('id_lapor', 'ASC')->get('lapor');
            return $query->result(); 
        }
      

   }
?>