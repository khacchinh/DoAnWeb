<?php
	/**
	* 
	*/
	class Blog extends MY_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model('User_model');
			$this->load->model('Blog_model');

		}

		function index(){
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}
			$input = array();
	 		$this->data['list'] = $this->Blog_model->get_list($input);
			$this->data['head'] = 'site/blog/head';
			$this->data['temp'] = 'site/blog/index';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
		function view(){
			$id = $this->uri->rsegment('3');
	        $blog = $this->Blog_model->get_info($id);
	        if(!$blog)
	        {
	            //tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'Không tồn tại bài viết này');
	            redirect(admin_url('blog'));
	        }
	        $this->data['blog'] = $blog;
	        $this->data['head'] = 'site/blog/head';
			$this->data['temp'] = 'site/blog/read';
			$this->data['slide'] = false;
			$this->load->view('site/layout', $this->data);
		}
	}