
<?php
	session_start();
	if(!$_SESSION['ad_login']){
		header('Location: index.php');
	}
	
?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
<section id="admin_body">
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Admin Panel</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span><?php if(isset($_SESSION['ad_name'])){echo $_SESSION['ad_name'];} ?></a></li>
        <li class="active"><a title="View Website" href="../index.php"><span class="glyphicon glyphicon-globe"></span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Small modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4>Log Out <i class="fa fa-lock"></i></h4>
      </div>
      <div class="modal-body">
        <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
        <div class="actionsBtns">
            <form action="/logout" method="post">
                <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                <a href="admin_logout.php?ad_logout=ad_logout" role="button" class="btn btn-default btn-primary" >Logout</a>
	                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container-fluid">
  <div class="col-md-3">

    <div id="sidebar">

      <ul class="nav navbar-nav side-bar">
        <li class="side-bar tmargin"><a href="index.php"><span class="glyphicon glyphicon-list">&nbsp;</span>Dashboard</a></li>
        <li class="side-bar"><a href="applicant_view.php"><span class="glyphicon glyphicon-user">&nbsp;</span>Donours List</a></li>
        <li class="side-bar"><a href="update.php"><span class="glyphicon glyphicon-transfer">&nbsp;</span>Update List</a></li>
        <li class="side-bar">
          <a href="delete.php"><span class="glyphicon glyphicon-trash">&nbsp;</span>Delete List</a></li>
        <li class="side-bar"><a href="#"><span class="glyphicon glyphicon-cog">&nbsp;</span>Settings</a></li>

      </ul>
    </div>
  </div>
  <div class="col-md-9 animated bounce">
    <h1 class="page-header">Dashboard</h1>
    <ul class="breadcrumb">
      <li><span class="glyphicon glyphicon-home">&nbsp;</span>Home</li>
      <li><a href="#">Dashboard</a></li>
    </ul>
  
  </div>