<?php
	/**
	* 
	*/
	class Signup extends MY_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('User_model');
			$this->load->helper('form');
			$this->load->library('form_validation');
		}	

		function index(){
			//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

			if ($this->input->post()){
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = md5 ($password);

				if ($this->input->post('phone'))
					$phone = $this->input->post('phone');
				else $phone = '';
				if ($this->input->post('address'))
					$address = $this->input->post('phone');
				else $address = '';
				$data = array('name' => $name,
							  'email' => $email,
							  'phone' => $phone,
							  'address' => $address,
							  'password' => $password );

				if ($this->User_model->insert($data)){
					//tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Đăng ký thành công');
				}
				else{
					 $this->session->set_flashdata('message', 'Đăng ký thất bại');
				}
				redirect(base_url() . 'login');
			}

			$this->data['temp'] = 'site/signup/index';
			$this->data['head'] = 'site/signup/head';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
	}