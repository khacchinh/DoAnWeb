<?php
	/**
	* 
	*/
	class User_model extends MY_Model{
		
		function __construct(){
			# code...
			parent::__construct();
			$this->table = 'user';
		}
	}