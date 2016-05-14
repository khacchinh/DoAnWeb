<?php 
	/**
	* 
	*/
	class Login extends MY_Controller{

		function __construct(){
			parent::__construct();
			
		}
		
		function index(){
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post())
			{
				$this->form_validation->set_rules('login', 'login', 'callback_check_login'); // tạo một form_validation với tên login
				if ($this->form_validation->run())
				{ 
					$this->session->set_userdata('login', true); // lưu lại thông tin đăng nhập của admin
					redirect(admin_url('home')); 
				}
			}

			$this->load->view('admin/login/index'); 
		}

		function check_login(){
			$this->load->model('Admin_model');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = md5($password);
			
			$where = array('username' => $username, 
							'password' => $password);

			if ($this->Admin_model->check_exists($where)){
				return true;
			}
			$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập thất bại');
        	return false;
		}
	}