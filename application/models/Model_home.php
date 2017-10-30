<?php 

class Model_home extends CI_Model {


		function list_clients() {

			$clients = $this->db->get('client_tbl');
			return $clients;
		}

		function list_slider() {

			$slider = $this->db->get('slider_tbl');
			return $slider;
		}

		function list_manufacturer() {

			$slider = $this->db->get('manufacturer_tbl');
			return $slider;
		}

		function list_branch() {

			$slider = $this->db->get('branch_tbl');
			return $slider;
		}

		function featured() {

			$this->db->select('*');
			$this->db->from('product_tbl');			
			$this ->db-> where('featured', 1);
			$this->db->limit(10);
			$query = $this->db->get();
			return $query->result();
		}


		function list_news() {
			$news = $this->db->get('news_tbl');
			return $news;
		}

		function list_subscriber() {
			$subs = $this->db->get('subscriber_tbl');
			return $subs;
		}

		function list_member() {
			$subs = $this->db->get('user_tbl');
			return $subs;
		}

		function list_discount() {

			return $this->db->get('discount_tbl');
		}
}