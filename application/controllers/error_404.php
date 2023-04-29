<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error_404 extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Page is Under Maintenance';
		$this->load->view('404',$data);
	}

}