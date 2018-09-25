<?php

class DB_Connect{
    
    
		private $db_host='localhost';
		private $db_user='root';
		private $db_pass='';
		private $db_name='blood_project';
    
    protected $db_connect;
    
    public function __construct(){
        $this->db_connect();
    }
    
	private function db_connect(){

		$this->db_connect= new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		
		if($this->db_connect->connect_error){
			
			die('Connect Error:'.$this->db_connect->connect_error);
		}

	 }
}

?>