
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

	<form class="card p-3" action="emp_insert_1.php" method="post">

		<div class="forn-inner">
			<span style="font-size: 32px;">Employee Details</span>
			<div class="admin_center">
				<div class="form-group">
					<input class="form-control" type="text" onkeypress="return onlyAlphabets(event);" name="name" placeholder="Enter your Name" required>
				</div>				
				<div class="form-group">
					<label style="font-size: 18px;">Gender : </label>
					<input type="radio" name="gender" value="Male" style="margin-left: 18px;">
					<label>Male</label>
					<input style=" margin-left:20px;" type="radio" name="gender" value="Female">
					<label>Female</label>
				</div>
				<div class="form-group">
					<input class="form-control" id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" 
					name="phone" placeholder="Phone No" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="code" placeholder="Employee Code" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="email" name="email" placeholder="abc.domain.com (E-Mail)" required>
				</div>
				<div class="form-group">
					<select class="form-control" name="department">	
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
