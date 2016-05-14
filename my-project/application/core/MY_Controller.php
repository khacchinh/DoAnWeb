<?php
	/**
	* 
	*/
	class MY_Controller extends CI_Controller{
		
		public $data = array();

		function __construct(){
			parent::__construct();

			$controller = $this->uri->segment(1);

			switch ($controller) {
				case 'admin':
						$this->_check_login();
					break;
				
				default:
	                    $this->load->model('catalog_model');
	                    $input = array();
	                    $input['where'] = array('parent_id' => 0);
	                    $input['order'] = array('sort_order', 'asc');
	                    $catalog_list = $this->catalog_model->get_list($input);
	                    foreach ($catalog_list as $row)
	                    {
	                        $input['where'] = array('parent_id' => $row->id);
	                        $subs = $this->catalog_model->get_list($input);
	                        $row->subs = $subs;
	                    }
	                    $this->data['catalog_list'] = $catalog_list;
                    
	                    $this->load->library('cart');
	                    $total_items = $this->cart->total_items();
	                    $this->data['total_items']  = $total_items;

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
					        $this->data['total_product_in_cart']  = $total_product_in_cart;
				    	}
				    	else $this->data['total_product_in_cart']  = $total_items;
			}
		}

		function _check_login(){
			$controller = $this->uri->rsegment('1');
	        $controller = strtolower($controller);
	    
	        $login = $this->session->userdata('login');
	        //neu ma chua dang nhap,ma truy cap 1 controller khac login
	        if(!$login && $controller != 'login')
	        {
	            redirect(admin_url('login'));
	        }
	        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
	        if($login && $controller == 'login')
	        {
	            redirect(admin_url('home'));
	        }
		}
	}