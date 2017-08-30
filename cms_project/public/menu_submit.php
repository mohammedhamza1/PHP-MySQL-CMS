<?php session_start(); ?>
<?php
include_once("../includes/layout/header.php");
include_once("../includes/session.php");
include_once("../includes/layout/function.php");
include_once("../includes/layout/connectdb.php");

if (isset($_POST['submit'])) {

	$menu = $_POST['name'];
	$visible = (int) $_POST['optradio'];
	$rank = (int) $_POST['rank'];
	//$menu2 = mysqli_real_escape_string($conn,$menu);

	$sql = "INSERT INTO `website_navbar` (`item_name`, `rank`, `visible`) VALUES ('{$menu}',{$rank},{$visible})";
	if (mysqli_query($conn,$sql) && mysqli_affected_rows($conn)>0) {
?>
   <div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Success!</strong> New record created successfully.
   </div>
   <?php 
   header('Location:manage_content.php');
   exit();
	}else{
    ?>
   
    <div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Error!</strong><?php "$sql".msqli_error($conn); ?>
   </div>

   <?php header('Location:creat_menu.php'); 
   exit();
      }
  }
   ?>


 