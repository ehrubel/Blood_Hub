<?php

	class CONTRACT_US {
        
    public function contract_email($data){
        
    
		
		$to = 'ehrube2012@gmail.com';
		$sub ='';
		$msg = $data['e_msg']."\r\n";
		$msg .= $data['e_name']."\r\n";
		$msg .= $data['e_email'];
		
		$sender= "From:" .$_POST['e_email'];
		
		$result= mail($to,$sub,$msg,$sender);
		
		if($result==true){
			echo 'Message sent Successfully';
		}else{
			echo 'Failed to send message';
		}
	
	}//contract_email method
	}//contract_us class
	
?>