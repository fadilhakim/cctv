<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class update extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('model_update');
		$this->load->library("Upload2");
	}

	function update_slider() {

			$slider_id 		  = $this->input->post('slider_id');
			$slider_title 	  = $this->input->post('slider_title');
			$slider_link 	  = $this->input->post('slider_link');
			$slider_image_old = $this->input->post('silder_image_old');

			$slider_image_new = $_FILES['silder_image_new']['name'];

			/* $config = array(

				'upload_path' => "./assets/image/slider",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'remove_spaces' => FALSE,
				'overwrite' => TRUE,
				'max_size' => "2048000",
				'max_height' => "2200",
				'max_width' => "2200"

			); */

			if ($slider_image_new == '') {

				$data = array(

				  'slider_title' => $slider_title,
				  'silder_image' => $slider_image_old,
				  'slider_link' => $slider_link

				);

				$this->model_update->update_slider($slider_id,$data);
			}
			else {

			$data = array(

				'slider_title' => $slider_title,
				'silder_image' => $slider_image_new,
				'slider_link' => $slider_link

			);

			/* $this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('assets/image/slider');*/

			$new_path = "assets/image/slider";
			if(!empty($slider_image_new))
			{
				$arr3["new_path"] = $new_path;
				$arr3["element"]  = "silder_image_new";
				$c = $this->upload2->upload_process($arr3);
			}

			$this->model_update->update_slider($slider_id,$data);
		}

		redirect('admin/slider');
	}

	 function update_category() {

            $category_id        = $this->input->post('category_id');
            $category_title     = $this->input->post('category_title');
            $category_image_old = $this->input->post('category_image_old');
            $category_image_new = $_FILES['category_image_new']['name'];

            /* $config = array(

                'upload_path' => "./assets/image/category",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'remove_spaces' => FALSE,
                'overwrite' => TRUE,
                'max_size' => "2048000",
                'max_height' => "2200",
                'max_width' => "2200"

            ); */

            if ($category_image_new == '') {

                $data = array(

                  'category_title' => $category_title,
                  'image' => $category_image_old,

                );

                $this->model_update->update_category($category_id,$data);
            }
            else {

            $data = array(

                'category_title' => $category_title,
                'image' => $category_image_new,


            );


            $new_path = "assets/image/product/category";
            if(!empty($category_image_new))
            {
                $arr3["new_path"] = $new_path;
                $arr3["element"]  = "category_image_new";
                $c = $this->upload2->upload_process($arr3);
            }

            $this->model_update->update_category($category_id,$data);
        }

        redirect('admin/product-category');
    }

	function update_manufacturer() {
		
		$manu_id = $this->input->post('manu_id');
		$manu_title = $this->input->post('manu_title');
		$manu_link = $this->input->post('manu_link');
		$manu_desc = $this->input->post('manu_desc');
		$manu_image_old = $this->input->post('manu_image_old');
		
		if(!empty($_FILES["manu_image_new"]["name"]))
		{
			$file_tmp = $_FILES["manu_image_new"]["tmp_name"];
			$file_path = pathinfo($_FILES['manu_image_new']['name']);
			$manu_image_new = $manu_title.".$file_path[extension]";;
		}
		/*$config = array(

			'upload_path' => "./assets/image/manufacturer",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'remove_spaces' => FALSE,
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "2200",
			'max_width' => "2200"

		);*/

		if ($manu_image_new == '') {

			$data = array(

			  'manu_title' => $manu_title,
			  'manu_image' => $manu_image_old,
			  'manu_link' => $manu_link,
			  'manu_desc' => $manu_desc

			);

			$this->model_update->update_manufacturer($manu_id,$data);
		}
		else {

			$data = array(

			  'manu_title' => $manu_title,
			  'manu_image' => $manu_image_new,
			  'manu_link' => $manu_link,
			  'manu_desc' => $manu_desc

			);

			/* $this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('manu_image_new');*/

			$new_path = "assets/image/brand/$manu_image_new";
			if(!empty($_FILES["manu_image_new"]["name"]))
			{

				$c = $upload = move_uploaded_file($file_tmp,$new_path);
				//var_dump($c); exit;	
			}


			$this->model_update->update_manufacturer($manu_id,$data);
		}




		redirect('admin/brand');
	}


	function update_promo_text()
	{

		$promo_text = $this->input->post('promo_text');

		$data = array(

			'promo_text' => $promo_text,

		);

		$this->model_update->update_promo_text($data);

		redirect('admin/promo/1');

	}

	function update_event() {

		$event_id = $this->input->post('event_id');
		$event_title = $this->input->post('event_name');
		$event_desc = $this->input->post('event_desc');


		if ($_FILES['event_image']['name']== '') {

			$image_1 = $this->input->post('event_image_old');
		}
		else {
			$image_1 = $_FILES['event_image']['name'];
		}

		/*$config = array(

			'upload_path' => "./assets/image/events",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'remove_spaces' => FALSE,
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "2200",
			'max_width' => "2200"

		);*/

		$data = array(

		'blog_title' => $event_title,
		'blog_image' => $image_1,
		'blog_desc' => $event_desc

		);

		/*$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('event_image');*/

		$new_path = "assets/image/events";
		if(!empty($_FILES['event_image']['name']))
		{
			$arr["new_path"] = $new_path;
			$arr["element"] = "event_image";
			$this->upload2->upload_process($arr);
		}

		$this->model_update->update_event($event_id,$data);

		redirect('admin/event');
	}

	function update_blog() {

		$blog_id = $this->input->post('blog_id');
		$blog_title = $this->input->post('blog_name');
		$blog_desc = $this->input->post('blog_desc');


		if ($_FILES['blog_image']['name']== '') {

			$image_1 = $this->input->post('blog_image_old');
		}
		else {
			$image_1 = $_FILES['blog_image']['name'];
		}

		if ($_FILES['blog_thumb']['name']== '') {

			$image_2 = $this->input->post('blog_thumb_old');
		}
		else {
			$image_2 = $_FILES['blog_thumb']['name'];
		}


		//print_r(array($image_1,$image_2) ); exit;

		/* $config = array(

			'upload_path' => "./assets/image/blog",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'remove_spaces' => FALSE,
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "2200",
			'max_width' => "2200"

		);*/

			$data = array(

			'blog_title' => $blog_title,
			'blog_image' => $image_1,
			'blog_desc' => $blog_desc,
			'blog_thumbnail' => $image_2

			);

			/* $this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('blog_image');
			$this->upload->do_upload('blog_thumb_image'); */

			if(!empty($_FILES['blog_thumb']['name']))
			{
				$arr["new_path"] = "assets/image/blog/";
				$arr["element"]  = "blog_thumb";
				$d = $this->upload2->upload_process($arr);
			}

			if(!empty($_FILES['blog_image']['name']))
			{
				$arr["new_path"] = "assets/image/blog/";
				$arr["element"]  = "blog_image";
				$d = $this->upload2->upload_process($arr);
			}

			$this->model_update->update_blog($blog_id,$data);




		redirect('admin/blog');
	}

	function update_discount() {

		$discount_id 	= $this->input->post('discount_id');
		$discount_code  = $this->input->post('discount_code');
		$discount_price = $this->input->post('discount_price');
		$discount_name	= $this->input->post('discount_name');
		$discount_desc  = $this->input->post('discount_desc');
		$start_date 	= $this->input->post('start_date');
		$expired_date 	= $this->input->post('expired_date');


		$data = array(
			'discount_code' => $discount_code,
			'discount_price' => $discount_price,
			'discount_name' => $discount_name,
			'discount_desc' => $discount_desc,
			'start_date' => $start_date,
			'expired_date' => $expired_date
		);

		$this->model_update->update_discount($discount_id,$data);

		redirect('admin/discount');
	}

	function update_admin() {

		$admin_id = $this->input->post('admin_id');
		$username = $this->input->post('username');
		$surename = $this->input->post('surename');
		$role_name= $this->input->post('role_name');
		$email= $this->input->post('email');


		$data = array(
			'username' => $username,
			'surename' => $surename,
			'role_id' => $role_name,
			'email' => $email
		);

		$this->model_update->update_admin($admin_id,$data);

		redirect('admin/users_admin');
	}

	function update_member() {

		$admin_id = $this->input->post('admin_id');
		$username = $this->input->post('username');
		$surename = $this->input->post('surename');
		$role_name= $this->input->post('role_name');
		$email= $this->input->post('email');

	    $user_id = $this->input->post('user_id');
        $username = $this->input->post('contact_person');
        $notlp = $this->input->post('no_tlp');
        $shippingaddress = $this->input->post('shipping_address');
        $email = $this->input->post('email');

		$data = array(
			'shipping_address' => $shippingaddress,
			'contact_person' => $username,
			'no_tlp' => $notlp,
			'email' => $email
		);

		$this->model_update->update_member($user_id,$data);

		redirect('admin/members');
	}

	function update_product() {
		
		$this->load->library("form_validation");
		
		$product_id 			= $this->input->post('product_id',true);
		$product_title 			= $this->input->post('product_title',true);
		// $product_brand 			= $this->input->post('manu_id',true);
		$product_category 		= $this->input->post('product_category',true);
		$product_code 			= $this->input->post('product_code',true);
		$featured_product 		= $this->input->post('featured',true);
		
		$product_description 	= $this->input->post('product_desc',true);
		$product_category_url 	= url_title($product_category);
		$product_slug 			= url_title($product_title);


		if ($_FILES['product_image_new_1']['name']== '') {

			$image_1 = $this->input->post('product_image_old_1');
		}
		else {
			$image_1 = $_FILES['product_image_new_1']['name'];
		}

		$data = array(
			'product_id' => $product_id,
			'product_title' => $product_title,
			// 'manu_id' => $product_brand,
			'product_category' => $product_category,

			'product_code' => $product_code,
			'featured' => $featured_product,
			
			'product_descrption' => $product_description,

			'category_url' => $product_category_url,
			'product_slug' => $product_slug,

			'product_image_1' => $image_1,
		);
		
		// jika pre order maka minimum order dan eta harus berubah 
		if($product_availability == 1)
		{
		
			$data2 = array(
				"minimum_order"=>$minimum_order,
				"ETA"=>$eta
			
			);
			
			//update ETA and minimum order
			$this->model_update->update_product($product_id,$data2);
		}


			//upload baru
			$img_msg = "";
			if(!empty($_FILES["product_image_new_1"]["name"]))
			{
				$arr1["new_path"] = "assets/image/product";
				$arr1["element"]  = "product_image_new_1";
				$a = $this->upload2->upload_process($arr1);
				$img_msg .= $a["msg"];
			}

			$result = $this->model_update->update_product($product_id,$data);

			if($result == TRUE /* && (!$a["err"] || !$b["err"] || !$c["err"] || !$d["err"]) */)
			{

				$value='<div class="alert alert-success">Update Product Success '.$img_msg.'</div>';
				$this->session->set_flashdata('message',$value);
				//redirect('admin/product-list');
				redirect('admin/product-list');
			}
			else
			{

				$value='<div class="alert alert-danger"> Update Product Failed '.$img_msg.'</div>';
				$this->session->set_flashdata('message',$value);
				redirect("admin/edit_product/$product_id/$product_category_url/$product_slug");

			}


		redirect('admin/product-list');
	}

	function update_sparepart() {

		$sparepart_id = $this->input->post('sparepart_id');
		$sparepart_name = $this->input->post('sparepart_name');
		$manu_id = $this->input->post('manu_id');
		$sparepart_category = $this->input->post('sparepart_category');
		// $sparepart_code = str_replace('/\s+/', '',$this->input->post("sparepart_code"));
		$catalog_code =  str_replace(' ', '',$this->input->post('catalog_code'));
		$sparepart_price = $this->input->post('sparepart_price');
		
		$stock = $this->input->post('stock');
		$berat = $this->input->post('berat');
		$dimensi = $this->input->post('dimensi');
		$sparepart_desc = $this->input->post('sparepart_desc');
		$sparepart_text_preview = $this->input->post('sparepart_text_preview');
		$sparepart_slug = url_title($sparepart_name);


		if ($_FILES['sparepart_image_new_1']['name'] == '') {

			$product_image_1 = $this->input->post('sparepart_image_old_1');
		}
		else {
			$product_image_1 = $_FILES['sparepart_image_new_1']['name'];
		}


		if ($_FILES['sparepart_image_new_2']['name'] == '') {

			$product_image_2 = $this->input->post('sparepart_image_old_2');
		}
		else {
			$product_image_2 = $_FILES['sparepart_image_new_2']['name'];
		}



		if ($_FILES['sparepart_image_new_3']['name'] == '') {

			$product_image_3 = $this->input->post('sparepart_image_old_3');
		}
		else {
			$product_image_3 = $_FILES['sparepart_image_new_3']['name'];
		}



		if ($_FILES['sparepart_image_new_4']['name'] == '') {

			$product_image_4 = $this->input->post('sparepart_image_old_4');
		}
		else {
			$product_image_4 = $_FILES['sparepart_image_new_4']['name'];
		}


		/* $config = array(

			'upload_path' => "./assets/sp/images/products",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'remove_spaces' => FALSE,
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "2200",
			'max_width' => "2200"

		); */

		$data = array(
			'sparepart_name' => $sparepart_name,
			'manu_id' => $manu_id,
			'sparepart_category' => $sparepart_category,

			'sparepart_code' => $catalog_code,
			'sparepart_price' => $sparepart_price,

			'stock' => 	$stock,
			'berat' => 	$berat,
			'dimensi' => 	$dimensi,
			'sparepart_text_preview' => $sparepart_text_preview,
			'sparepart_desc' => $sparepart_desc,

			'sparepart_slug' => $sparepart_slug,

			'sparepart_image' => $product_image_1,
			'sparepart_image_2' => $product_image_2,
			'sparepart_image_3' => $product_image_3,
			'sparepart_image_4' => $product_image_4

		);


			/* $this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('sparepart_image_new_1');
			$this->upload->do_upload('sparepart_image_new_2');
			$this->upload->do_upload('sparepart_image_new_3');
			$this->upload->do_upload('sparepart_image_new_4');*/
			$img_msg = "";
			$new_path = "assets/sp/images/products/";
			if(!empty($_FILES["sparepart_image_new_1"]["name"]))
			{

				$arr1["new_path"] = $new_path;
				$arr1["element"]  = "sparepart_image_new_1";
				$a = $this->upload2->upload_process($arr1);
				$img_msg .= $a["msg"];

			}



			if(!empty($_FILES["sparepart_image_new_2"]["name"]))
			{

				$arr2["new_path"] = $new_path;
				$arr2["element"]  = "sparepart_image_new_2";
				$b = $this->upload2->upload_process($arr2);
				$img_msg .= $b["msg"];

			}



			if(!empty($_FILES["sparepart_image_new_3"]["name"]))
			{
				$arr3["new_path"] = $new_path;
				$arr3["element"]  = "sparepart_image_new_3";
				$c = $this->upload2->upload_process($arr3);
				$img_msg .= $c["msg"];
			}
			if(!empty($_FILES["sparepart_image_new_4"]["name"]))
			{
				$arr4["new_path"] = $new_path;
				$arr4["element"]  = "sparepart_image_new_4";
				$d = $this->upload2->upload_process($arr4);
				$img_msg .= $d["msg"];
			}

			//print_r($_FILES);

			//var_dump($a);
			
			$result = $this->model_update->update_sparepart($sparepart_id,$data);

			if($result == TRUE)
			{

				$value='<div class="alert alert-success"> Update Sparepart Success '.$img_msg.'</div>';
				$this->session->set_flashdata("message",$value);
				redirect('admin/list_sparepart');

			}

			else

			{

				$value='<div class="alert alert-danger"> Update Sparepart Failed '.$img_msg.' </div>';
				$this->session->set_flashdata('message',$value);
				redirect("admin/edit_sparepart/$sparepart_id/$sparepart_code");

			}
	}

}
