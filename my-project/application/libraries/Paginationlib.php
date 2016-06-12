<?php 
        /**
         *Initialize the pagination rules for cities page 
         * @return Pagination
         */
    class Paginationlib {
        //put your code here
        function __construct() {
             $this->ci =& get_instance();
        }
     
        public function initPagination($base_url,$total_rows){
            $config['per_page']          = 4;
            $config['uri_segment']       = 4;
            $config['base_url']          = base_url().$base_url;
            $config['total_rows']        = $total_rows;
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
            
            $this->ci->pagination->initialize($config);
            return $config;    
        }
        
    } 
?>