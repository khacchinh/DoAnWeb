<?php
class Home extends MY_Controller{
	
    function index(){
    	$this->load->model('Requird_Customer_Model');
    	$this->load->model('Product_model');
		$this->load->model('Transaction_model');
		$this->load->model('Order_model');
		$this->load->model('User_model');
		$this->load->model('Content_static_model');

		//tong truy cap
		$sumview = $this->Content_static_model->get_info(1);
        $this->data['sumview'] = $sumview->sview;
        
        //tong don hang
        
        $sum_order = $this->Transaction_model->get_total();
	    $this->data['sum_order'] = $sum_order;

	    	    //tong thanh vien
	    $sum_user = $this->User_model->get_total();
	 	$this->data['sum_user'] = $sum_user;
	 	//tong don hang chua xu ly
	 	$data1 = array(
        'status' => '0');
	 	$sum_order_no = $this->Transaction_model->get_total('id',$data1);
	 	$this->data['sum_order_no'] = $sum_order_no;
	 	//tong don hang da xu ly
	 	$data2 = array(
        'status' => '1');
	 	$sum_order_yes = $this->Transaction_model->get_total('id',$data2);
	 	$this->data['sum_order_yes'] = $sum_order_yes;

	 	//tong doanh thu
	 	$sum_revenue = $this->Order_model->get_sum('amount');
	 	$this->data['sum_revenue'] = $sum_revenue;

	 	$this->data['requird'] = $this->Requird_Customer_Model->get_list();

        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);
    }
}