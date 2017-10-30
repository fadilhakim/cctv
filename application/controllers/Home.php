<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller { 

	public function __construct()

	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('model_home');
		$this->load->model('model_product');
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$data['slider'] =  $this->model_home->list_slider()->result();
		$data['branch'] =  $this->model_home->list_branch()->result();
		$data['category'] =  $this->model_product->list_category()->result();
		$data["content"] = "home";
		$this->load->view('templates/template',$data);

	}

	public function about(){

		$data["content"] = "about";
		$this->load->view('templates/template',$data);

	}

	public function klien(){
		$data['clients'] = $this->model_home->list_clients()->result();
		$data["content"] = "klien";
		$this->load->view('templates/template',$data);
	}

	public function kontak(){
		$data["content"] = "contact";
		$data['branch'] =  $this->model_home->list_branch()->result();
		$this->load->view('templates/template',$data);
	}

	public function iot(){
		$data["content"] = "iot";
		$this->load->view('templates/template',$data);
	}

}