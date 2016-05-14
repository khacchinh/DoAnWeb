<?php 
	/**
	* 
	*/
	class Login extends MY_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('User_model');
		}

		function index(){
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post())
			{
				$this->form_validation->set_rules('login', 'login', 'callback_check_login'); // tạo một form_validation với tên login
				if ($this->form_validation->run())
				{ 
					$email = $this->input->post('email');
					$data = array('email' => $email);
					$this->session->set_userdata('email', $data, true); // lưu lại thông tin đăng nhập của admin
					redirect('home'); 
				}
			}

			$this->data['temp'] = 'site/login/index';
			$this->data['head'] = 'site/login/head';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}

		function check_login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$password = md5($password);
			
			$where = array('email' => $email, 
							'password' => $password);

			if ($this->User_model->check_exists($where)){
				return true;
			}
			$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập thất bại');
        	return false;
		}

		function logout()
	    {
	        if($this->session->userdata('email'))
	        {
	            $this->session->unset_userdata('email');
	        }
	        redirect('login');
	    }
	}