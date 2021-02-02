<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Data extends CI_Model {
        public function count_all(){
            return $this->db->count_all('lapor'); // Untuk menghitung semua data lapor
          }
          public function getlaporByID($id)
        {
            // return $this->db->get_where('lapor',array('id_lapor'=>$id))->row_array();
         
            $sql="SELECT a.id_lapor,b.id_kategori,b.nama_kategori, a.nama_lapor,a.kecamatan,a.alamat, a.foto_tragedi, a.tgl_tragedi, a.keterangan, a.judul
            FROM lapor a, kategori b 
            where a.id_kategori = b.id_kategori AND a.id_lapor = '$id'";
            
            return $this->db->query($sql)->row_array();
         
        }
        public function get_chart_user()
        {
            $query = $this->db->get('user');
            return $query->num_rows();
        }
        public function get_chart_lapor()
        {
            $query = $this->db->get('lapor');
            return $query->num_rows();
        }
        
        public function getlaporkategori()
        {
            $sql="SELECT a.id_lapor,b.id_kategori,b.nama_kategori, a.nama_lapor,a.kecamatan,a.alamat,a.status_lapor,a.tgl_tragedi
            FROM lapor a, kategori b 
            where a.id_kategori = b.id_kategori";
            return $this->db->query($sql);
        }
        public function getalluser(){
            return $this->db->get('user');
         }
    
         public function tambahdatalpr($upload){
            $data=array(
                "nama_lapor"=>$this->input->post('nama_lapor',true),
                "judul"=>$this->input->post('judul',true),
                "nama_kategori"=>$this->input->post('nama_kategori',true),
                "tgl_tragedi"=>$this->input->post('tgl_tragedi',true),
                "kecamatan"=>$this->input->post('kecamatan',true),
                "judul"=>$this->input->post('judul',true),
                "keterangan"=>$this->input->post('keterangan',true),
                // "foto_tragedi"=>$this->input->post('foto_tragedi',true)
            );
            $this->db->insert('lapor', $data);
        }
        public function upload(){    
            $config['upload_path'] = '. /images/';    
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

        public function cariData(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama_lapor',$keyword);
            $this->db->or_like('id_lapor',$keyword);
            return $this->db->get('lapor')->result_array();
        }

        public function ubahdata(){
            
            $data = [
                "id_kategori"   =>$this->input->post('nama_kategori',true),
                "nama_lapor"    =>$this->input->post('nama_lapor',true),
                "kecamatan"     =>$this->input->post('kecamatan',true),
                "alamat"        =>$this->input->post('alamat',true),
                "tgl_tragedi"   =>$this->input->post('tgl_tragedi',true),
                "judul"     =>$this->input->post('judul',true),
                "keterangan"=>$this->input->post('keterangan',true)
            ];
            
            $this->db->where('id_lapor', $this->input->post('id_lapor'));
            $this->db->update('lapor', $data);
            
        }    

        public function hapusdatalpr($id){
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
