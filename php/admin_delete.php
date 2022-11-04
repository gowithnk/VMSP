
	<?php
	include('dbconn.php');

	$sql = "Select * from login_user";
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
	echo "<th> Delete</th>";
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
		echo "<td> <a class='btn btn-danger' href='admin_delete_1.php?id=$fetch[0]'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<form action="../index_1.php">
		<!--
<input type="button" id="p3" value="Print" onclick="print12()">
<input type="submit" value="Back"> -->
	</form>
	<script type="text/javascript">
		function print12() {
			w = document.getElementById('p3');
			w.style.display = 'none';
			window.print();
			w.style.display = 'block';

		}
	</script>
