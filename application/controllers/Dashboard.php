<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		dashboard_access();
	}

	public function index()
	{
		$title['page_title'] = 'Admin | Dashboard' ;
		$title['menu'] = 'active' ;
		$data['users'] = $this->db->get('user')->num_rows();
		$data['product'] = $this->db->get('product')->num_rows();
		$this->load->view('dashboard/header_',$title);
		$this->load->view('dashboard/index_',$data);
		$this->load->view('dashboard/footer_');

	}
}