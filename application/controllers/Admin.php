<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_controller{

	public function __construct(){

		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');

		$this->load->model('model_home');

	     if(!$this->session->userdata('username')){

	     	redirect(base_url("login"));

	     }
	}

	public function index(){

		$this->load->view('templates/meta-admin');
		$this->load->view('templates/menu-admin');
		$this->load->view('admin/home');
		$this->load->view('templates/meta-admin');

	}

	public function slider()

	{


		$data['slider'] = $this->model_home->list_slider()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_slider', $data);

		$this->load->view('templates/footer-admin');

	}

	public function klien()

	{


		$data['clients'] = $this->model_home->list_clients()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_client', $data);

		$this->load->view('templates/footer-admin');

	}

	public function product()

	{

		$this->load->model('model_product');

		$data['category'] = $this->model_product->list_category()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_product',$data);

		$this->load->view('templates/footer-admin');

	}

	public function category_product()

	{

		$last_status = $this->input->get('status');

		if ($last_status == 'failed') {

			$message = 'Sorry cannot delete category, there is a products in this category';

/*			echo $message;

			die();*/

		}else {

			$message = '';

		}

		$this->load->model('model_product');

		$data1['category'] = $this->model_product->list_category()->result();

		$data = array(

			'message' => $message,

			'category' => $data1['category']

		);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_product_category',$data);

		$this->load->view('templates/footer-admin');

	}

	public function blog()

	{

		$this->load->model('model_blog');
		$data['blog'] = $this->model_blog->list_blog()->result();
		$this->load->view('templates/meta-admin');
		$this->load->view('templates/menu-admin');
		$this->load->view('templates/leftsidemenu');
		$this->load->view('admin/v_blogs',$data);
		$this->load->view('templates/meta-admin');

	}

	public function list_product()

	{

		// $this->load->model('model_manufacturer');

		// $data['manu'] = $this->model_manufacturer->list_manufacturer()->result();

		$this->load->model('model_product');

		$data['category'] = $this->model_product->list_category()->result();

		$data['product'] = $this->model_product->list_product()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_list_product',$data);

		$this->load->view('templates/footer-admin');

	}

	public function edit_slider($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['slider'] = $this->model_update->list_slider($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_slider',$data);

		$this->load->view('templates/footer-admin');

	}

	public function edit_blog($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['blog'] = $this->model_update->list_blog($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_blog',$data);

		$this->load->view('templates/footer-admin');

	}

	public function edit_category($id)

	{

		$id = $this->uri->segment(4);

		$id=trim($id);

		$this->load->model('model_update');

		$data['category'] = $this->model_update->list_category($id);

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_category',$data);

		$this->load->view('templates/footer-admin');

	}

	public function edit_product($id, $cat, $slug)

	{

		$id=$this->uri->segment(3);

		$cat=$this->uri->segment(4);

		$slug=$this->uri->segment(5);



		$this->load->model('model_product');

		$getcatproduct = $this->model_product->getproductfromSLUGandcat($id,$cat,$slug);

		$data['product_cat'] = $getcatproduct;

		$this->load->model('model_update');

		$data['product'] = $this->model_update->list_product($slug);

		$data['category'] = $this->model_product->list_category()->result();

		$data['stock'] = $this->model_product->get_stock_status()->result();

		$this->load->view('templates/meta-admin');

		$this->load->view('templates/menu-admin');

		$this->load->view('templates/leftsidemenu');

		$this->load->view('admin/v_edit_product',$data);

		$this->load->view('templates/footer-admin');

	}
}