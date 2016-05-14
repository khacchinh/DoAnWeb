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

		function showProductCatalog(){
			$login = $this->session->userdata('email');
			if ($login)
				$this->data['login'] = $login;
			
			$id = $this->uri->rsegment(3);
			$this->data['catalog'] = $this->Catalog_model->get_info($id);

			$input['where'] = array('catalog_id' => $id);
			$product = $this->Product_model->get_list($input);

			$input_catalog['where'] = array('parent_id' => $id);
			$catalog_sub = $this->Catalog_model->get_list($input_catalog);
			foreach ($catalog_sub as $key) {
				$input['where'] = array('catalog_id' => $key->id);
				$product = array_merge($product, $this->Product_model->get_list($input));
			}
			$this->data['product'] = $product;
			$this->data['temp'] = 'site/product/index';
			$this->data['head'] = 'site/product/head_1';
			$this->load->view('site/layout', $this->data);
		}
	}
 ?>