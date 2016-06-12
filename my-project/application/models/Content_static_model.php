<?php 
	/**
	* 
	*/
	class Content_static_model extends MY_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->table = 'content_static';
		}
		//tang view product
		function count_sum_view()
		{
		 	$this->db->set('sview','sview+1',FALSE);
		 	$this->db->where('id',1);
		 	$this->db->update('content_static');
		}
	}
?>