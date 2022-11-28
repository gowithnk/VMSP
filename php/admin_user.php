<script>
	(function(e, t, n) {
		var r = e.querySelectorAll("html")[0];
		r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
	})(document, window, 0);
</script>
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
<form class="row g-3 needs-validation" action="admin_user_insert.php" method="post" enctype="multipart/form-data">
	<h2 class="text-center">Admin Account</h2>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-outline">
			<input id="adminUser" name="username" type="text" class="form-control" required />
			<label for="adminUser" class="form-label">Admin Username</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-outline">
			<input id="adminName" name="name" type="text" onkeypress="return onlyAlphabets(event);" class="form-control" required />
			<label for="adminName" class="form-label">Admin Name</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-outline">
			<input id="Password" name="password" type="password" class="form-control" required />
			<label for="Password" class="form-label">Password</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="d-md-flex justify-content-start align-items-center">
			<label class="me-4 mb-0 control-label">Gender: </label>
			<div class="form-check form-check-inline mb-0 pl-1">
				<input class="mb-0" type="radio" name="gender" id="femaleGender" value="Male" required />
				<label class="form-check-label" for="femaleGender">Male</label>
			</div>
			<div class="form-check form-check-inline mb-0 pl-1">
				<input class="mb-0" type="radio" name="gender" id="maleGender" value="Female" required />
				<label class="form-check-label" for="maleGender">Female</label>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="form-outline">
			<input id="phone" name="phone" type="tel" pattern="\d{10}" onkeypress="phoneno()" maxlength="10" class="form-control" required />
			<label for="phone" class="form-label">Phone No.</label>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		<select class="form-control" name="user" required>
			<option class="select-label" value="">User Role</option>
			<option class="select-label" value="admin">Admin</option>
			<option class="select-label" value="guard">Guard</option>
		</select>
	</div>
	<div class="col-lg-12">
		<div class="d-md-flex justify-content-start align-items-center">
			<label for="file" class=" control-label text-nowrap me-4">Profile Image  </label>
			<div class="w-100">
				<input type="file" name="image" id="file" accept="image/*" class="form-control" class="form-control" />
			</div>
		</div>	
	</div>
	<!-- <div class="form-group">
		<label for="file" class="col-lg-2 col-md-4 col-sm-12 control-label">Profile Image :</label>
		<div class="col-lg-10 col-md-8">
			<input required type="file" name="image" id="file" accept="image/*" class="form-control" 
			data-multiple-caption="{count} files selected" multiple class="form-control form-control-lg" />
		</div>
	</div> -->
		<div class="col-lg-12">
			<button class="btn btn-primary btn-block btn-lg" name="submit" type="submit">Add New User</button>
		</div>
</form>
<script src="../javascript/custom-file-input.js"></script>