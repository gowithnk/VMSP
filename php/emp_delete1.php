
	<?php
	include('dbconn.php');

	$sql = "Select * from emp_table";
	$query = mysqli_query($db, $sql);
	echo "<table id='dtEmpD' align='center' class='table text-wrap table-bordered table-striped table-hover bg-white align-middle'>";
	echo "<thead class='table-dark'>";
	echo "<tr>";
	echo "<th> Name</th>";
	echo "<th> Gender</th>";
	echo "<th> Employee Code</th>";
	echo "<th> Phone</th>";
	echo "<th> E-mail</th>";
	echo "<th> Department</th>";
	echo "<th> Delete</th>";
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
		echo "<td> <a id='del' class='btn btn-danger' href='emp_delete2.php?id=$fetch[0]'>Delet</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>