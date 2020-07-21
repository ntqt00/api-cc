<?php

require 'restful.php';
require 'database.php';

class dangnhap extends restful_api {

	function __construct(){
		parent::__construct();
	}

	function danhsach(){
		if ($this->method == 'POST'){
			
			$a= $this->params['id'];
		}

		else if ($this->method == 'PUT'){
			printf("asda");
						
            //   $db = new DL();
            //   $sql = "SELECT * FROM dm_khach_hang";
            //   $result = $db->select_to_array($sql);
            //   $this->response(200, $result);
		}
	}
}

$user_api = new dangnhap();

?>