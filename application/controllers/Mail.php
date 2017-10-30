<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mail extends CI_Controller {

	public function __construct(){
      parent::__construct();
	  $this->load->model('model_email');      
  		$this->load->library("form_validation");
  		$this->load->library('email');
  	}

  	public function index(){
  		
  		$from_user = $this->input->post('name',TRUE);
  		$from_email = $this->input->post('email',TRUE);
  		$subject = $this->input->post('subject',TRUE);
  		$sent_to = $this->input->post('area',TRUE);
  		$message_content = $this->input->post('textarea',TRUE);
  		$this->model_email->send_email($from_user,$from_email,$subject,$sent_to,$message_content);
 
	}

}