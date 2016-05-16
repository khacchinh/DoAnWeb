<?php 
	/**
	* 
	*/
	class Order extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Order_model');
			$this->load->model('Product_model');
		}

		function index(){
			$total_rows = $this->Order_model->get_total();
	        $this->data['total_rows'] = $total_rows;
	        
	        //load ra thu vien phan trang
	        $this->load->library('pagination');
	        $config = array();
	        $config['total_rows'] = $total_rows;
	        $config['base_url']   = admin_url('order/index');
	        $config['per_page']   = 8;
	        $config['uri_segment'] = 4;
	        $config['next_link']   = 'Trang kế tiếp';
	        $config['prev_link']   = 'Trang trước';

	        $this->pagination->initialize($config);

	        $segment = $this->uri->segment(4);
	        $segment = intval($segment);
	        
	        $input = array();
	        $input['limit'] = array($config['per_page'], $segment);

	        $sql = "select `order`.id as id, transaction_id, name, qty, amount, status from `order`, `product` where `order`.product_id = `product`.id limit " . $config['per_page'] . " offset " . $segment;

	        $order_data = $this->Order_model->query($sql);

	        $this->data['order_data'] = $order_data;
	        $this->data['pagination'] = $this->pagination;

			//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;



	 		$this->data['temp'] = 'admin/order/index';
	 		$this->load->view('admin/main', $this->data);
		}

		function detail(){
			$tran_id = $this->uri->rsegment(3);

			$input['where'] = array('transaction_id' => $tran_id);
			$total_rows = $this->Order_model->get_total($input);
	        $this->data['total_rows'] = $total_rows;

			$sql = "select `order`.id as id, transaction_id, name, qty, amount, status  from `order`, `product` where `order`.product_id = `product`.id and transaction_id = " . $tran_id; 
			$this->data['order_data'] = $this->Order_model->query($sql);

			//lay nội dung của biến message
	        $message = $this->session->flashdata('message');
	        $this->data['message'] = $message;

			$this->data['temp'] = 'admin/order/index';
	 		$this->load->view('admin/main', $this->data);
		}

		function del(){
			$this->load->model('Transaction_model');
			$id = intval($this->uri->rsegment(3));


			$info = $this->Order_model->get_info($id);
		    if(!$info)
		    {
		        $this->session->set_flashdata('message', 'Không tồn tại');
		        redirect(admin_url('order'));
		    }

		    $sql = "select SUM(amount) as total FROM `order` GROUP by transaction_id";
		    $total_order = $this->Order_model->query($sql);
		    
		    if( $this->Order_model->delete($id) ){
		    	$sql = "select SUM(amount) as total FROM `order` GROUP by transaction_id";
		    	$total_order = $this->Order_model->query($sql);
		    	$total_amount = intval($total_order[0]['total']);
		    	$tran_id = intval($info->transaction_id);
		    	
		    	if ($total_amount == 0){
		    		$sql = "delete from `transaction` where id = ". $tran_id;
		    		$this->Transaction_model->query_del($sql);
		    	}
		    	else {
		    		$data = array('amount' => $total_amount);
		    		$this->Transaction_model->update($tran_id, $data);
		    	}
		    }
		    
		    $this->session->set_flashdata('message', 'Xóa dữ liệu thành công' . $total_amount . ' ' . $tran_id);
		    redirect(admin_url('order'));
		}

		function progress_order(){
			$this->load->model('Transaction_model');
			$id = intval($this->uri->rsegment(3));
			$info = $this->Order_model->get_info($id);
		    if(!$info)
		    {
		        $this->session->set_flashdata('message', 'Không tồn tại');
		        redirect(admin_url('order'));
		    }

		    if (intval($info->status) == 0){
		    	$data = array('status' => 1);
		    	$this->Order_model->update($id, $data);

		    	$sql = "select SUM(status) as total, COUNT(*) as total_row FROM `order` GROUP by transaction_id";
		    	$sta_order = $this->Order_model->query($sql);
		    	$check = intval($sta_order[0]['total']);
		    	$total_row = intval($sta_order[0]['total_row']);
		    	if ($check == $total_row){
		    		$data = array('status' => 1);
		    		$this->Transaction_model->update($info->transaction_id, $data);
		    	}
		    }
		    $this->session->set_flashdata('message', 'Cập nhật thành công');
		    redirect(admin_url('order'));
		}
	}
 ?>