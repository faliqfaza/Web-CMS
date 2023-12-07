<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivitas extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
        $this->db->from('aktivitas');
        $this->db->order_by('tanggal', 'DESC');
        $recent = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Halaman Aktivitas User',
            'aktivitas'     => $recent,
		);
		$this->template->load('template_admin', 'admin/aktivitas_index',$data);
	}

    public function hapus(){
        $where = array(
            'id_recent_login' => $id
        );
        $this->db->Delete('aktivitas', $where);

        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Data Be3rhasil Dihapus
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/aktivitas');
    }

    public function hapussemua(){
        $this->db->empty_table('aktivitas');
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Semua Data Berhasil dihapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/aktivitas');
    }
}