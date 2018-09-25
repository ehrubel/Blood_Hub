<?php 

require_once('db_connect.php');
class User_Profile extends DB_Connect{
    
    public function User_profile($data){
        
	$userfullname	= $data['ufullname'];
        if(isset($data['bgroup'])){
            	$bloodgroup	= $data['bgroup'];
        }

	$uemail			= $data['uemail'];
	$ucontnum		= $data['ucontnum'];
	$userfb			= $data['ufburl'];
	if(isset($data['gender'])){
         $ugender		= $data['gender'];
    }
   
	if(isset($data['division'])){
         $division			= $data['division'];
    }
   
	$ubday			= $data['bday'];
	$ubmonth		= $data['bmonth'];
	$ubyear			= $data['byear'];
	$uaddress		= $data['uaddress'];
	
	$upass			= $data['upass'];
	$ucpass			= $data['ucpass'];
	
        
     $error='';   
        
        
        
        ###########   Data Inserting Query ###########################		
		if(!$error){
				
			$db_connt=$this->db_connect;
            $user_dob =$ubday.'-'.$ubmonth.'-'.$ubyear;
            
            $sql_insert="INSERT INTO reg_data(applicant_name, blood_group, applicant_email, applicant_fb_url, applicant_phone_num, applicant_dob, applicant_gender, applicant_division, applicant_address, Applicant_pass) VALUES ('$userfullname','$bloodgroup','$uemail','$userfb','$ucontnum','$user_dob','$ugender','$division','$uaddress','$upass')";
            
            $result=$db_connt->query($sql_insert);
            
            if($db_connt->error){
				echo 'Error:'.$db_connt->error;
			}
			else{
                            header('Location: user_profile.php');
				echo 'Data Insert Successfully';
                
				$db_connt->close();

			}
	
		
		}else{
			echo 'Error: <br>'.$error;
		}
        
    }//####### applicant_reg_insert #######
    
    
}





?>
