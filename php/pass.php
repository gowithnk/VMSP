<?php
session_start();
include('dbconn.php');
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");

$phone=$_POST['phone'];
$sql="select * from inquery where Phone='$phone' and Date='$date'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
$count=mysqli_num_rows($query);

if($count>0){
	
	if($fetch[8]=="")
	{
		echo"<script>alert('Visitor already logged in'); 
		location.href='../php/pass_phone.php';
		</script>";
	}	
	
}
elseif($phone =='')
	{
		$_SESSION['phone']=$phone;
		echo"<script>
		alert('Please Enter phone first'); 
		location.href='../php/pass_phone.php';
		</script>";
	}
else
{
		$_SESSION['phone']=$phone;
		echo "<script>
			location.href='create_pass.php';	
			</script>";
}
