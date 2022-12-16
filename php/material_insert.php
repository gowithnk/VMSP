<?php
session_start();

include('dbconn.php');
$sql = "SELECT * FROM material_pass ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$challans = mysqli_fetch_array($query);
$challanNo = $challans['ChallanNo'];
$challanNo = $challanNo + 1;

if (isset($_POST['submit'])) {

	date_default_timezone_set('Asia/Kolkata');
	$materialPass = $_POST['materialPass'];
	$fromLocation = $_POST['fromLocation'];
	$toLocation = $_POST['toLocation'];
	$department = $_POST['department'];
	$itemCategory = $_POST['itemCategory'];
	$itemSubCategory = $_POST['itemSubCategory'];
	$empId = $_POST['empId'];
	$approvedBy = $_POST['approvedBy'];
	$reason = $_POST['reason'];
	$personName = $_POST['personName'];
	$companyName = $_POST['companyName'];
	$returnType = $_POST['returnType'];
	if (empty($_POST['estimatedReturnDate'])) {
		$estimatedReturnDate = 'NA';
	} else {
		$estimatedReturnDate = $_POST['estimatedReturnDate'];
	};
	$date = date("Y-m-d");
	$out_time = date("h:i A");


	$sql = "INSERT INTO material_pass(MaterialPass,FromLocation,ToLocation,Department,ItemCategory,ItemSubCategory,EmpId,ApprovedBy,Reason,
PersonName,CompanyName,ReturnType,EstimatedReturnDate,Date,OutTime,ChallanNo) 
VALUES('$materialPass','$fromLocation','$toLocation','$department','$itemCategory','$itemSubCategory','$empId','$approvedBy','$reason','$personName',
'$companyName','$returnType','$estimatedReturnDate','$date','$out_time','$challanNo')";
	$query = mysqli_query($db, $sql);

	$id = mysqli_insert_id($db);

	if (isset($_POST['submit'])) {
		$itemDescription = $_POST['itemDescription'];
		$itemQuantity = $_POST['itemQuantity'];
		$amount = $_POST['amount'];
		$remark = $_POST['remark'];
		foreach ($itemDescription as $key => $value) {
			$sql2 = "INSERT INTO material_items(ItemDescription,ItemQuantity,ItemAmount,ItemRemark,id) 
					VALUE ('" . $value . "', '" . $itemQuantity[$key] . "', '" . $amount[$key] . "', '" . $remark[$key] . "', '$id')";

			$query2 = mysqli_query($db, $sql2);
		}
	}

	if ($query) {
		echo "<script>alert('Data Inserted'); 
						window.open('material_print_pdf.php', '_blank');
		     	 		location.href='pass_phone.php';
					</script>";
	} else {
		echo "<br>";
		echo "<script>alert ('error');
					location.href='pass_phone.php';
				</script>";
	}
} else {
	echo "<script>alert('Please fill the form first!!!'); 
			location.href='pass_phone.php', '_blank';
		</script>";
}
