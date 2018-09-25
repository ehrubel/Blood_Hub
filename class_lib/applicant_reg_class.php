<?php 

require_once('db_connect.php');
class Applicant_Reg extends DB_Connect{
    
    public function applicant_reg_insert($data){
        
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
        
        //#######  validation  ######
        
        //user name
        
        
        if(strlen($userfullname) >=6 && str_word_count($userfullname)>=2 && preg_match('/^[a-zA-Z. ]/',$userfullname)){
		
	}
	else{
		$error.= 'Applicant Name will be more then one word and 6 letter';
	}
        
        //blood group
        
        if($bloodgroup == 'Ap' || $bloodgroup == 'An' || $bloodgroup == 'Bp' || $bloodgroup == 'Bn' || $bloodgroup == 'Op' || $bloodgroup == 'On' || $bloodgroup == 'ABp' || $bloodgroup == 'ABn'){
		
	}
	else{
		$error.= 'Value is not Correct';
	}
        
        
	// validation for Contact Number
	if(strlen($ucontnum)>=11 && strlen($ucontnum)<=14 && preg_match('/[0-9+]/',$ucontnum)){
		
	}
	else{
		$error.= 'Contact Number will be Numarical Number';
	}
	// validation for User Email
	if(filter_var($uemail,FILTER_VALIDATE_EMAIL)){
		
	}
	else{
		$error.= 'Only validated email can insert';
	}
	// validation for User FB Url
	if(filter_var($userfb,FILTER_VALIDATE_URL)){
		
	}
	else{
		$error.= 'Only validated email can insert';
	}
	// validation for User Gender
	if($ugender == 'M' || $ugender == 'F'){
		
	}
	else{
		$error.= 'Value is not Correct';
	}
        // validation for division
        
        
        if($division == 'Borishal' || $division == 'Chittagong' || $division == 'Dhaka' || $division == 'Khulna' || $division == 'Moymonsingho' || $division == 'Rajshahi' || $division == 'Sylhet' || $division == 'Rongpoor'){
		
	}
	else{
		$error.= 'Value is not Correct';
	}
        
        
        
        
	// validation for Date of Birth
	if($ubday >0 && $ubday <=31 && $ubmonth >0 && $ubmonth <=12 && $ubyear >1980 && $ubyear <=2015 ){
		if($ubmonth == 2 && $ubday <=29){
			
			
		}
		else if($ubmonth == 2 && $ubday >29){
			$error.= 'February Month will be 28/29 days';
		}
		
	}
	else{
		$error.= 'Value is not Correct';
	}
       //  validation for UserID
			
//			if(strlen($uid) >=4 && strlen($uid) <=20 && preg_match('/^[a-zA-Z0-9]/',$uid)){
//				echo $uid.'<br>';
//			}
//			else{
//				$error.= 'Applicant user Id will be in a word with 6-10 letters <br>';
//			}
        
        
      //user password  
        
			if(strlen($upass)>=4 && strlen($upass) <=50){
				if($upass==$ucpass){
					
				}
				else {
					$error.= 'Confirm password does not matched..<br>';
				}
				
			}
			else{
				$error.= 'Applicant user Id will be in a word with 5-50 characters <br>';
			}
        
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
                            header('Location: dashboard.php');
				echo 'Data Insert Successfully';
                
				$db_connt->close();

			}
	
		
		}else{
			echo 'Error: <br>'.$error;
		}
        
    }//####### applicant_reg_insert #######
    
    
}





?>
