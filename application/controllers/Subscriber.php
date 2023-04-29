<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {

	public function index()
	{
		$query = $this->db->select('*')->from('subscriber')->order_by('id_subscriber', 'DESC')->get();
        $data['product'] = $query->result_array();
		$this->load->view('_header');
		$this->load->view('subscriber/index', $data);
		$this->load->view('_footer');
	}

	public function add_process()
	{
		$post =  $this->input->post();
		$data = [
			'nama' => $post['nama'],
			'email' => $post['email'],
			'id_cs' => $post['id_cs']

        ];

		$this->db->insert('subscriber', $data);
		$this->session->set_flashdata('s_success', "Berhasil");
        redirect('Page/chat');
	}


}
