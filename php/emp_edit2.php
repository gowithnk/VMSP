<?php
include('dbconn.php');
$id = $_GET['id'];
$_SESSION['id'] = $id;
$sql = "Select * from emp_table where id='$id'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>

<form action="emp_update.php" method="post">
	<h2 class="ml-2">Edit Employee Details</h1><br>
		<div class="row">
			<div class="col-12 py-1 px-4">
				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="Enter New Name" value="<?php echo $fetch[1]; ?>" required>
				</div>
				<div class="form-group">
					<label style="font-size: 18px;">Gender : </label>
					<input <?php if ($fetch[3] == "Male") {
								echo "checked";
							} ?> type="radio" name="gender" value="Male" style="margin-left: 18px;">
					<label style="font-size: 16px;">Male</label>
					<input <?php if ($fetch[3] == "Female") {
								echo "checked";
							} ?> type="radio" name="gender" value="Female" style="margin-left: 10px;">
					<label style="font-size: 16px;">Female</label>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="phone" placeholder="New Phone No" value="<?php echo $fetch[2]; ?>" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="code" placeholder="Employee Code" value="<?php echo $fetch[4]; ?>" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="email" name="email" placeholder="abc.domain.com(E-Mail)" value="<?php echo $fetch[5]; ?>" required>
				</div>
				<div class="form-group">
					<label for="inputDepartment" class="col-sm-3 control-label">Department :</label>
					<div class="col-sm-9">
						<select class="form-control" name="department" value="<?php echo $fetch[6]; ?>" style="color: #000 !important;" id="inputDepartment">
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
				</div>
			</div>
			<div class="col-12 my-3 px-4">
				<button class="btn btn-info btn-block mb-3" type="submit">Update</button>
			</div>
		</div>
</form>