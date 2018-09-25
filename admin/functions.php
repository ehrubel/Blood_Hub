<?php
	require('../class_lib/db_connect.php');
	
	
	
	################ Data View ##############
	
	function applicant_data_table(){
		
		$db_connt= DB_Connect;
		$sql_view="SELECT * FROM user_data";
		
		$result= mysqli_query($db_connt,$sql_view);
		
		if(!$result){
				echo 'Error:'.mysqli_error($db_connt);
			}
		else{
			return $result;
			
			db_close();

			}
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



?>