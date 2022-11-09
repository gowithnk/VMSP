
	<?php
	include('dbconn.php');

	$sql = "Select * from inquery";
	$query = mysqli_query($db, $sql);
	$fetch = mysqli_fetch_array($query);

	$sql = "SELECT * FROM inquery WHERE Out_Time IS NULL OR Out_Time = '' ";
	if ($result = mysqli_query($db, $sql)) {
		// Return the number of rows in result set
		$rowcount = mysqli_num_rows($result);
		// Display result

	}

	if (!empty($rowcount == 0)) {
		echo '<div class="main"><h2 style="color:red;">No Active Visitors</h2>';
	} else {
		echo '<div class="main"><h2 style="color:#ffffff;">Active Visitors</h2>';
	}

	echo "<table class='table  table-condensed table-bordered'>";
	if (empty($rowcount == 0)) {
		echo "<tr>";
		echo "<th> Visitor Name</th>";
		echo "<th> Phone</th>";
		echo "<th> Log Out (Exit)</th>";
		echo "</tr>";
	}

	while ($fetch = mysqli_fetch_array($query)) {
		echo "<tr>";
		if (empty($fetch[8])) {
			echo "<td> $fetch[Name] </td>";
			echo "<td> $fetch[Phone] </td>";
			echo "<td> <a class='btn btn-warning' href='checkout_0.php?phone=$fetch[3]'> Check Out</a> </td>";
		}
	}
	echo "</tr>";
	echo "</table>";
	echo "<br><br></div>";
	?>