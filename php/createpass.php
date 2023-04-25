<?php
$phone1 = $_SESSION['phone'];

include('dbconn.php');
$sql = "Select * from inquery where Phone='$phone1'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>
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
<h2 class="mb-3" style="justify-content: center; text-align:center;">Create Pass</h2>
<form action="new.php" method="post" class="needs-validation row" novalidate>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input required type="text" name="name1" onkeypress="return onlyAlphabets(event);" placeholder="Visitors name..." class="form-control" id="inputName">
			<label class="form-label" for="inputName">Visitor Name</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input type="tel" name="phone" readonly placeholder="Phone No" value="<?php echo $phone1 ?>" class="form-control" id="inputphone">
			<label class="form-label" for="inputphone">Phone Number</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 mb-0">
		<div class="my-2">
			<label class="me-4 fw-bolder" for="gender">Gender</label>
			<input required type="radio" name="gender" value="male" class="form-check-input" id="gender">
			<label style="margin-left: 5px;">Male</label>
			<input style="margin-left: 5px;" type="radio" name="gender" class="form-check-input" value="female" id="gender">
			<label style="margin-left: 5px;">Female</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class=" mb-2">
			<select class=" form-control" name="person_meet_id" style="color: #000 !important;" id="inputHTM" required>
				<option value="">Please select whom to meet</option>
				<?php
				include('dbconn.php');
				$sql = "Select * from emp_table";
				$query = mysqli_query($db, $sql);
				while ($fetch = mysqli_fetch_array($query)) { ?>
					<option value="<?php echo $fetch[0] ?>"><?php echo $fetch[1] ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class=" mb-2">
			<select class="form-select" name="department" style="color: #000 !important;" id="dept" required>
				<option value="">Please Select Department</option>
				<?php
				include('dbconn.php');
				$sql = "Select * from department";
				$query = mysqli_query($db, $sql);
				while ($fetch = mysqli_fetch_array($query)) { ?>
					<option value="<?php echo $fetch[1] ?>"><?php echo $fetch[1] ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input type="email" name="v_email" placeholder="Visitors email..." value="" class="form-control" id="inputEmail">
			<label class="form-label" for="inputEmail">Visitors Email </label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input required type="text" name="company" placeholder="ABC Company" value="" class="form-control" id="inputCompany">
			<label class="form-label" for="inputCompany">Company from</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input required type="text" name="purpose" placeholder="Purpose" value="" class="form-control" id="inputPurpose">
			<label class="form-label" for="inputPurpose">Purpose </label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input required type="text" name="city" placeholder="Delhi" value="" class="form-control" id="inputCity">
			<label class="form-label" for="inputCity">City </label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="form-outline mb-2">
			<input type="text" name="address" placeholder="Visitor's Address" value="" class="form-control" id="inputCity">
			<label class="form-label" for="inputCity">Address </label>
		</div>
	</div>

	<div class="row g-1 p-2">
		<div class="col-lg-5 col-md-6 ">
			<?php include('livevideo.php'); ?>
			<div style="justify-content: center; text-align:center;">
				<button class="btn btn-info btn-sm mb-2" type="button" value="Take Snapshot" onClick="take_snapshot()">Take Snapshot</button>
			</div>
		</div>
		<div class="col-lg-5 col-md-6 col-sm-12">
			<div id="results"></div>
			<input style="width: 100% !important;" type="hidden" id="image_input" name="image">
		</div>
		<div class="col-lg-2 col-md-3">
			<?php include('qr.php');
			$_SESSION['qr'] = $e; ?>
		</div>
		<div class="col-lg-12">
		<!-- Submit button -->
			<button type="submit" onclick="validateform();" name="submit" class="btn btn-primary btn-block btn-lg my-3">Create Pass</button>
		</div>
	</div>
</form>
<script type="text/javascript" src="../assets/js/form-validation.js"></script>