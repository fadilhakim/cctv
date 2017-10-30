<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
      parent::__construct();
      
      $this->load->helper("url");
      $this->load->model('model_product');
      $this->load->library('pagination');
  	}

  	public function product_list($cat){
  		$cat=$this->uri->segment(2);
  		$data['category'] = $this->model_product->getcategory($cat);
		$data["content"] = "product";
		$this->load->view('templates/template',$data);


	}

	public function detail($id, $cat, $slug)
	{
		
		$cat=$this->uri->segment(3);
		$slug=$this->uri->segment(4);
		$id=$this->uri->segment(5);
		$id=trim($id);
		$cat=trim($cat);
		$slug=trim($slug);

		$data['category'] = $this->model_product->getcategory($cat)->result();
		$data['product'] = $this->model_product->getproductfromSLUGandcat($id,$cat,$slug);
		$data["content"] = "detail_product";
		$this->load->view('templates/template',$data);


	}

	public function category($cat) {

		$this->load->view('templates/meta');
		$this->load->model('model_event');
		$data['promo'] = $this->model_event->list_promo()->result();
		$this->load->view('templates/header',$data);


		$cat=$this->uri->segment(3);
		$page = 'product_category';
		$cat=trim($cat);

		$data['category'] = $this->model_product->list_category()->result();
		
		$getcate = $this->model_product->getcategory($cat);
		$data['product'] = $getcate;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function manufacturer($manu) {

		$this->load->view('templates/meta');
		$this->load->view('templates/header');

		$manu=$this->uri->segment(3);
		$page = 'product_manufacturer';	
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();

		$getmanu = $this->model_manufacturer->getproductbyManufacturer($manu);
		$data['product'] = $getmanu;

		$getmanuname = $this->model_manufacturer->getnameManufacturer($manu);
		$data['manuname'] = $getmanuname;

		$this->load->view($page, $data);
		$this->load->view('templates/footer-2');
	}

	public function search(){

		$this->load->view('templates/meta');
		$this->load->model('model_event');
		$data['promo'] = $this->model_event->list_promo()->result();
		$this->load->view('templates/header',$data);
		$data['category'] = $this->model_product->list_category()->result();

		$this->load->model('model_manufacturer');
		$data['manu'] = $this->model_manufacturer->list_manufacturer()->result();
		$keyword=$this->uri->segment(3);
		$keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->model_product->searchProduct($keyword);
        $this->load->view('search_result',$data);
        $this->load->view('templates/footer-2');


	}
}

