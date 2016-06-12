<?php 
	/**
	* 
	*/
	class Product_model extends MY_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->table = 'product';
		}

		//tang view product
		function count_view($id)
		{

		 	
		 	$this->db->set('view','view+1',FALSE);
		 	$this->db->where('id',$id);
		 	$this->db->update('product');


		}

		function count_buyed($id)
		{

		 	
		 	$this->db->set('buyed','buyed+1',FALSE);
		 	$this->db->where('id',$id);
		 	$this->db->update('product');


		}

		//tong luot truy cap product
		function sum_view()
		{		
			$this->db->select_sum('view');//tinh rong
			$this->db->from('product');
			
			$row = $this->db->get()->row();
			foreach ($row as $f => $v)
			{
				$sum = $v;
			}
			return $sum;
		}
	}
 ?>