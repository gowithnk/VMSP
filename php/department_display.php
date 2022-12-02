
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
	echo "<td> <a class='btn btn-danger deleteID' href='department_delete_1_0.php?id=$fetch[0]'><i class='fa-solid fa-trash-can'></i></a></td>";
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