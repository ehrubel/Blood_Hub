<?php

	require_once('db_connect.php');
	
	class User_Access extends DB_Connect{
		
		
		public function User_login($data){
			$uemail=$data['uemail'];
			$upass=$data['upass'];
            $error='';
            ///// email validation for login
            if(!filter_var($uemail,FILTER_VALIDATE_EMAIL)){
            $error= '<div class="alert alert-warning text-center">
            Email or Password is invalid.
            
            </div>';  	
	           }
	if(!$error){
        $sql_check ="SELECT * FROM reg_data WHERE applicant_email='$uemail'";
			
			$result=$this->db_connect->query($sql_check);
			
			if($this->db_connect->error){
				die('Error: '.$this->db_connect->error);
			}
			else{
				if($result->num_rows > 0){
					$data=$result->fetch_assoc();
					$a_name=$data['admin_name'];
					$a_pass=$data['admin_pass'];
					$a_action=$data['admin_action'];
					 if($a_pass==$a_pwd && $a_action=='admin'){
						  $_SESSION['ad_name']=$a_name;
						  $_SESSION['ad_login']='login';
						  header('Location: admin/index.php');
						  return $_SESSION;
						  
					 }else if($upass==$upass){
						  
						  header('Location: user_profile.php');
					 }
					 else{
						 echo 'Password Invalid';
					 }
						
					
				}else{
					echo 'Email or Password Does Not Match';
				}
			}
			
			
		}else{
        echo $error;
    }
    }//admin login method
			
		
		public function admin_logout(){
			
			session_unset();
			session_destroy();
			header('Location: ../log_in.php');
		}

	
	}// class ending






?>