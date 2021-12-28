<?php 

class Model{

	public $db;


	public function __construct()
	{
		$this->db = new MysqliDb (host, user, pass, db);
	}



}





 ?>