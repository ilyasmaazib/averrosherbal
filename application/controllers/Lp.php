<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lp extends CI_Controller {

    public function afh()
	{
		$data['tumbnaill'] = ('afh.png');
		$this->load->view('lp/_header',$data);
		$this->load->view('lp/afh');
		$this->load->view('lp/_footer');
    }
    
    public function bb()
	{
		$data['tumbnaill'] = ('bb.png');
		$this->load->view('lp/_header',$data);
		$this->load->view('lp/bb');
		$this->load->view('lp/_footer');
    }
    
    public function osb()
	{
		$data['tumbnaill'] = ('osb.png');
		$this->load->view('lp/_header',$data);
		$this->load->view('lp/osb');
		$this->load->view('lp/_footer');
    }
    public function titan()
	{
		$data['tumbnaill'] = ('titan.webp');
		$this->load->view('lp/_header',$data);
		$this->load->view('lp/titan');
		$this->load->view('lp/_footer');
    }


}
