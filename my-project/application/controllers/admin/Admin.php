<?php
	/**
	* 
	*/
	class Admin extends MY_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Admin_model');
			$this->load->library('form_validation');
			$this->load->helper('form');

		}

		function index(){
			$this->data['temp'] = 'admin/admin/index';

			$this->data['list'] = $this->Admin_model->get_list();
			$this->data['total'] = $this->Admin_model->get_total();

			//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

			$this->load->view('admin/main', $this->data);
		}

		function check_username(){
			$username = $this->input->post('username');
	        $where = array('username' => $username);
	        //kiêm tra xem username đã tồn tại chưa
	        if($this->Admin_model->check_exists($where))
	        {
	            //trả về thông báo lỗi
	            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
	            return false;
	        }
	        return true;
		}

		function add(){
			//neu ma co du lieu post len thi kiem tra
	        if($this->input->post())
	        {
	            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[6]');
	            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
	            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
	            $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
	            
	            //nhập liệu chính xác
	            if($this->form_validation->run())
	            {
	                //them vao csdl
	                $name     = $this->input->post('name');
	                $username = $this->input->post('username');
	                $password = $this->input->post('password');
	                
	                $data = array(
	                    'name'     => $name,
	                    'username' => $username,
	                    'password' => md5($password)
	                );
	                if($this->Admin_model->insert($data))
	                { 
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không thêm được');
	                }
	                //chuyen tới trang danh sách quản trị viên
	                redirect(admin_url('admin'));
	            }
	        }
        
			$this->data['temp'] = 'admin/admin/add';
			$this->load->view('admin/main', $this->data);
		}

		function edit(){
			$id = $this->uri->rsegment('3');
			$id = intval($id);

			$info = $this->Admin_model->get_info($id);
			$this->data['info'] = $info;

			if ($this->input->post()){
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[6]');
            	$this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');

            	$password = $this->input->post('password');
	            if($password)
	            {
	                $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
	                $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'matches[password]');
	            }
	            if ($this->form_validation->run()){
		            //them vao csdl
	                $name     = $this->input->post('name');
	                $username = $this->input->post('username');
	               
	                $data = array(
	                    'name'     => $name,
	                    'username' => $username,
	                );
	                //neu ma thay doi mat khau thi moi gan du lieu
	                if($password)
	                {
	                    $data['password'] = md5($password);
	                }
	                
	                if($this->Admin_model->update($id, $data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không cập nhật được');
	                }
	                //chuyen tới trang danh sách quản trị viên
	                redirect(admin_url('admin'));
	            }
			}
			$this->data['temp'] = 'admin/admin/edit';
			$this->load->view('admin/main', $this->data);
		}

		function delete(){
			$id = $this->uri->rsegment('3');
	        $id = intval($id);
	        //lay thong tin cua quan tri vien
	        $info = $this->Admin_model->get_info($id);
	        if(!$info)
	        {
	            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
	            redirect(admin_url('admin'));
	        }
	        //thuc hiện xóa
	        $this->Admin_model->delete($id);
	        
	        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
	        redirect(admin_url('admin'));
		}

		function logout()
	    {
	        if($this->session->userdata('login'))
	        {
	            $this->session->unset_userdata('login');
	        }
	        redirect(admin_url('login'));
	    }
	}