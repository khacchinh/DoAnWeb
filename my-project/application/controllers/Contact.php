<?php 
	/**
	* 
	*/
	class Contact extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('User_model');
		}

		function index(){
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}

			$this->data['head'] = 'site/contact/head';
			$this->data['temp'] = 'site/contact/index';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
	}
 ?>