<?php
	/**
	 * 
	 */
	 class User extends MY_Controller
	 {
	 	
	 	function __construct()
	 	{
	 		# code...
	 		parent::__construct();
	 		$this->load->model('User_model');
	 		$this->load->library('form_validation');
	 		$this->load->helper('form');
	 	}

	 	function index(){	
	 		$total_rows = $this->User_model->get_total();
	 		//load thu vien phan trang
	 		$this->load->library('pagination');

	 		$config = array();
	 		$config['total_rows'] = $total_rows;//tong tat ca cac thành viên tren website
	        $config['base_url']   = admin_url('user/index'); //link hien thi ra danh sach thành viên
	        $config['per_page']   = 1;//so luong thành viên hien thi tren 1 trang
	        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
	        $config['next_link']   = 'Trang kế tiếp';
	        $config['prev_link']   = 'Trang trước';

	        //khoi tao cac cau hinh phan trang
	        $this->pagination->initialize($config);
	        
	        $segment = $this->uri->segment(4);
	        $segment = intval($segment);

	        $input = array();
	        $input['limit'] = array($config['per_page'], $segment);


	 		$this->data['list'] = $this->User_model->get_list($input);
	 		$this->data['total'] = $total_rows;

	 		//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

	 		$this->data['temp'] = 'admin/user/index';
	 		$this->load->view('admin/main', $this->data);
	 	}

	 	function check_email(){
			$username = $this->input->post('email');
	        $where = array('email' => $email);
	        //kiêm tra xem username đã tồn tại chưa
	        if($this->User_model->check_exists($where))
	        {
	            //trả về thông báo lỗi
	            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
	            return false;
	        }
	        return true;
		}

		function edit(){
			$id = $this->uri->rsegment('3');
			$id = intval($id);

			$info = $this->User_model->get_info($id);
			$this->data['info'] = $info;

			if ($this->input->post()){
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[6]');
            	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
            	$this->form_validation->set_rules('phone', 'Tên', '');
            	$this->form_validation->set_rules('address', 'Email', '');

	            if ($this->form_validation->run()){
		            //them vao csdl
	                $name     = $this->input->post('name');
	                $email = $this->input->post('email');
	                $phone     = $this->input->post('phone');
	                $address = $this->input->post('address');
	               
	                $data = array(
	                    'name'     => $name,
	                    'email'    => $email,
	                    'phone'    => $phone,
	                    'address'  => $address
	                );
	                
	                if($this->User_model->update($id, $data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không cập nhật được');
	                }
	                //chuyen tới trang danh sách quản trị viên
	                redirect(admin_url('user'));
	            }
			}
			$this->data['temp'] = 'admin/user/edit';
			$this->load->view('admin/main', $this->data);
		}

		function delete(){
			$id = $this->uri->rsegment('3');
	        $id = intval($id);
	        //lay thong tin cua quan tri vien
	        $info = $this->User_model->get_info($id);
	        if(!$info)
	        {
	            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
	            redirect(admin_url('user'));
	        }
	        //thuc hiện xóa
	        $this->User_model->delete($id);
	        
	        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
	        redirect(admin_url('user'));
		}
	 } 
 ?>