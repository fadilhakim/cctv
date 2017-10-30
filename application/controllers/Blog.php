<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog extends CI_Controller { 

	public function __construct()

	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('model_home');
		$this->load->model('model_product');
		$this->load->model('model_blog');
		$this->load->library('grocery_CRUD');
	}

	public function index(){

		$data["content"] = "blog";
		$data["blogs"] = $this->model_blog->list_blog()->result();
		$this->load->view('templates/template',$data);
	}

	public function detail_blog(){

		$data["content"] = "detail_blog";
		$id_blog = $this->uri->segment(3);
		$data["blogs"] = $this->model_blog->getblogById($id_blog);
		$this->load->view('templates/template',$data);
		
	}

}