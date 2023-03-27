
	<script>
		function phoneno() {
			$('#phone').keypress(function(e) {
				var a = [];
				var k = e.which;

				for (i = 48; i < 58; i++)
					a.push(i);

				if (!(a.indexOf(k) >= 0))
					e.preventDefault();
			});
		}

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

	<form class="card p-3 needs-validation" action="emp_insert_1.php" method="post" novalidate>

		<div class="forn-inner">
			<h2 class="mb-3 mt-1">Employee Details</h2>
			<div class="admin_center">
				<div class="form-outline mb-3">
					<input class="form-control" type="text" onkeypress="return onlyAlphabets(event);" name="name" required>
					<label class="form-label" for="reason">Enter your Name</label>
				</div>				
				<div class="form-group mb-2">
					<label style="font-size: 18px;">Gender : </label>
					<input class="form-check-input" type="radio" name="gender" value="male" style="margin-left: 18px;" required>
					<label>Male</label>
					<input class="form-check-input" style=" margin-left:20px;" type="radio" name="gender" value="female" required>
					<label>Female</label>
				</div>
				<div class="form-outline mb-3">
					<input class="form-control" id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" 
					onkeypress="phoneno()" maxlength="10" name="phone" required>
					<label class="form-label" for="reason">Phone No</label>
				</div>
				<div class="form-outline mb-3">
				
					<input class="form-control" type="text" name="code" pattern="[0-9]{4}" maxlength="4" required>
					<div class="feedback invalid-feedback">
					Please enter a 4 digit number
					</div>
					<label class="form-label" for="reason">Employee Code</label>
					
				</div>
				<div class="form-outline mb-3">
					<input class="form-control" type="email" name="email" placeholder="abc.domain.com (E-Mail)" 
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
					<label class="form-label" for="reason">Email Address</label>
				</div>
				<div class="form-group">
					<select class="form-control" name="department" required>	
					<option value="">Select Department</option>
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
				<div class="form-group">
					<button class="btn btn-info btn-block btn-lg" type="submit" type="submit">Add New Employee</button>
					<!-- <input class="form-control submit btn-info" type="submit" value="Add New Employee" style="color:#ffffff !important;"> -->
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript" src="../assets//js/form-validation.js"></script>
