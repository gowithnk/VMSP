<?php
session_start();

include('dbconn.php');
if(isset($_POST['submit'])){

date_default_timezone_set('Asia/Kolkata');
$fromLocation=$_POST['fromLocation'];
$toLocation=$_POST['toLocation'];
$department=$_POST['department'];
$itemCategory=$_POST['itemCategory'];
$itemDescription=$_POST['itemDescription'];
$itemQuantity=$_POST['itemQuantity'];
$reason=$_POST['reason'];
$amount=$_POST['amount'];
$passType=$_POST['passType'];
$remark=$_POST['remark'];
$date=date("Y-m-d");
$out_time=date("h:i");

// $sql="Select * from emp_table where id=$person_meet_id";
// $query=mysqli_query($db,$sql);
// $fetch=mysqli_fetch_array($query);

// $empEmail = $fetch['email_id'];
// $person_meet=$fetch['name'];
// $empPhone=$fetch['phone'];

// $img = $_POST['image'];
//     $folderPath = "upload/";
  
//     $image_parts = explode(";base64,", $img);
//     $image_type_aux = explode("image/", $image_parts[0]);
//     $image_type = $image_type_aux[1];
  
//     $image_base64 = base64_decode($image_parts[1]);
//     $fileName = uniqid() . '.jpeg';
  
//     $file = $folderPath . $fileName;
//     file_put_contents($file, $image_base64);	

 
$sql="INSERT INTO material_pass(FromLocation,ToLocation,Department,ItemCategory,ItemDescription,
ItemQuantity,Reason,Amount,PassType,Remark,Date,OutTime) values(
'$fromLocation','$toLocation','$department','$itemCategory','$itemDescription','$itemQuantity','$reason','$amount','$passType',
'$remark','$date','$out_time')"; 
$query=mysqli_query($db,$sql); 
if($query) 
		{     
			echo"<script>alert('Data Inserted'); 
		     	location.href='pass_phone.php';
					</script>";	
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');</script>";
		}
		
}else{
    echo"<script>alert('Please fill the form first!!!'); 
		     	location.href='pass_phone.php';
					</script>";
}
