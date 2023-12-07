<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Konten_model', 'konten2');
	}

	public function index() {
		$this->load->library('pagination');
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

		//ambil data search

		if($this->input->post('submit')){
			$cari['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $cari['keyword']);
		}else{
			$cari['keyword'] = $this->session->userdata('keyword');
		}
		$this->db->like('judul', $cari['keyword']);

		//pagination
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 4;
		$this->pagination->initialize($config);
		$mulai['start'] = $this->uri->segment(3);

		//Recent Post
		$this->db->from('konten')->limit(5);
		$this->db->order_by('tanggal', 'DESC');
		$recent = $this->db->get()->result_array();

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> "Beranda | Lutakike",
			'konfig'	=> $this->db->get('konfigurasi')->row(),
			'kategori'	=> $this->db->get('kategori')->result_array(),
			'caraousel' =>  $this->db->get('caraousel')->result_array(),
			'galeri'	=> $this->db->get('galeri')->result_array(),
			'galeri2' 	=> $galeri2,
			'konten' 	=> $konten,
			'recent'	=> $recent,
			'konten2' 	=> $this->konten2->getKonten($config['per_page'], $mulai['start'], $cari['keyword']),
		);
		$this->template->load('template_frontend','beranda', $data);
	}

	public function artikel($id) {
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();

		//Recent Post
		$this->db->from('konten')->limit(5);
		$this->db->order_by('tanggal', 'DESC');
		$recent = $this->db->get()->result_array();

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> $konten->judul." | Lutakike",
			'konfig'	=> $konfig,
			'galeri2' 	=> $galeri2,
			'kategori'	=> $kategori,
			'recent'	=> $recent,
			'konten' => $konten
		);
		$this->template->load('template_frontend','detail', $data);
	}

	public function galeri(){
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> "Beranda | Lutakike",
			'konfig'	=> $this->db->get('konfigurasi')->row(),
			'kategori'	=> $this->db->get('kategori')->result_array(),
			'galeri'	=> $this->db->get('galeri')->result_array(),
			'galeri2' 	=> $galeri2,
			'konten' => $konten,
		);
		$this->template->load('template_frontend','galeri',$data);
	}

	public function kategori($id) {
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> $nama_kategori." | Lutakike",
			'nama_kategori' => $nama_kategori,
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'galeri2' 	=> $galeri2,
			'konten' => $konten
		);
		$this->template->load('template_frontend','kategori', $data);
	}

	public function contact(){
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> "Beranda | Lutakike",
			'konfig'	=> $this->db->get('konfigurasi')->row(),
			'kategori'	=> $this->db->get('kategori')->result_array(),
			'galeri2' 	=> $galeri2,
			'konten' => $konten
		);
		$this->template->load('template_frontend','contact',$data);
	}
	public function about(){
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

		//galeri footer
		$this->db->from('galeri')->limit(12);
		$galeri2 = $this->db->get()->result_array();

		$data = array(
			'judul'		=> "Beranda | Lutakike",
			'konfig'	=> $this->db->get('konfigurasi')->row(),
			'kategori'	=> $this->db->get('kategori')->result_array(),
			'galeri2' 	=> $galeri2,
			'konten' => $konten,
		);
		$this->template->load('template_frontend','about',$data);
	}

	public function simpanpesan(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data = [
			'nama' => $nama,
			'email' => $email,
			'isi_saran' => $pesan,
			'tanggal'	=> date('Y-m-d')
		];
		$this->db->insert('saran',$data);
		$this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Saran Dan Pesan Berhasil Terkirim
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
		redirect('home/contact');
	}
}
