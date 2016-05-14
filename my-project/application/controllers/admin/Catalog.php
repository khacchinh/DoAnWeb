<?php 
	/**
		* 
		*/
		class Catalog extends MY_Controller
		{
			
			function __construct(){
				# code...
				parent::__construct();
				$this->load->model('Catalog_model');
				$this->load->library('form_validation');
				$this->load->helper('form');
			}

			function index(){
				//lay nội dung của biến message
		        $message = $this->session->flashdata('message');
		        $this->data['message'] = $message;

				$this->data['temp'] = 'admin/catalog/index';
				$this->data['total'] = $this->Catalog_model->get_total();
				$this->data['list'] = $this->Catalog_model->get_list();
				$this->load->view('admin/main', $this->data);
			}

			function edit(){
				$id = $this->uri->rsegment(3);
				$id = intval($id);

				if ($this->input->post()){
					$this->form_validation->set_rules('name', 'Tên danh mục', 'required');
					$this->form_validation->set_rules('sort_order', 'Thứ tự hiển thị', 'required');
					//nhap du lieu chinh xac
					if ($this->form_validation->run()){
						$name = $this->input->post('name');
						$parent_id = $this->input->post('parent_id');
						$sort_order = $this->input->post('sort_order');

						$data = array('name' => $name,
									  'parent_id' => $parent_id,
									  'sort_order' => $sort_order);
						//insert du lieu vao csdl
						if ($this->Catalog_model->update($id, $data)){
							$this->session->set_flashdata('message', 'Sửa dữ liệu thành công');
						}
						else {
							$this->session->set_flashdata('message', 'Xóa dữ liệu thất bại');
						}
						//chuyen tới trang danh sách
                		redirect(admin_url('catalog'));
					}
				}

				$this->data['temp'] = 'admin/catalog/edit';
				$this->data['total'] = $this->Catalog_model->get_total();
				$this->data['info'] = $this->Catalog_model->get_info($id);


				$input['where'] = array("parent_id" => 0);
				$this->data['list'] = $this->Catalog_model->get_list($input);
				$this->load->view('admin/main', $this->data);
			}

			function add(){
				if ($this->input->post()){
					$this->form_validation->set_rules('name', 'Tên danh mục', 'required');
					$this->form_validation->set_rules('sort_order', 'Thứ tự hiển thị', 'required');
					//nhap du lieu chinh xac
					if ($this->form_validation->run()){
						$name = $this->input->post('name');
						$parent_id = $this->input->post('parent_id');
						$sort_order = $this->input->post('sort_order');

						$data = array('name' => $name,
									  'parent_id' => $parent_id,
									  'sort_order' => $sort_order);
						//insert du lieu vao csdl
						if ($this->Catalog_model->insert($data)){
							$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
						}
						else {
							$this->session->set_flashdata('message', 'Thêm mới dữ liệu thất bại');
						}
						//chuyen tới trang danh sách
                		redirect(admin_url('catalog'));
					}
				}

				$this->data['temp'] = 'admin/catalog/add';
				$this->data['total'] = $this->Catalog_model->get_total();
				$input['where'] = array('parent_id' => 0 );
				$this->data['list'] = $this->Catalog_model->get_list($input);
				$this->load->view('admin/main', $this->data);
			}

			function delete(){
				$id = $this->uri->rsegment('3');
		        $id = intval($id);
		        //lay thong tin cua quan tri vien
		        $info = $this->Catalog_model->get_info($id);
		        if(!$info)
		        {
		            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
		            redirect(admin_url('catalog'));
		        }
		        //thuc hiện xóa
		        $this->Catalog_model->delete($id);
		        
		        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
		        redirect(admin_url('catalog'));
			}
		}	
?>