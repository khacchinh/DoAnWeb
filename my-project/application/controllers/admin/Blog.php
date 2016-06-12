<?php 
	/**
	* 
	*/
	class Blog extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Blog_model');
			$this->load->library('form_validation');
			$this->load->helper('form');
			
		}

		function index(){
			//kiem tra co thuc hien loc du lieu hay khong'
			$input = array();
	 		$this->data['list'] = $this->Blog_model->get_list($input);
			$this->data['temp'] = 'admin/blog/index';
			$this->load->view('admin/main',$this->data);
		}
		function delete(){
			$id = $this->uri->rsegment(3);
			$info = $this->Blog_model->get_info($id);
			if (!$info){
				//tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'không tồn tại danh mục này');
	            redirect(admin_url('blog'));
			}
			//xoa du lieu
	        $this->Blog_model->delete($id);
	        //tạo ra nội dung thông báo
	        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
	        redirect(admin_url('blog'));
		}
		function add(){
			//lay danh sach danh muc san pham
	        $this->load->model('blog_model');
	        $input = array();
	        if($this->input->post())
	        {
	            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
	            $this->form_validation->set_rules('dis', 'Mô tả', 'required');
	            //nhập liệu chính xác
	            if($this->form_validation->run())
	            {
	                //them vao csdl
	                $title        = $this->input->post('title');
	                $dis          = $this->input->post('dis');
	                //lay ten file anh minh hoa duoc update len
	                $this->load->library('upload_library');
	                $upload_path = './upload/blog';
	                $upload_data = $this->upload_library->upload($upload_path, 'image');  
	                $image_link = '';
	                if(isset($upload_data['file_name']))
	                {
	                    $image_link = $upload_data['file_name'];
	                }
	                //upload cac anh kem theo
	                $image_list = array();
	                $image_list = $this->upload_library->upload_file($upload_path, 'image_list');
	                $image_list = json_encode($image_list);
	                $user = "Admin";
	                //luu du lieu can them
	                $data = array(
	                    'image_link' => $image_link,
	                    'image_list' => $image_list,
	                    'user_name' => $user,
	                    'title' => $title,
	                    'discription'  => $dis,
	                    'content'    => $this->input->post('content'),
	                    'created'	 => now(),
	                ); 
	                //them moi vao csdl
	                if($this->Blog_model->insert($data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không thêm được');
	                }
	                //chuyen tới trang danh sách
	                redirect(admin_url('blog'));
	            }
	        }
			$this->data['temp'] = 'admin/blog/add';
	 		$this->load->view('admin/main', $this->data);
		}
		function edit(){
			$id = $this->uri->rsegment('3');
	        $blog = $this->Blog_model->get_info($id);
	        if(!$blog)
	        {
	            //tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'Không tồn tại bài viết này');
	            redirect(admin_url('blog'));
	        }
	        $this->data['blog'] = $blog;
	        $input = array();
	        //neu ma co du lieu post len thi kiem tra
	        if($this->input->post())
	        {
	            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
	            $this->form_validation->set_rules('dis', 'Mô tả', 'required');
	        
	            //nhập liệu chính xác
	            if($this->form_validation->run())
	            {
	                //them vao csdl
	                $title        = $this->input->post('title');
	                $dis          = $this->input->post('dis');
	                //lay ten file anh minh hoa duoc update len
	                $this->load->library('upload_library');
	                $upload_path = './upload/blog';
	                $upload_data = $this->upload_library->upload($upload_path, 'image');
	                $image_link = '';
	                if(isset($upload_data['file_name']))
	                {
	                    $image_link = $upload_data['file_name'];
	                }
	            
	                //upload cac anh kem theo
	                $image_list = array();
	                $image_list = $this->upload_library->upload_file($upload_path, 'image_list');
	                $image_list_json = json_encode($image_list);
	                $user = "Admin";
	                //luu du lieu can them
	                $data = array(
	                    'image_link' => $image_link,
	                    'image_list' => $image_list,
	                    'user_name' => $user,
	                    'title' => $title,
	                    'discription'  => $dis,
	                    'content'    => $this->input->post('content'),
	                ); 
	                if($image_link != '')
	                {
	                    $data['image_link'] = $image_link;
	                }
	                
	                if(!empty($image_list))
	                {
	                    $data['image_list'] = $image_list_json;
	                }
	                
	                //them moi vao csdl
	                if($this->Blog_model->update($blog->id, $data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không cập nhật được');
	                }
	                //chuyen tới trang danh sách
	                redirect(admin_url('blog'));
	            }
	        }

	        $this->data['temp'] = 'admin/blog/edit';
	        $this->load->view('admin/main', $this->data);
		}
		function view(){

		}
	}
 ?>