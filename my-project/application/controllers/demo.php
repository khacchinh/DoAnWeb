<?php 
	/**
	* 
	*/
	class Demo extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		function index(){
			$this->load->view('site/product/demo');
		}
	}
 ?>