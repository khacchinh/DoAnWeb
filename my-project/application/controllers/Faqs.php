<?php 
	/**
	* 
	*/
	class Faqs extends MY_Controller
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

			$this->data['head'] = 'site/faqs/head';
			$this->data['temp'] = 'site/faqs/index';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
	}