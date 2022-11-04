<head>
	<title>Admin User</title>

	<style>
		body {
			text-align: center;
			background-size: cover;
			background-repeat: no-repeat;
		}

	</style>
</head>

<body>
	<?php
	include('dbconn.php');

	$sql = "Select * from login_user order by name";
	$query = mysqli_query($db, $sql);
	
	echo "<table class='table table-bordered'>";
	echo "<tr>";
	echo "<th> Name</th>";
	echo "<th> Username</th>";
	echo "<th> Gender</th>";
	echo "<th> Phone</th>";
	echo "<th> Password</th>";
	echo "<th> User Type</th>";
	echo "<th> Image</th>";
	echo "</tr>";

	while ($fetch = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[username]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[password]</td>";
		echo "<td> $fetch[user]</td>";
		echo "<td> <img src='../images/$fetch[image]' width='100' height='100'</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<form action="../index_1.php">
		<!--<input type="button" id="p2" value="Print" onclick="print11()">
<input type="submit" value="Back">  -->
	</form>
</body>
<script type="text/javascript">
	function print11() {
		w = document.getElementById('p2');
		w.style.display = 'none';
		window.print();
		w.style.display = 'block';

	}
</script>