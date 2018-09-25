<?php 

require_once('db_connect.php');
class Donour_Search extends DB_Connect{
    
    public function donour_search_list($data){
        $s_divi = $data['division'];
        $s_bg = $data['bg_group'];
				
			$db_connt=$this->db_connect;
           
            
            $sql_view="SELECT applicant_name, applicant_fb_url, applicant_phone_num, applicant_address FROM reg_data WHERE blood_group='$s_bg' && applicant_division = '$s_divi'";
            
            $result=$db_connt->query($sql_view);
            
            if($db_connt->error){
				echo 'Error:'.$db_connt->error;
			}
			else{
				return $result;
                
				$db_connt->close();

			}
	
		
		
		}
        
    
    
}





?>



<?php



?>