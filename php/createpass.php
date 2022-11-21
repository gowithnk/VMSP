<?php
$phone1 = $_SESSION['phone'];
include('dbconn.php');
$sql = "Select * from inquery where Phone='$phone1'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<script>
		function onlyAlphabets(evt) {
			var charCode;
			if (window.event)
				charCode = window.event.keyCode; //for IE
			else
				charCode = evt.which; //for firefox
			if (charCode == 32) //for &lt;space&gt; symbol
				return true;
			if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
				return false;
			if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
				return false;
			if (charCode > 122) //for characters beyond 'z' in ASCII Table
				return false;
			return true;
		}
	</script>
	<title>Create pass</title>
	<link rel="stylesheet" href="../css/createpass_1.css">

</head>

<body onload='document.form1.text1.focus()'>
	<form class="back_ground form-horizontle mb-6" action="new.php" method="post" name="form1">
		<div class="row">
			<div class="card py-4">
				<h2 style="justify-content: center; text-align:center;">Create Pass</h2>
				<div class="form-group">
					<label for="inputName" class="col-lg-2 col-md-12 control-label">Name :</label>
					<div class="col-lg-10 col-md-12"> 
						<input  required type="text" name="name1" onkeypress="return onlyAlphabets(event);" 
						placeholder="Visitors name..." value="" class="form-control" id="inputName" >
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 col-md-12 control-label">Gender :</label>
					<div class="col-lg-10 col-md-12">
						<input required <?php if ($fetch == "male") { echo "checked"; } ?> 
						type="radio" name="gender" value="male">
						<label style="margin-left: 5px;">Male</label>
						<input style="margin-left: 5px;" <?php if ($fetch == "female") { echo "checked"; } ?> 
						type="radio" name="gender" value="female">
						<label style="margin-left: 5px;">Female</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPhone" class="col-lg-2 col-md-12 control-label">Phone :</label>
					<div class="col-lg-10 col-md-12"> 
						<input  type="Number" name="phone" readonly="readonly" placeholder="Phone No" value="<?php echo $phone1 ?>"  
						class="form-control" id="inputphone" >
					</div>
				</div>
				<div class="form-group">
					<label for="inputHTM" class="col-lg-2 col-md-12 control-label">Whom To Meet :</label>
					<div class="col-lg-10 col-md-12"> 
						<select class="form-control" name="person_meet_id" style="color: #000 !important;" id="inputHTM">
							<?php 
							include('dbconn.php');
							$sql = "Select * from emp_table";
							$query = mysqli_query($db, $sql);

							while ($fetch = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $fetch[0] ?>"><?php echo $fetch[1] ?></option>

							<?php
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPhone" class="col-lg-2 col-md-12 control-label">Department :</label>
					<div class="col-lg-10 col-md-12"> 
						<select class="form-control" name="department" style="color: #000 !important;">
						<?php
						include('dbconn.php');
						$sql = "Select * from department";
						$query = mysqli_query($db, $sql);

						while ($fetch = mysqli_fetch_array($query)) {

						?>
							<option value="<?php echo $fetch[1] ?>"><?php echo $fetch[1] ?></option>

						<?php
						}
						?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 col-md-12 control-label">Email :</label>
					<div class="col-lg-10 col-md-12"> 
						<input type="email" name="v_email" placeholder="Visitors email..." value="" class="form-control" id="inputEmail" >
					</div>
				</div>
				<div class="form-group">
					<label for="inputCompany" class="col-lg-2 col-md-12 control-label">Company :</label>
					<div class="col-lg-10 col-md-12"> 
						<input  required type="text" name="company" placeholder="ABC Company" value="" class="form-control" id="inputCompany" >
					</div>
				</div>
				<div class="form-group">
					<label for="inputPurpose" class="col-lg-2 col-md-12 control-label">Purpose :</label>
					<div class="col-lg-10 col-md-12"> 
						<input  required type="text" name="purpose" placeholder="Purpose" value="" class="form-control" id="inputPurpose" >
					</div>
				</div>
				<div class="form-group">
					<label for="inputCity" class="col-lg-2 col-md-12 control-label">City :</label>
					<div class="col-lg-10 col-md-12"> 
						<input  required type="text" name="city" placeholder="City" value="" class="form-control" id="inputCity" >
					</div>
				</div>
				<div class="form-group">
					<label for="inputCity" class="col-lg-2 col-md-12 control-label">Address :</label>
					<div class="col-lg-10 col-md-12"> 
						<input type="text" name="address" placeholder="Visitor's Address" value="" class="form-control" id="inputCity" >
					</div>
				</div>
				
				<div class="">
					<div class="col-12">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<?php include('livevideo.php'); ?>
							<button class="btn btn-info btn-sm btn-block" style="width:100%" type="button"
							value="Take Snapshot" onClick="take_snapshot()">Take Snapshot</button>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div id="results"></div>
							<input type="hidden" id="image_input" name="image">
						</div>
						<div class="col-lg-2 col-md-2">
							<?php include('qr.php'); $_SESSION['qr'] = $e; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-12 my-3"> 
					<button type="submit" name="submit"  class="btn btn-primary btn-block">Create Pass</button>
				</div>
			</div>
		</div>
	</form>

</body>
<script>
	function validateform() {
		var x = document.forms["myform"]["name1"].value;
		if (x == "") {
			alert("Name must be filled out");
			return false;
		}
	}
</script>

</html>