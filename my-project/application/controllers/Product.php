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
			$this->load->model('Comment_model');
			$this->load->model('User_model');
		}

		function view(){
			$this->load->helper('MY_date');
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}

			$id = $this->uri->rsegment(3);

			$this->Product_model->count_view($id);

			$info = $this->Product_model->get_info($id);
			if(!$info) redirect();
        	$this->data['info'] = $info;

        	//lay danh sach comment cho san pham
        	$input['where'] = array('product_id' => $id);
        	$comment = $this->Comment_model->get_list($input);
         	$this->data['comment'] = $comment;
        	//lấy danh sách ảnh sản phẩm kèm theo
	        $image_list = @json_decode($product->image_list);
	        $this->data['image_list'] = $image_list;

	        //lay thong tin cua danh mục san pham
	        $catalog = $this->Catalog_model->get_info($info->catalog_id);
	        $this->data['catalog'] = $catalog;

	        $input_list['order'] = array('view, rate_total', 'desc');
	        $input_list['limit'] = array(12, 0);
	        $this->data['list'] = $this->Product_model->get_list($input_list);

			$this->data['temp'] = 'site/product/view';
			$this->data['head'] = 'site/product/head';
			$this->load->view('site/layout', $this->data);
		}

		function search(){
			$login = $this->session->userdata('email');
			if ($login && isset($login)){
				$input['where'] = array('email' => $login['email']);
				$this->data['login_user'] = $this->User_model->get_row($input);
			}

			if ($this->input->get()){
				if ($this->input->get('product_name') == null)
					$sql = "select * FROM `product` WHERE `product`.`name` like '%". $this->input->get('product_name') ."clbdscjsdabclakdsjbmclasdhgfasdj%'";
				else
					$sql = "select * FROM `product` WHERE `product`.`name` like '%". $this->input->get('product_name') ."%'";
				$this->data['key_search'] = $this->input->get('product_name');
				$product = $this->Product_model->query($sql);
				$this->data['product'] = $product;

				//san pham ban nhieu nhat
				$input_list['order'] = array('view, rate_total', 'desc');
		        $input_list['limit'] = array(12, 0);
		        $this->data['list'] = $this->Product_model->get_list($input_list);

				$this->data['temp'] = 'site/product/index';
				$this->data['head'] = 'site/product/head_1';
				$this->load->view('site/layout', $this->data);
			}
		}

		function showProductCatalog(){
			$login = $this->session->userdata('email');
			if ($login)
				$this->data['login'] = $login;
			


			$id = $this->uri->rsegment(3);
			$info = $this->Catalog_model->get_info($id);

		

			$this->data['catalog'] = $info;

			$sql = "select COUNT(*) as total FROM `product` WHERE `product`.`catalog_id` in 
					(SELECT `catalog`.`id` FROM `catalog` WHERE  `catalog`.`parent_id` in  (SELECT `catalog`.`id` FROM `catalog` WHERE `catalog`.`id` = ". $id .") OR `catalog`.`id` = ". $id .") order by `product`.`id`";
			$total_rows = $this->Product_model->query($sql);
	        $this->data['total_rows'] = intval($total_rows[0]['total']);
	        
	        //load ra thu vien phan trang
	        $this->load->library('pagination');
	        $config = array();
	        $config['total_rows'] = $total_rows[0]['total'];
	        $config['base_url']   = base_url('product/showProductCatalog/'.$id.'/');
	        $config['per_page']   = 4;
	        $config['uri_segment'] = 4;
	        $config['next_link']   = 'Trang kế tiếp';
	        $config['prev_link']   = 'Trang trước';
	        $config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="current"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

	        $this->pagination->initialize($config);

	        $segment = $this->uri->segment(4);
	        $segment = intval($segment);
	        
	        $input = array();
	        $input['limit'] = array($config['per_page'], $segment);

			$sql = "select * FROM `product` WHERE `product`.`catalog_id` in (SELECT `catalog`.`id` FROM `catalog` WHERE `catalog`.`parent_id` in (SELECT `catalog`.`id` FROM `catalog` WHERE `catalog`.`id` = ". $id .") OR `catalog`.`id` = ". $id .") limit " . $config['per_page'] . " offset " . $segment;
			$product = $this->Product_model->query($sql);

			//
			$this->data['pagination'] = $this->pagination;
			$this->data['product'] = $product;

			//san pham ban nhieu nhat
			$input_list['order'] = array('view, rate_total', 'desc');
	        $input_list['limit'] = array(12, 0);
	        $this->data['list'] = $this->Product_model->get_list($input_list);

			$this->data['temp'] = 'site/product/index';
			$this->data['head'] = 'site/product/head_1';
			$this->load->view('site/layout', $this->data);
		}
	}
 ?>