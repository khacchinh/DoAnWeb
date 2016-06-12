<?php 
	/**
	* 
	*/
	class Transaction extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Transaction_model');
			$this->load->model('Order_model');
			$this->load->helper('MY_date');
		}

		function index(){
			$total_rows = $this->Transaction_model->get_total();
	        $this->data['total_rows'] = $total_rows;

			//load ra thu vien phan trang
	        $this->load->library('pagination');
	        $config = array();
	        $config['total_rows'] = $total_rows;
	        $config['base_url']   = admin_url('transaction/index');
	        $config['per_page']   = 8;
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

	        $this->data['tran_data'] = $this->Transaction_model->get_list($input);
	        $this->data['pagination'] = $this->pagination;
			//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

	 		$this->data['temp'] = 'admin/transaction/index';
	 		$this->load->view('admin/main', $this->data);
		}
		function del(){
			$id = $this->uri->rsegment(3);
			$id = intval($id);

		    $info = $this->Transaction_model->get_info($id);
		    if(!$info)
		    {
		        $this->session->set_flashdata('message', 'Không tồn tại');
		        redirect(admin_url('transaction'));
		    }
		    
		    if( $this->Transaction_model->delete($id) ){
		    	$sql = "delete from `order` where transaction_id = ". $id;
		    	$this->Order_model->query_del($sql);
		    }
		        
		    $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
		    redirect(admin_url('transaction'));
		}
	}
 ?>