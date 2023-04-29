<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function about()
	{
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['title'] = 'Tentang Kami';
		$this->load->view('Page/_header',$data);			
		$this->load->view('Page/about');
		$this->load->view('Page/_footer');
	}

	public function karir()
	{
		$this->load->view('Page/_header');			
		$this->load->view('Page/karir/loker.php');
		$this->load->view('Page/_footer');
	}

	public function blog()
	{
		$data['title'] = 'Blog informatif';
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$query = $this->db->select('*')->from('blog')->order_by('id_blog', 'DESC')->get();
        $data['blog'] = $query->result_array();
		$this->load->view('Page/_header',$data);			
		$this->load->view('Page/blog',$data);
		$this->load->view('Page/_footer');
	}

	public function details($id)
	{
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data ['last_blog'] = $this->db->select('*')->from('blog')->order_by('id_blog', 'ASC', 'LIMIT', 5)->get()->result_array();
		$data ['category'] = $this->db->get('category');
		$query = $this->db->select('blog.*,product.*')->JOIN('product','id_product','blog.id_product')->order_by('id_blog', 'DESC');
		$this->db->where('id_blog', $id);
		$query = $this->db->get('blog');
		$data['row'] = $query->row_array();
		$this->load->view('Page/blog_header');			
		$this->load->view('Page/blog_details',$data);
		$this->load->view('Page/blog_footer');
	}

	public function detail_product($id)
	{
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['product'] = $this->db->select('*')->from('product')->order_by('id_product', 'DESC')->get()->result_array();
		$query = $this->db->select('*')->from('product')->order_by('id_product', 'ASC')->get()->result_array();
		$this->db->where('id_product', $id);
		$query = $this->db->get('product');
		$data['row'] = $query->row_array();
		$this->load->view('Page/_header');			
		$this->load->view('Page/product_details',$data);
		$this->load->view('Page/_footer');
	}

	public function product()
	{
		$data['title'] = 'Product Kami';
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$query = $this->db->select('*')->from('product')->order_by('id_product', 'DESC')->get();
        $data['product'] = $query->result_array();
		$this->load->view('Page/_header', $data);
		$this->load->view('Page/product',$data);
		$this->load->view('Page/_footer');
	}
	public function contact()
	{
		$data['title'] = 'Konsultasi';
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$query = $this->db->select('*')->from('cs')->order_by('id_cs', 'DESC')->get();
        $data['cs'] = $query->result_array();
		$this->load->view('Page/_header', $data);
		$this->load->view('Page/contact',$data);
		$this->load->view('Page/_footer');
	}
	public function chat()
	{
		// $this->db->select('nama');
		$this->db->select('subscriber.nama,cs.nama_cs,cs.foto,cs.wa')->JOIN('cs','id_cs','subscriber.id_cs')->order_by('id_subscriber', 'DESC');
		$query = $this->db->get('subscriber');
		$data['subscriber'] = $query->result_array();
		$this->load->view('Page/_header');
		$this->load->view('Page/chat', $data);
		$this->load->view('Page/_footer');		
				
	}
	public function carousel()
	{
		
		$this->load->view('Page/_header');
		$this->load->view('Page/contact');
		$this->load->view('Page/_footer');
	}
	
	public function index()
	{
		$data['title'] = 'Home';
		$data['kw'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$data['desc'] = 'herbal seksual, obat herbal seksual, produk herbal seksual, suplementasi seksual, produk alami seksual, peningkat vitalitas seksual, pembesar penis, pembesar alat vital, pembesar kelamin, obat kuat';
		$query = $this->db->select('*')->from('cs')->order_by('id_cs', 'DESC')->get();
        $data['cs'] = $query->result_array();
		$query = $this->db->select('*')->from('product')->order_by('id_product', 'DESC')->get();
        $data['product'] = $query->result_array();
		$this->load->view('Page/_header',$data);
		$this->load->view('Page/index',$data);
		$this->load->view('Page/_footer');

	}
}
		