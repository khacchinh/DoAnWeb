<?php 
	/**
	* 
	*/
	class Ajax extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			
		}

		function buy_item(){
			$this->load->model('Product_model');
			$id = $this->input->post('id');

			$product = $this->Product_model->get_info($id);
			if (!$product){
			 	redirect();
			}
			$qty = 1;
			$price = $product->price;
			if ($product->discount > 0){
			 	$price -= $product->discount;
			 }

			//thong tin them vao gio hang
			$data = array();
			$data['id'] = $product->id;
			$data['qty'] = $qty;
			$data['name'] = url_title($product->name);
			$data['image_link']  = $product->image_link;
			$data['price'] = $price;
			$this->cart->insert($data);

			$total_items = $this->cart->total_items();
			$total_product_in_cart = 0;
			if ($total_items > 1){
				$cart = $this->cart->contents();
				foreach ($cart as $row) {
					# code...
					foreach ($cart as $row_1) {
						# code...
						if ($row['name']!=$row_1['name']){
							$total_product_in_cart++;
							    break;
						}

					}
				}
				if ($total_product_in_cart == 0) $total_product_in_cart = 1;
			}
			else $total_product_in_cart  = $total_items;

			echo $total_product_in_cart;
		}

		function do_comment(){
			$this->load->model('Comment_model');
			$this->load->model('User_model');
			$this->load->helper('MY_date');

			$product_id = $this->input->post('product_id');
			$content = $this->input->post('content');
			$name = $this->input->post('name');
			
			$data = array('product_id' => $product_id,
						  'user_name' => $name,
						  'content' => $content, 
						  'created' => now());

			$input['where'] = array('name' => $name);
			$user = $this->User_model->get_row($input);
			if ($user){
				$data = array('product_id' => $product_id,
						  'user_name' => $name,
						  'user_email' => $user->email,
						  'user_id' => $user->id,
						  'content' => $content, 
						  'created' => now());
			}
			
			if ($this->Comment_model->insert($data)){
				$data = array($name, $content,get_date(now()));
				echo implode('~',$data);
			}
		}
	}
 ?>