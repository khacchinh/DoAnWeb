<?php 
	/**
	* 
	*/
	class Payment extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Transaction_model');
			$this->load->model('Order_model');
			$this->load->model('User_model');
			$this->load->helper('MY_date');
		}

		function index(){
			$this->data['head'] = 'site/payment/head';
			$this->data['temp'] = 'site/payment/index';
			$this->load->view('site/layout', $this->data);
		}

		function pay(){
			if ($this->input->post()){
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$payment = $this->input->post('oppayment');
				$carts = $this->cart->contents();
				$total_amount = 0;
				foreach ($carts as $key) {
					$total_amount += intval($key['qty'])*intval($key['price']);
				}
				$user = $this->User_model->get_row(array('email' => $email));
				if ($user)
					$user_id = $user->id;
				$data_transaction = array('status' => 0,
					'user_id' => $user_id,
					'user_name' => $name,
					'user_email' => $email,
					'user_phone' => $phone,
					'amount' => $total_amount,
					'payment' => $payment,
					'created' => now());
				if ($this->Transaction_model->insert($data_transaction)){
					$transaction = $this->Transaction_model->get_row($data_transaction);
					$transaction_id = $transaction->id;
					foreach ($carts as $key) {
						# code...
						$data = array('transaction_id' => $transaction_id,
							'product_id' => $key['id'],
							'qty' => $key['qty'],
							'amount' => intval($key['qty'])*intval($key['price']),
							'status' => 0);
						$this->Order_model->insert($data);
					}
					$this->cart->destroy();
					$this->data['information_order'] = array($email, $phone, $address, $total_amount, $payment);
				}
				else $this->data['error'] = 'Có lỗi xảy ra!!';

			}
			$this->data['head'] = 'site/payment/head';
			$this->data['temp'] = 'site/payment/index';
			$this->load->view('site/layout', $this->data);
		}
	}
 ?>