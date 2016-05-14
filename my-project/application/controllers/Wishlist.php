<?php
	/**
	* 
	*/
	class Wishlist extends MY_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('User_model');

		}

		function index(){
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}
			
			$carts = $this->cart->contents();
	        //tong so san pham co trong gio hang
	        $total_items = $this->cart->total_items();
	        
	        $this->data['carts'] = $carts;
	        
			$this->data['head'] = 'site/wishlist/head';
			$this->data['temp'] = 'site/wishlist/index';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
	}