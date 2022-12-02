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
	echo "<td> <a class='btn btn-danger deleteID' href='admin_delete_1.php?id=$fetch[0]'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
?>

<script type="text/javascript">
	// confirm delete data
	jQuery(document).ready(function() {
		jQuery(".deleteID").click(function() {
			if (!confirm('Are you sure you want to delete this record?')) {
				return false;
			}
		});
	});
</script>