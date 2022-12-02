<?php
include('dbconn.php');

$sql = "Select * from emp_table order by name";
$query = mysqli_query($db, $sql);
echo "<div class='table-responsive'>";
echo "<table style='width:100%;' id='dtEmp' class='table text-wrap align-middle mb-0 bg-white table-bordered table-hover table-striped'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th> Name</th>";
echo "<th> Gender</th>";
echo "<th> Emp. Code</th>";
echo "<th> Phone</th>";
echo "<th> E-mail</th>";
echo "<th> Department</th>";
echo "<th> Actions</th>";
echo "</tr>";
echo "</thead>";
echo "</tbody>";

while ($fetch = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td> $fetch[name]</td>";
    echo "<td> $fetch[gender]</td>";
    echo "<td> $fetch[code]</td>";
    echo "<td> $fetch[phone]</td>";
    echo "<td> $fetch[email_id]</td>";
    echo "<td> $fetch[department_name]</td>";
    echo "<td> 
    <a class='btn btn-warning' href='emp_edit2_0.php?id=$fetch[0]'><i class='fa-solid fa-pen-to-square'></i></a>
    <a class='btn btn-danger deleteID' href='emp_delete2.php?id=$fetch[0]'><i class='fa-solid fa-trash-can'></i></a>
    </td>";

    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

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