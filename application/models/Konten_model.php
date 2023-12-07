<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten_model extends CI_Model {
	public function getAllKonten(){
        return $this->db->get('konten')->result_array();
    }

    public function getKonten($limit, $start, $keyword = null) {
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        if ($keyword){
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('nama_kategori', $keyword);
        }
        return $this->db->get('', $limit, $start)->result_array();
    }

    public function countAllKonten(){
        return $this->db->get('konten')->num_rows();
    }
}