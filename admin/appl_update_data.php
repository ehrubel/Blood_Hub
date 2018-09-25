<?php 
	$appl_id=$_GET['edit_id'];
	if(isset($appl_id)){
		require_once('functions.php');
		$applicant=applicant_data_id($appl_id);
		//print_r(mysqli_fetch_assoc($applicant));
		
		$appl_data=mysqli_fetch_assoc($applicant);
		
			$sl= $donour_data['sl_id'];
			$appl_name= $donour_data['applicant_name'];
			$appl_bl_group= $donour_data['blood_group'];
			$appl_email= $donour_data['applicant_email'];
            $appl_fb= $donour_data['applicant_fb_url'];
			$appl_phone= $donour_data['applicant_phone_num'];
			$appl_dob= $donour_data['applicant_dob'];
			$appl_g= $donour_data['applicant_gender'];
			$appl_division= $donour_data['applicant_division'];
			$appl_addr= $donour_data['applicant_address'];
			$appl_uid= $donour_data['user_id'];
		
	}
	
	######### Update Data Inserting #########
	if(isset($_POST['update_btn'])){
		require_once('functions.php');
		user_update_data($_POST);
	
	}
?>
<!-- =============== content area ========== -->


<section>
	<form id="ulogin" method="post" action="" style="width:300px; margin:auto;">
	<fieldset>
		<legend>Update Registrtion Form</legend>
		
		<input type="hidden" name="sl_id" value="<?php echo $sl; ?>"><br>
		<label for="ufullname">Applicant Name</label><br>
		<input type="text" name="applicant_name" id="applicant_name" value="<?php echo $appl_name; ?>"><br>
		<label for="uemail">Email</label><br>
		<input type="email" name="applicant_email" id="applicant_email" value="<?php echo $appl_email; ?>" disabled><br>
		<label for="ucontnum">Conatact Number</label><br>
		<input type="text" name="applicant_phone_num" id="applicant_phone_num" value="<?php echo $appl_phone; ?>"><br>
		<label for="ufburl">Applicant Facebook Url</label><br>
		<input type="url" name="applicant_fb_url" id="applicant_fb_url" value="<?php echo $appl_fb; ?>"><br>
		<label for="applicant_gender">Gender</label><br>
		<input type="radio" name="applicant_gender" id="applicant_gender" value="M" <?php if($appl_g=='M'){echo 'checked';}?>>Male
		<input type="radio" name="applicant_gender" id="applicant_gender" value="F"  <?php if($appl_g=='F'){echo 'checked';}?>>female<br>
		
		<label for="applicant_dob">Date of Birth</label><br>
		<input type="text" name="bdaapplicant_dobte" id="applicant_dob" value="<?php echo $appl_dob; ?>"><br>
		
		<label for="applicant_address">Address</label><br>
		<input type="text" name="applicant_address" id="applicant_address" value="<?php echo $appl_addr; ?>"><br>
		<label for="user_id">UserID</label><br>
		<input type="text" name="user_id" id="user_id" value="<?php echo $appl_uid; ?>"><br>
		
		<button name="update_btn" type="submit">Submit</button>
	</fieldset>
</form>


</section>

