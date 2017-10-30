<?php 

class Model_blog extends CI_Model {


		function list_blog() {

			$blog = $this->db->get('blog_tbl');
			return $blog;
		}

		function list_blog_limit() {

			$this->db->select('*');
			$this->db->from('blog_tbl');
			$this->db->order_by('createdate','desc');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result();
		}

		function getblogById($id_blog){

			//$this->db->get_where('product_tbl',array('product_id' => $id));
			$this->db->select('*');
			$this->db->from('blog_tbl');
			$this->db->where('blog_id = '.$id_blog.'');
			$query = $this->db->get();
			if($query)
			{
				//return $query->result();	
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		function getblogHighLight(){

			//$this->db->get_where('product_tbl',array('product_id' => $id));
			$this->db->select('*');
			$this->db->from('blog_tbl');
			$this->db->where('blog_status = 1 ');
			
			$this->db->order_by('createdate','desc');
			$this->db->limit(3);

			$query = $this->db->get();
			return $query->result();
		}
}