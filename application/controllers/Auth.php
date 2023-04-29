<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('auth/login');
	}
	public function proses()
	{
		$username =  $this->input->post('username');
		$password =  $this->input->post('password');
		$query = $this->db->select('*')->from('user')->where('username', $username)->get();
		if($query->num_rows() > 0){
			$user = $query->row();
			if(password_verify($password, $user->password)){
				$data = [
					'id_user' => $user->id_user,
					'role_id' => $user->role_id,
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success', "Login Berhasil");
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error', "Password salah");
				redirect('auth/login');
			}


		} else {
			$this->session->set_flashdata('error', "Username salah");
			redirect('auth/login');
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

}
