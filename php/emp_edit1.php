
	<?php
	include('dbconn.php');

	$sql = "Select * from emp_table";
	$query = mysqli_query($db, $sql);
	echo "<table id='dtEmpE' class='table text-wrap align-middle mb-0 bg-white table-bordered table-hover table-striped''>";
	echo "<thead class='table-dark'>";
	echo "<tr>";
	echo "<th> Name</th>";
	echo "<th> Gender</th>";
	echo "<th> Emp. Code</th>";
	echo "<th> Phone</th>";
	echo "<th> E-mail</th>";
	echo "<th> Department</th>";
	echo "<th> Edit</th>";
	echo "</tr>";
	echo "</thead>";


	while ($fetch = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td> $fetch[name]</td>";
		echo "<td> $fetch[gender]</td>";
		echo "<td> $fetch[code]</td>";
		echo "<td> $fetch[phone]</td>";
		echo "<td> $fetch[email_id]</td>";
		echo "<td> $fetch[department_name]</td>";
		echo "<td> <a class='btn btn-warning' href='emp_edit2_0.php?id=$fetch[0]'>Edit</a></td>";

		echo "</tr>";
	}
	echo "</table>";
	?>