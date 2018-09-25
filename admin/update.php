<?php
include('ad_header.php');
	require_once('../class_lib/donour_list_class.php');

	$donour_obj=new Donour_View;
    $donour_list=$donour_obj->donour_view_list_all();
?>
<div class="col-md-8 col-sm-8 col-xs-12" style="margin-left:350px;">
<table class="table table-bordered">
	<tr>
		<th>Sl.</th>
		<th>Applicant Name</th>
		<th>Blood Group</th>
		<th>email </th>
		<th>Fb Url</th>
		<th>Phone</th>
		<th>Date of Birth</th>
		<th>Gender</th>
		<th>Division</th>
		<th>Address</th>
		<th>UserId</th>
		<th>Action</th>
	</tr>
<?php
	if($donour_list->num_rows >0){
		$x=1;
		while($donour_data = $donour_list->fetch_assoc()){
			
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
			
			?>
			
	<tr>
		<td><?php echo $x++; ?></td>
		<td><?php echo $appl_name; ?></td>
		<td><?php echo $appl_bl_group; ?></td>
		<td><?php echo $appl_email; ?></td>
		<td><?php echo $appl_fb; ?></td>
		<td><?php echo $appl_phone; ?></td>
		<td><?php echo $appl_dob; ?></td>
		<td><?php echo $appl_g; ?></td>
		<td><?php echo $appl_division; ?></td>
		<td><?php echo $appl_addr; ?></td>
		<td><?php echo $appl_uid; ?></td>
		<td><a href="appl_update_data.php?edit_id=<?php echo $sl; ?>">update</a></td>
		
	</tr>
			
			
			<?php
		}
		
	}
	else{
		?>
	<tr>
		<td colspan="9" align="center">Their have no Data at yet</td>
		
	</tr>
		
		<?php
	}

?>
	
	

</table>
</div>








