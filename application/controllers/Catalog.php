<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		catalog_access();
	}

	public function index()
	{
		$title['page_title'] = 'Admin | Product' ;
		$data['p_menu_open'] = 'active open' ;
		
		$query = $this->db->select('*')->from('product')->order_by('id_product', 'DESC')->get();
        $data['product'] = $query->result_array();
		$this->load->view('dashboard/header_',$title);
		$this->load->view('dashboard/catalog/index', $data);
		$this->load->view('dashboard/footer_');
	}

	public function add()
	{
		$title['page_title'] = 'Admin | Product - Tambah' ;
		$this->load->view('dashboard/header_',$title);
		$this->load->view('dashboard/catalog/create');
		$this->load->view('dashboard/footer_');
    }

	public function add_process()
	{
		$post =  $this->input->post();
		$data = array(
			'nama' => $post['nama'],
			'kode' => $post['kode'],
			'harga' => $post['harga'],
			'deskripsi' => $post['deskripsi'],
			'category' => $post['category'],
			'shopee' => $post['shopee'],
			'lazada' => $post['lazada'],
			'tokopedia' => $post['tokopedia'],
		);
		if(!empty($_FILES['foto']['name'])) {

			$config['file_name'] = 'foto-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			// $this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('foto')) {
				$file = $this->upload->data();
				$foto = $file['file_name'];
				$data['foto'] = $foto;
				if(file_exists("/public/img/upload/" . $post['oldImg'])){
					unlink("/public/img/upload/" . $post['oldImg']);
				}
			}
		}
		$this->db->insert('product', $data);
		$this->session->set_flashdata('s_success', "Berhasil");
		
		redirect('catalog/index');
	}

	public function edit($id)
	{
		$title['page_title'] = 'Admin | Product - Edit' ;
		$this->db->where('id_product', $id);
		$query = $this->db->get('product');
		$data['row'] = $query->row_array();
		$this->load->view('dashboard/header_',$title);
		$this->load->view('dashboard/catalog/edit',$data);
		$this->load->view('dashboard/footer_');
	}

	public function edit_proses()
	{
		$post = $this->input->post();
		$data = array(
			'nama' => $post['nama'],
			'kode' => $post['kode'],
			'harga' =>  $post['harga'],
			'deskripsi' =>  $post['deskripsi'],
			'category' => $post['category'],
			'shopee' => $post['shopee'],
			'lazada' => $post['lazada'],
			'tokopedia' => $post['tokopedia'],
		);

		// if($post['password'] != ""){
		// 	$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
		// }

		if(!empty($_FILES['foto']['name'])) {

			$config['file_name'] = 'foto-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/upload';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('foto')) {
				$file = $this->upload->data();
				$foto = $file['file_name'];
				$data['foto'] = $foto;
				if(file_exists("./public/img/upload" . $post['oldImg'])){
					unlink("./public/img/upload" . $post['oldImg']);
				}
			}
		}
		
		$this->db->where('id_product', $post['id_product']);
		$this->db->update('product', $data);
		$this->session->set_flashdata('success', "berhasil diedit");
		redirect('catalog/index');
	}
	
	public function del($id)
	{
		$this->db->where('id_product', $id);
		$this->db->delete('product');
		$this->session->set_flashdata('s_success', "Berhasil");
		redirect('catalog/index');
	}

}
