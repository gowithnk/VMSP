
<?php
include('dbconn.php');

$sql = "Select * from department";
$query = mysqli_query($db, $sql);
echo "<table id='dtDepD' class='table text-wrap table-bordered table-striped table-hover bg-white align-middle'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th> Department</th>";
echo "<th> Delete</th>";
echo "</tr>";
echo "</thead>";

while ($fetch = mysqli_fetch_array($query)) {
	echo "<tr>";
	echo "<td> $fetch[department_name]</td>";
	echo "<td> <a class='btn btn-danger' href='department_delete_1_0.php?id=$fetch[0]'>Delete</a></td>";
}
echo "</table>";
?>