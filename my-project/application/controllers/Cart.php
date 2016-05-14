<?php
	/**
	 * 
	 */
	 class Cart extends MY_Controller
	 {
	 	
	 	function __construct()
	 	{
	 		# code...
	 		parent::__construct();
	 		$this->load->model('Product_model');
	 		$this->load->model('User_model');
	 	}

	 	function index()
	    {
	    	$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}
	        //thong gio hang
	        $carts = $this->cart->contents();
	        //tong so san pham co trong gio hang
	        $total_items = $this->cart->total_items();
	        
	        $this->data['carts'] = $carts;
	        $this->data['total_items']  =$total_items;
	        
	        $this->data['temp']  ='site/shopcart/index';
	        $this->data['head']  ='site/shopcart/head';
	        $this->load->view('site/layout', $this->data);
	    }

	    function previous(){
	    	redirect();
	    }

	 	function add(){
	 		$id = $this->uri->rsegment(3);
	 		$id = intval($id);

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

	        redirect(base_url('cart'));
	 	}

	 	function update(){
	 		//thong gio hang
	        $carts = $this->cart->contents();
	        foreach ($carts as $key => $row)
	        {
	            //tong so luong san pham
	            $total_qty = $this->input->post('qty'.$row['id']);
	            $data = array();
	            $data['rowid'] = $key;
	            $data['qty'] = $total_qty;
	            $this->cart->update($data);
	        }
	        
	        //chuyen sang trang danh sach san pham trong gio hang
	        redirect(base_url('cart'));
	 	}

	 	function del(){
	 		$id = $this->uri->rsegment(3);
	        $id = intval($id);
	        //trường hợp xóa 1 sản phẩm nào đó trong giỏ hàng
	        if($id > 0)
	        {
	            //thong gio hang
	            $carts = $this->cart->contents();
	            foreach ($carts as $key => $row)
	            {
	                if($row['id'] == $id)
	                {
	                    //tong so luong san pham
	                    $data = array();
	                    $data['rowid'] = $key;
	                    $data['qty'] = 0;
	                    $this->cart->update($data);
	                }
	            }
	        }else{
	            //xóa toàn bô giỏ hang
	            $this->cart->destroy();
	        }
	        
	        //chuyen sang trang danh sach san pham trong gio hang
	        redirect(base_url('cart'));
		}
	 } 
 ?>