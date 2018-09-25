<?php 

require_once('db_connect.php');
class Donour_View extends DB_Connect{
    
    
 public function donour_view_list_all(){
        
				
			$db_connt=$this->db_connect;
           
            
            $sql_view="SELECT * FROM reg_data ";
            
            $result=$db_connt->query($sql_view);
            
            if($db_connt->error){
				echo 'Error:'.$db_connt->error;
			}
			else{
				return $result;
                
				$db_connt->close();

			}
	
		
		
		}/// donour_view_list method
        
       
###########################################    
    public function donour_view_list($data){
        
				
			$db_connt=$this->db_connect;
           
            
            $sql_view="SELECT applicant_name, applicant_fb_url, applicant_phone_num, applicant_address FROM reg_data WHERE blood_group='$data'";
            
            $result=$db_connt->query($sql_view);
            
            if($db_connt->error){
				echo 'Error:'.$db_connt->error;
			}
			else{
				return $result;
                
				$db_connt->close();

			}
	
		
		
		}/// donour_view_list method
        
    
    
}





?>
