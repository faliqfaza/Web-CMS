<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
	}

    public function index(){
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $data = [
            'judul_halaman' => 'Halaman galeri',
            'galeri'    => $galeri
        ];
        $this->template->load('template_admin','admin/galeri_index',$data);
    }

    public function simpan(){
        $namafoto = date('ymdHis').'.jpg';
        $config['upload_path'] = 'assets/upload/galeri/';
        $config['max_size'] = 500*1024;
        $config['allowed_types'] = '*';
        $config['file_name'] = $namafoto;
        $this->load->library('upload',$config);

        $judul = $this->input->post('galeri');
        $this->db->from('caraousel')->where('judul',$judul);
        $cek = $this->db->get()->result_array();
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Ukuran foto terlalu Besar, Upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/caraousel');
        }elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        }else if($cek <> null){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Judul Galeri Sudah Ada
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/carousel');
        }else{
            $data = array('upload_data'=>$this->upload->data());
            $data = [
                'judul' => $this->input->post('judul'),
                'foto' => $namafoto,
                'tanggal' => date('D:Y-m-d')
            ];
            $this->db->insert('galeri',$data);
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Berhasil ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/galeri');
        }
    }

    public function hapus($id){
        $filename = FCPATH."assets/upload/galeri/".$id;
        if(file_exists($filename)){
            unlink("./assets/upload/galeri/".$id);
        }
        $this->db->where('foto', $id);
        $this->db->delete('galeri');
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Berhasil dihapus.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/galeri');
    }
}