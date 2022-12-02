<?php
include('dbconn.php');
$id = $_GET['id'];
$_SESSION['id'] = $id;
$sql = "Select * from emp_table where id='$id'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>

<form action="emp_update.php" method="post" class="needs-validation" novalidate>
	<h2 class="ml-2 mt-2">Edit Employee Details</h2>
		<div class="row">
			<div class="col-12 py-1 px-4">
				<div class="form-outline mb-3">
					<input class="form-control" type="text" id="name" name="name" value="<?php echo $fetch[1]; ?>" required>
					<label class="form-label" for="name">Enter New Name</label>
				</div>
				<div class="form-group">
					<label class="me-2 mb-0">Gender : </label>
					<input <?php if ($fetch[3] == "Male") { echo "checked"; } ?> 
					type="radio" name="gender" class="me-1" value="Male">
					<label class="mb-0 me-3">Male</label>
					<input <?php if ($fetch[3] == "Female") { echo "checked"; } ?> 
					type="radio" class="me-1" name="gender" value="Female">
					<label class="mb-0">Female</label>
				</div>
				
				<div class="form-outline mb-3">
					<input class="form-control" type="text" id="phone" name="phone" value="<?php echo $fetch[2]; ?>" required>
					<label class="form-label" for="phone">New Phone No</label>
				</div>
				<div class="form-outline mb-3">
					<input class="form-control" type="text" name="code" value="<?php echo $fetch[4]; ?>" required>
					<label class="form-label" for="phone">Employee Code</label>
				</div>
				<div class="form-outline mb-3">
					<input class="form-control" type="email" name="email" placeholder="abc.domain.com(E-Mail)" 
					value="<?php echo $fetch[5]; ?>" required>
					<label class="form-label" for="phone">Email Address</label>
				</div>
				<div class="form-group">
						<select class="form-control" name="department" value="<?php echo $fetch[6]; ?>" id="inputDepartment" required>
						<option selected value="">Select Department</option>
							<?php
							include('dbconn.php');

							$sql = "Select * from department";
							$query = mysqli_query($db, $sql);

							if (!empty($fetch[6])) { ?>
								<option selected value="<?php echo $fetch[6] ?>"><?php echo $fetch[6] ?></option>
							<?php  } ?>
							<?php
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row[1] ?>"><?php echo $row[1] ?></option>

							<?php } ?>
						</select>
				</div>
				<button class="btn btn-info btn-block btn-lg mb-3" type="submit">Update</button>
			</div>
		</div>
</form>
<script type="text/javascript" src="../assets/js/form-validation.js"></script>