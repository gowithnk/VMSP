<script type="text/javascript">
	function print11() {
		window.print();
	}
</script>

<?php
include('dbconn.php');

$sql = "Select * from department";
$query = mysqli_query($db, $sql);
echo "<table class='table table-bordered' align='center'>";
// echo "<tr>";
// echo "<th> Department</th>";
// echo "</tr>";

while ($fetch = mysqli_fetch_array($query)) {
	echo "<tr>";
	echo "<td> $fetch[department_name]</td>";
}
echo "</table>";
?>