<?php
include('dbconn.php');
session_start();
$phone = $_SESSION['phone'];
$sql = "Select * from inquery where Phone='$phone'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Slip</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="assets/ico/minus.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<style>
		p {
			font-size: 13px;
		}
	</style>
</head>

<body>
		<div id="divToPrint" class="card" style="width: 30rem;margin-top:20px;left:50px;">
			<div class="card-body">
				<img src="../images/logo.png" width="200px"><br><br>
				<div class="row">
					<div class="col-4" style="padding-right: 0px !important;">
						<p style="font-weight:600;">Name : </p>
						<p style="font-weight:600;">Company : </p>
						<p style="font-weight:600;">Purpose : </p>
						<p style="font-weight:600;">Person To Meet : </p>
						<p style="font-weight:600;">Entry Time : </p>
						<p style="font-weight:600;">Date : </p>
					</div>
					<div class="col-4">
						<p style="font-weight:600;"><?php echo "$fetch[1]"; ?></p>
						<p style="font-weight:600;"><?php echo "$fetch[12]"; ?></p>
						<p style="font-weight:600;"><?php echo "$fetch[13]"; ?></p>
						<p style="font-weight:600;"><?php echo "$fetch[6]"; ?></p>
						<p style="font-weight:600;"><?php echo "$fetch[7]"; ?></p>
						<p style="font-weight:600;"><?php echo "$fetch[10]"; ?></p>
					</div>
					<div class="col-3">
						<img src="<?php echo $fetch[9] ?>" height="110px" width="110"><br>
						<img src="<?php echo $fetch[4] ?>" width="110">
					</div>
				</div><br>
				<!--Instruction box in the main form-->
				<div class="slip_instruction">
					<h4>Instruction To Follow:</h4>
					<ul>
						<li>Visitors should sign in at the [reception/ gate/ front-office] and show some form of identification.</li>
						<li>Visitors will receive passess and return them to [reception/ gate/ front-office] once the visit is over.</li>
						<li>Employees must always tend to their visitors while they are inside our premises.</li>
					</ul>
				</div>
				<div class="slip_left">
					<div class="slip_btn">
						<!-- <button class="btn btn-primary" id="p1" onclick="print1()" style="margin-right: 20px;">Print</button> -->
						<a href="print_pass.php" target="_blank" class="btn btn-primary" id="p1" style="margin-right: 20px;">Print</a>
						<a id="p2" class="btn btn-info" href="../dashboard.php">Back</a><br>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript">
		function print1() {
			w = document.getElementById('p1');
			w.style.display = 'none';
			w1 = document.getElementById('p2');
			w1.style.display = 'none';
			window.print();
			w.style.display = 'block';
			w1.style.display = 'block';
		}
	</script>
</body>

</html>