<?php 
	if(empty($content))
	{
		$content = "404page";	
	}
		$data['category_product'] =  $this->model_product->list_category()->result();
		$this->load->view('templates/meta');
		$this->load->view('templates/header',$data);
		$this->load->view($content);
		$this->load->view('templates/footer');

?>
