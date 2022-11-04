<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Insert Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
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
	<style type="text/css">
		body {
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0px;

		}
	</style>
</head>

<body>
	<form class="form-horizontal" action="admin_user_insert_0.php" method="post" enctype="multipart/form-data">
		<div class="admin_transparent">
			<div class="admin_main">
				<h2 class="text-center">Admin Account</h2>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label for="adminUser" class="col-sm-3 control-label">Admin User Name :</label>
							<div class="col-sm-9">
								<input id="adminUser" class="form-control" type="text" name="username" placeholder="Enter admin user name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="adminName" class="col-sm-3 control-label">Admin Name :</label>
							<div class="col-sm-9">
								<input id="adminName" class="form-control" type="text" name="name" onkeypress="return onlyAlphabets(event);" placeholder="Enter Admin Name" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gender :</label>
							<div class="col-sm-9">
								<input type="radio" name="gender" value="Male">
								<label style="font-size: 18px; color: white;margin-right: 15px;">Male</label>
								<input type="radio" name="gender" value="Female">
								<label style="font-size: 18px; color: white;">Female</label>
							</div>
						</div>
						<div class="form-group">
							<label for="Password" class="col-sm-3 control-label">Password :</label>
							<div class="col-sm-9">
								<input id="Password" class="form-control" type="password" name="password" placeholder="Enter Password" required >
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-sm-3 control-label">Phone No. :</label>
							<div class="col-sm-9">
								<input class="form-control" id="phone" type="text" pattern="\d{10}" title="Please enter exactly 10 digits" onkeypress="phoneno()" 
								maxlength="10" name="phone" placeholder="Enter Phone No" required >
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label">User Role :</label>
							<div class="col-sm-9">
								<select class="form-control" name="user" >
									<option value="admin">Admin</option>
									<option value="guard">Guard</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Profile Image :</label>
							<div class="col-sm-9">
								<input type="file" name="image" id="file-7" accept="image/*" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
								<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
								<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
								</svg> Choose a file&hellip;</strong></label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3"></div>
							<div class="col-sm-9">
								<input class="btn btn-info" type="submit" value="Add New User" style="padding: 8px 30px; width:100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="../javascript/custom-file-input.js"></script>

</body>

</html>