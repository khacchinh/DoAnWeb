<?php
	/**
	* 
	*/
	class Home extends MY_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Product_model');
			$this->load->model('User_model');
		}

		function index(){
			//limit san pham lay ra
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}
			$input = array();
	        $input['limit'] = array(8, 0);
	        $input['order'] = array('view, rate_total', 'desc');
	        $input_list['order'] = array('view, rate_total', 'desc');
	        $input_list['limit'] = array(12, 0);
	        
			$this->data['temp'] = 'site/home/index';
			$this->data['head'] = 'site/home/head';
			$this->data['slide'] = true;
			$this->data['homes'] = $this->Product_model->get_list($input);
			$this->data['list'] = $this->Product_model->get_list($input_list);
			$this->load->view('site/layout', $this->data);
		}
	}