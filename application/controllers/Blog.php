<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		blog_access();
	}

	public function index()
	{
		$query = $this->db->select('blog.*,product.*')->JOIN('product','id_product','blog.id_product')->order_by('id_blog', 'DESC');
		// $query = $this->db->select('*')->from('blog')->order_by('id_blog', 'DESC')->get();
		$query = $this->db->get('blog');
        $data['blog'] = $query->result_array();
		// $this->db->where('id_product',);
		// $data['blog'] = $this->db->select('*')->from('blog')->get()->result_array();
		// // $data['blog'] = $this->db->get('blog')->result_array;
		// // $data['blog'] = $query->result_array();
		// $data['blog'] = $query->result_array();
		$data['page_title'] = 'Blog | Tabel' ;

		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/index', $data);
		$this->load->view('dashboard/footer_');
	}

	public function konten($id)
	{
		$data['page_title'] = 'Blog | Konten' ;
		$this->db->where('id_blog', $id);
		$query = $this->db->get('blog');
		$data['row'] = $query->row_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/konten',$data);
		$this->load->view('dashboard/footer_');
	}


	public function add()
	{
		$data['page_title'] = 'Blog | Tambah' ;
		$data['product'] = $this->db->select('*')->from('product')->get()->result_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/create',$data);
		$this->load->view('dashboard/footer_');
    }

	public function add_process()
	{
		$post =  $this->input->post();
		$data = array(
			'judul' => $post['judul'],
			'tanggal' => $post['tanggal'],
			'link_yt' => $post['link_yt'],
			'isi' => $post['isi'],
			'nama_penulis' => $post['nama_penulis'],
			'foto_penulis' => $post['foto_penulis'],
			'id_product' => $post['id_product'],
			'etc' => $post['etc'],
			'meta_keyword' => $post['meta_keyword'],
			'meta_deskripsi' => $post['meta_deskripsi'],
		);
		if(!empty($_FILES['background']['name'])) {

			$config['file_name'] = 'background-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/blog/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			// $this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('background')) {
				$file = $this->upload->data();
				$background = $file['file_name'];
				$data['background'] = $background;
				
			}
		}

		
		$this->db->insert('blog', $data);
		$this->session->set_flashdata('success', "Berhasil");
		
		redirect('blog');
		
	}

	public function edit($id)
	{
		$data['page_title'] = 'Blog | Edit' ;
		$data['product'] = $this->db->select('*')->from('product')->get()->result_array();
		$this->db->where('id_blog', $id);
		$query = $this->db->get('blog');
		$data['row'] = $query->row_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/edit',$data);
		$this->load->view('dashboard/footer_');
	}

	public function edit_proses()
	{
		$post = $this->input->post();
		$data = array(
			'judul' => $post['judul'],
			'tanggal' => $post['tanggal'],
			'link_yt' => $post['link_yt'],
			'isi' => $post['isi'],
			'nama_penulis' => $post['nama_penulis'],
			'foto_penulis' => $post['foto_penulis'],
			'id_product' => $post['id_product'],
			'etc' => $post['etc'],
			'meta_keyword' => $post['meta_keyword'],
			'meta_deskripsi' => $post['meta_deskripsi'],
		);

		// if($post['password'] != ""){
		// 	$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
		// }
		if(!empty($_FILES['background']['name'])) {

			$config['file_name'] = 'background-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/blog/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			// $this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('background')) {
				$file = $this->upload->data();
				$background = $file['file_name'];
				$data['background'] = $background;
				if(file_exists("/public/img/blog" . $post['oldImg'])){
					unlink("/public/img/blog/" . $post['oldImg']);
				}
			}
		}
		
		$this->db->where('id_blog', $post['id_blog']);
		$this->db->update('blog', $data);
		$this->session->set_flashdata('success', "berhasil diedit");
		redirect('blog');
	}
	
	public function del($id)
	{
		$this->db->where('id_blog', $id);
		$this->db->delete('blog');
		$this->session->set_flashdata('success', "Berhasil");
		redirect('blog');
	}











	// sitemap

	public function sitemap_index()
	{
		$data['page_title'] = 'Sitemap | Home' ;
		$data['sitemap'] = $this->db->get('sitemap')->result_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/sitemap/index',$data);
		$this->load->view('dashboard/footer_');
    }

	public function sitemap_add_process()
	{
		$post =  $this->input->post();
		$data = array(
			'tanggal' => $post['tanggal'],
			
		);
		if(!empty($_FILES['sitemap']['name'])) {

			$config['file_name'] = 'sitemap';
			$config['upload_path'] = './public/sitemap/';
			$config['allowed_types'] = 'xml';
			$config['overwrite'] = TRUE;
			// $config['max_size'] = 2048;
			
			// $this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('sitemap')) {
				$file = $this->upload->data();
				$sitemap = $file['file_name'];
				$data['sitemap'] = $sitemap;
				
			}
		}

		
		$this->db->insert('sitemap', $data);
		$this->session->set_flashdata('success', "Berhasil");
		
		redirect('blog/sitemap_index');
		
	}

	public function sitemap_edit($id)
	{
		$data['page_title'] = 'Sitemap | Edit' ;
		$data['sitemap'] = $this->db->select('*')->from('sitemap')->get()->result_array();
		$this->db->where('id_sitemap', $id);
		$query = $this->db->get('sitemap');
		$data['row'] = $query->row_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/blog/sitemap/edit',$data);
		$this->load->view('dashboard/footer_');
	}

	public function sitemap_edit_proses()
	{
		$post = $this->input->post();
		$data = array(
			'judul' => $post['judul'],
			'tanggal' => $post['tanggal'],
			'link_yt' => $post['link_yt'],
			'isi' => $post['isi'],
			'nama_penulis' => $post['nama_penulis'],
			'foto_penulis' => $post['foto_penulis'],
			'id_product' => $post['id_product'],
			'etc' => $post['etc'],
		);

		// if($post['password'] != ""){
		// 	$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
		// }
		if(!empty($_FILES['background']['name'])) {

			$config['file_name'] = 'background-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/blog/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			// $this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('background')) {
				$file = $this->upload->data();
				$background = $file['file_name'];
				$data['background'] = $background;
				if(file_exists("/public/img/blog" . $post['oldImg'])){
					unlink("/public/img/blog/" . $post['oldImg']);
				}
			}
		}
		
		$this->db->where('id_blog', $post['id_blog']);
		$this->db->update('blog', $data);
		$this->session->set_flashdata('success', "berhasil diedit");
		redirect('blog');
	}
	
	public function sitemap_del($id)
	{
		$this->db->where('id_blog', $id);
		$this->db->delete('blog');
		$this->session->set_flashdata('s_success', "Berhasil");
		redirect('blog');
	}
}
