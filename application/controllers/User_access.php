<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_access extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		user_access();
	}

	public function index()
	{
		$data['page_title'] = 'User | Admin';
        
        $query = $this->db->select('user.*,role.*')->JOIN('role','role_id','user.role_id')->order_by('id_user', 'DESC');
        $query = $this->db->get('user');
        $data['user'] = $query->result_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/user/admin',$data);
		$this->load->view('dashboard/footer_');
	}
	public function add()
	{
		$data['role'] = $this->db->select('*')->from('role')->get()->result_array();
		$data['page_title'] = 'User | Tambah | User';
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/user/create',$data);
		$this->load->view('dashboard/footer_');
	}

	public function add_proses()
	{
		{
			$post = $this->input->post();
			$data = [
				'nama_user' => $post['nama_user'],
				'username' =>  $post['username'],
				'role_id' =>  $post['role_id'],
				'foto' =>  $post['foto'],
			];
	
			if($post['password'] != ""){
				$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
			}

			$this->db->insert('user', $data);
			$this->session->set_flashdata('success', "Berhasil menambahkan akun");
			redirect('user');
		}
	}

	public function update($id)
	{
		
		$data['page_title'] = 'User | Edit Access';
		$data['role'] = $this->db->select('*')->from('role')->order_by('role_id', 'DESC')->get()->result_array();
		$this->db->where('id_user', $id);
		$query = $this->db->get('user');
		$data['row'] = $query->row_array();
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/user/user_edit',$data);
		$this->load->view('dashboard/footer_');
	}
	
	public function edit()
	{
		$post = $this->input->post();
		$data = [
			'nama_user' => $post['nama_user'],
			'username' =>  $post['username'],
            'role_id' =>  $post['role_id'],
			'wa' =>  $post['wa'],
			'ig' =>  $post['ig'],
			'fb' =>  $post['fb'],
			'twitter' =>  $post['twitter'],
		];

		if($post['password'] != ""){
			$data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
		}

		if(!empty($_FILES['foto']['name'])) {

			$config['file_name'] = 'foto-'.rand(0,100).rand(0,100).'-'.date('ymds');
			$config['upload_path'] = './public/img/user/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size'] = 2048;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('foto')) {
				$file = $this->upload->data();
				$foto = $file['file_name'];
				$data['foto'] = $foto;
				if(file_exists("/public/img/user/" . $post['oldImg'])){
					unlink("/public/img/user/" . $post['oldImg']);
				}
			}
		}
		
		$this->db->where('id_user', $post['id_user']);
		$this->db->update('user', $data);
		$this->session->set_flashdata('success', "berhasil diedit");
		redirect('user_access');
	}

	public function insert()
	{
		$data = [
			[
				'nama_user' => "admin",
				'foto' 		=> "foto",
				'username' => "admin",  
				'password' => password_hash("admin", PASSWORD_DEFAULT),
				'role_id' => "Admin",
			],
			[
				'nama_user' => "user1",
				'foto' 		=> "foto",
				'username' => "user1",
				'password' => password_hash("123", PASSWORD_DEFAULT),
				'role_id' => "Karyawan",
			],
			[
				'nama_user' => "user2",
				'foto' 		=> "foto",
				'username' => "user2",
				'password' => password_hash("123", PASSWORD_DEFAULT),
				'role_id' => "Karyawan",
			],
		];
		 $this->db->insert_batch('user', $data);
	}
}
