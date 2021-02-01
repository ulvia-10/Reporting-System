<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_lapor_User extends CI_Model {
   
        
        // get data category
        function getDataCategory() {

            return $this->db->get('kategori');
            // SELECT * FROM kategori
        }



        // process insert data report (butuh penggabungan session dari lusi)
        function processInsertData() {

            $foto = "";

            $id_user = 1; // percobaan id (sementara)
            // $id_user = $this->session->userdata('sess_id');

            $config['upload_path']          = './assets/images/'; // direktori lokal
            $config['allowed_types']        = 'jpeg|jpg|png'; // ekstensi
            $config['max_size']             = 3000; // 3 mb

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( $this->upload->do_upload('foto_tragedi') ) {

                $foto = $this->upload->data('file_name');

            } else {

                $err_upload = $this->upload->display_errors();
                $pesan = '<div class="alert alert-danger">'.$err_upload.'</div>';

                $this->session->set_flashdata('msg', $pesan);
                redirect('C_report/index');
            }

            $data = array(

                'id_kategori'   => $this->input->post('kategori'),
                'id_user'       => $id_user,
                'status_lapor'  => "diperiksa",
                'nama_lapor'    => $this->input->post('nama_lapor'),
                'kecamatan'     => $this->input->post('kecamatan'),
                'alamat'        => $this->input->post('alamat'),
                'tgl_tragedi'   => $this->input->post('tgl_tragedi'),
                'judul'         => $this->input->post('judul'),
                'keterangan'    => $this->input->post('keterangan'),
                'foto_tragedi'  => $foto
            );

            // execute
            $this->db->insert( 'lapor', $data );

            $pesan = '<div class="alert alert-info">Data Berhasil Disimpan! </div>';
  

            $this->session->set_flashdata('msg', $pesan);
            redirect('C_report/index');
        }


    }
  
?>