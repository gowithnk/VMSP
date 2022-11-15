
<div class="table-responsive">
	<?php
	include('dbconn.php');
	$from = $_POST['from'];
	$to = $_POST['to'];
	$sql = "Select * from inquery where Date between '$from' and '$to'";
	$query = mysqli_query($db, $sql);
	echo "<table id='dt' align='center' class='table table-hover text-nowrap table-bordered'>";
	echo "<thead class='table-dark'>";
	echo "<tr>";
	echo "<th> Print</th>";
	echo "<th> Name</th>";
	echo "<th> Gender</th>";
	echo "<th> Phone</th>";
	echo "<th> Email</th>";
	echo "<th> Company</th>";
	echo "<th> Purpose</th>";
	echo "<th> City</th>";
	echo "<th> Address</th>";
	echo "<th> Image</th>";
	echo "<th> Person Meet</th>";
	echo "<th> Department</th>";
	echo "<th> In Time</th>";
	echo "<th> Out Time</th>";
	echo "<th> Date</th>";
	echo "</tr>";
	echo "</thead>";


	while ($fetch = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td> <a class='btn btn-warning' target='_blank' href='print_passes.php?id=$fetch[0]'><i class='fa-solid fa-print'></i></a></td>";
		echo "<td> $fetch[Name]</td>";
		echo "<td> $fetch[Gender]</td>";
		echo "<td> $fetch[Phone]</td>";
		echo "<td> $fetch[Vemail]</td>";
		echo "<td> $fetch[Company]</td>";
		echo "<td> $fetch[Purpose]</td>";
		echo "<td> $fetch[City]</td>";
		echo "<td> $fetch[Address]</td>";
		echo "<td> <img src='$fetch[Image]' width='50' height='45'</td>";
		echo "<td> $fetch[Person_Meet]</td>";
		echo "<td> $fetch[Department]</td>";
		echo "<td> $fetch[In_Time]</td>";
		echo "<td> $fetch[Out_Time]</td>";
		echo "<td> $fetch[Date]</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</div>
