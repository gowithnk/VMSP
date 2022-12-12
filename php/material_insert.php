<?php
session_start();

include('dbconn.php');
$sql = "SELECT * FROM material_pass ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$challans = mysqli_fetch_array($query);
$challanNo = $challans[24];
$challanNo = $challanNo +1;
if(isset($_POST['submit'])){

date_default_timezone_set('Asia/Kolkata');
$materialPass=$_POST['materialPass'];
$fromLocation=$_POST['fromLocation'];
$toLocation=$_POST['toLocation'];
$department=$_POST['department'];
$itemCategory=$_POST['itemCategory'];
$itemSubCategory=$_POST['itemSubCategory'];
$empId=$_POST['empId'];
$approvedBy=$_POST['approvedBy'];
$reason=$_POST['reason'];
$personName=$_POST['personName'];
$companyName=$_POST['companyName'];
$returnType=$_POST['returnType'];
if(empty($_POST['estimatedReturnDate'])){$estimatedReturnDate='NA';}
else{
	$estimatedReturnDate=$_POST['estimatedReturnDate'];
};
$itemDescription=$_POST['itemDescription'];
$itemQuantity=$_POST['itemQuantity'];
$amount=$_POST['amount'];
$remark=$_POST['remark'];
$itemDescription2=$_POST['itemDescription2'];
$itemQuantity2=$_POST['itemQuantity2'];
$amount2=$_POST['amount2'];
$remark2=$_POST['remark2'];
$date=date("Y-m-d");
$out_time=date("h:i A");



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

 
$sql="INSERT INTO material_pass(MaterialPass,FromLocation,ToLocation,Department,ItemCategory,ItemSubCategory,EmpId,ApprovedBy,Reason,PersonName,CompanyName,
ReturnType,EstimatedReturnDate,ItemDescription,ItemQuantity,Amount,Remark,ItemDescription2,ItemQuantity2,Amount2,Remark2,Date,OutTime,ChallanNo) 
VALUES('$materialPass','$fromLocation','$toLocation','$department','$itemCategory','$itemSubCategory','$empId','$approvedBy','$reason','$personName',
'$companyName','$returnType','$estimatedReturnDate','$itemDescription','$itemQuantity','$amount','$remark','$itemDescription2',
'$itemQuantity2','$amount2','$remark2','$date','$out_time','$challanNo')"; 
$query=mysqli_query($db,$sql); 
if($query) 
		{     
			echo"<script>alert('Data Inserted'); 
						window.open('material_print_pdf.php', '_blank');
		     	 		location.href='pass_phone.php';
					</script>";	
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');
					location.href='pass_phone.php';
				</script>";
			
		}
		
}else{
    echo"<script>alert('Please fill the form first!!!'); 
			location.href='pass_phone.php', '_blank';
		</script>";
	
	//$sql = "SELECT * FROM material_pass ORDER BY ID DESC LIMIT 1";
	//$query=mysqli_query($db,$sql);
	//$row2 = mysqli_fetch_array($query);
	//echo $row2[0];
	//echo"<script>location.href='material_print_pdf.php?id=$row2[0]';</script>";
}