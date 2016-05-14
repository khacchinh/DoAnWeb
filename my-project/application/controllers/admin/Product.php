<?php 
	/**
	* 
	*/
	class Product extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Product_model');
			$this->load->model('Catalog_model');
			$this->load->library('form_validation');
			$this->load->helper('form');
		}

		function index(){
			$total_rows = $this->Product_model->get_total();
	 		//load thu vien phan trang
	 		$this->load->library('pagination');
	 		$this->load->library('paginationlib');

	        $pagingConfig = $this->paginationlib->initPagination("admin/product/index", $total_rows);
	        $this->data["pagination_helper"] = $this->pagination;
	        
	        $segment = $this->uri->segment(4);
	        $segment = intval($segment);

	        $input = array();
	        $input['limit'] = array($pagingConfig['per_page'], $segment);

	        //kiem tra co thuc hien loc du lieu hay khong
	        $id = $this->input->get('id');
	        $id = intval($id);
	        $input['where'] = array();
	        if($id > 0)
	        {
	            $input['where']['id'] = $id;
	        }
	        $name = $this->input->get('name');
	        if($name)
	        {
	            $input['like'] = array('name', $name);
	        }
	        $catalog_id = $this->input->get('catalog');
	        $catalog_id = intval($catalog_id);
	        if($catalog_id > 0)
	        {
	            $input['where']['catalog_id'] = $catalog_id;
	        }


	 		$this->data['list'] = $this->Product_model->get_list($input);
	 		$this->data['total'] = $total_rows;

	 		//lay danh sach danh muc san pham
	        $this->load->model('catalog_model');
	        $input = array();
	        $input['where'] = array('parent_id' => 0);
	        $catalogs = $this->Catalog_model->get_list($input);
	        foreach ($catalogs as $row)
	        {
	            $input['where'] = array('parent_id' => $row->id);
	            $subs = $this->Catalog_model->get_list($input);
	            $row->subs = $subs;
	        }
	        $this->data['catalogs'] = $catalogs;

	 		//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

	 		$this->data['temp'] = 'admin/product/index';
	 		$this->load->view('admin/main', $this->data);
		}

		function add(){
			//lay danh sach danh muc san pham
	        $this->load->model('catalog_model');
	        $input = array();
	        $input['where'] = array('parent_id' => 0);
	        $catalogs = $this->Catalog_model->get_list($input);
	        foreach ($catalogs as $row)
	        {
	            $input['where'] = array('parent_id' => $row->id);
	            $subs = $this->Catalog_model->get_list($input);
	            $row->subs = $subs;
	        }
	        $this->data['catalogs'] = $catalogs;

	        //neu ma co du lieu post len thi kiem tra
	        if($this->input->post())
	        {
	            $this->form_validation->set_rules('name', 'Tên', 'required');
	            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
	            $this->form_validation->set_rules('price', 'Giá', 'required');
	            
	            //nhập liệu chính xác
	            if($this->form_validation->run())
	            {
	                //them vao csdl
	                $name        = $this->input->post('name');
	                $catalog_id  = $this->input->post('catalog');
	                $price       = $this->input->post('price');
	                $price       = str_replace(',', '', $price);
	                

	                $discount = $this->input->post('discount');
	                $discount = str_replace(',', '', $discount);
	                
	                
	                //lay ten file anh minh hoa duoc update len
	                $this->load->library('upload_library');
	                $upload_path = './upload/product';
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
	                
	                //luu du lieu can them
	                $data = array(
	                    'name'       => $name,
	                    'catalog_id' => $catalog_id,
	                    'price'      => $price,
	                    'image_link' => $image_link,
	                    'image_list' => $image_list,
	                    'discount'   => $discount,
	                    'warranty'   => $this->input->post('warranty'),
	                    'gifts'      => $this->input->post('gifts'),
	                    'site_title' => $this->input->post('title'),
	                    'meta_desc'  => $this->input->post('dis'),
	                    'meta_key'   => $this->input->post('key'),
	                    'content'    => $this->input->post('content'),
	                    'created'	 => now(),
	                ); 
	                //them moi vao csdl
	                if($this->Product_model->insert($data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không thêm được');
	                }
	                //chuyen tới trang danh sách
	                redirect(admin_url('product'));
	            }
	        }
	        
			$this->data['temp'] = 'admin/product/add';
	 		$this->load->view('admin/main', $this->data);
		}

		function edit(){
			$id = $this->uri->rsegment('3');
	        $product = $this->Product_model->get_info($id);
	        if(!$product)
	        {
	            //tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
	            redirect(admin_url('product'));
	        }
	        $this->data['product'] = $product;
	       
	        //lay danh sach danh muc san pham
	        $this->load->model('catalog_model');
	        $input = array();
	        $input['where'] = array('parent_id' => 0);
	        $catalogs = $this->Catalog_model->get_list($input);
	        foreach ($catalogs as $row)
	        {
	            $input['where'] = array('parent_id' => $row->id);
	            $subs = $this->Catalog_model->get_list($input);
	            $row->subs = $subs;
	        }
	        $this->data['catalogs'] = $catalogs;

	        //neu ma co du lieu post len thi kiem tra
	        if($this->input->post())
	        {
	            $this->form_validation->set_rules('name', 'Tên', 'required');
	            $this->form_validation->set_rules('catalog', 'Thể loại', 'required');
	            $this->form_validation->set_rules('price', 'Giá', 'required');
	        
	            //nhập liệu chính xác
	            if($this->form_validation->run())
	            {
	                //them vao csdl
	                $name        = $this->input->post('name');
	                $catalog_id  = $this->input->post('catalog');
	                $price       = $this->input->post('price');
	                $price       = str_replace(',', '', $price);
	               
	                $discount = $this->input->post('discount');
	                $discount = str_replace(',', '', $discount);
	                
	                //lay ten file anh minh hoa duoc update len
	                $this->load->library('upload_library');
	                $upload_path = './upload/product';
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
	        
	                //luu du lieu can them
	                $data = array(
	                    'name'       => $name,
	                    'catalog_id' => $catalog_id,
	                    'price'      => $price,
	                    'discount'   => $discount,
	                    'warranty'   => $this->input->post('warranty'),
	                    'gifts'      => $this->input->post('gifts'),
	                    'site_title' => $this->input->post('title'),
	                    'meta_desc'  => $this->input->post('dis'),
	                    'meta_key'   => $this->input->post('key'),
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
	                if($this->Product_model->update($product->id, $data))
	                {
	                    //tạo ra nội dung thông báo
	                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
	                }else{
	                    $this->session->set_flashdata('message', 'Không cập nhật được');
	                }
	                //chuyen tới trang danh sách
	                redirect(admin_url('product'));
	            }
	        }

	        $this->data['temp'] = 'admin/product/edit';
	        $this->load->view('admin/main', $this->data);
		}

		function delete(){
			$id = $this->uri->rsegment(3);
			$info = $this->Product_model->get_info($id);
			if (!$info){
				//tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'không tồn tại danh mục này');
	            redirect(admin_url('catalog'));
			}
			//xoa du lieu
	        $this->Product_model->delete($id);
	        //tạo ra nội dung thông báo
	        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
	        redirect(admin_url('product'));
		}
	}
 ?>