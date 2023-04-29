<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_user')){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['page_title'] = 'User | Profile';
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/user/index',$data);
		$this->load->view('dashboard/footer_');
	}

	public function update()
	{
		$data['page_title'] = 'User | Profile - Edit';
		$this->load->view('dashboard/header_',$data);
		$this->load->view('dashboard/user/edit',$data);
		$this->load->view('dashboard/footer_');
	}
	
	public function edit()
	{
		$post = $this->input->post();
		$data = [
			'nama_user' => $post['nama_user'],
			'username' =>  $post['username'],
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
		
		$this->db->where('id_user', user_login()->id_user);
		$this->db->update('user', $data);
		$this->session->set_flashdata('success', "berhasil diedit");
		redirect('user');
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
