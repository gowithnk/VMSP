
	<?php
	include('dbconn.php');

	$sql = "Select * from login_user order by name";
	$query = mysqli_query($db, $sql);
	
	echo "<table id='dtAdmin' class='table text-wrap table-bordered table-striped table-hover bg-white align-middle'>";
	echo "<thead class='table-dark'>";
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
	echo "</thead>";

	while ($fetch = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[username]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[password]</td>";
		echo "<td> $fetch[user]</td>";
		echo "<td> <img src='../images/$fetch[image]' width='100' height='100'</td>";
		echo "<td> <a class='btn btn-danger' href='admin_delete_1.php?id=$fetch[0]'><i class='fa-solid fa-trash-can'></i></a></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>

<script type="text/javascript">
	function print11() {
		w = document.getElementById('p2');
		w.style.display = 'none';
		window.print();
		w.style.display = 'block';

	}
</script>