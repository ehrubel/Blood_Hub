<?php
	session_start();
	if(isset($_GET['ad_logout'])){
		require_once('../class_lib/admin_access_class.php');
		$admin = new Admin_Access;
		$admin->admin_logout();
	}
?>
