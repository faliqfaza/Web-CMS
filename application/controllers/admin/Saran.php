<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
	}

	public function index(){
        $this->db->from('saran');
        $this->db->order_by('tanggal', 'ASC');
        $pesan = $this->db->get()->result_array();

        $data = [
            'judul_halaman' => 'Halaman Pesan',
            'pesan'         => $pesan,
        ];
        $this->template->load('template_admin','admin/saran_index', $data);
    }

    public function hapus($id){
        $this->db->where('id_saran',$id);
        $this->db->delete('saran');

        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Data Berhasil dihapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/saran');
    }

    public function hapussemua(){
        $this->db->empty_table('saran');
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Semua Data Berhasil dihapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/saran');
    }
}