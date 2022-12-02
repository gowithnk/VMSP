<?php
include('dbconn.php');

$sql = "SELECT * FROM material_pass order by id DESC";
$query = mysqli_query($db, $sql);
echo "<div class='table-responsive'>";  
echo "<table style='width:1000px !important;' id='dtMaterial' class='table text-wrap align-middle mb-0 bg-white table-bordered table-hover table-striped'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th> From Location</th>";
echo "<th> To Location</th>";
echo "<th> Department</th>";
echo "<th> Item Category</th>";
echo "<th> Item Description</th>";
echo "<th> Quantity</th>";
echo "<th> Reason</th>";
echo "<th> Amount</th>";
echo "<th> Pass Type</th>";
echo "<th> Remark</th>";
echo "<th> Date</th>";
echo "<th> Out Time</th>";
echo "<th> In Time</th>";
echo "<th> Actions</th>";
echo "</tr>";
echo "</thead>";
echo "</tbody>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td> $row[FromLocation]</td>";
    echo "<td> $row[ToLocation]</td>";
    echo "<td> $row[Department]</td>";
    echo "<td> $row[ItemCategory]</td>";
    echo "<td> $row[ItemDescription]</td>";
    echo "<td> $row[ItemQuantity]</td>";
    echo "<td> $row[Reason]</td>";
    echo "<td> $row[Amount]</td>";
    echo "<td> $row[PassType]</td>";
    echo "<td> $row[Remark]</td>";
    echo "<td> $row[Date]</td>";
    echo "<td> $row[OutTime]</td>";
    echo "<td> $row[InTime]</td>";
    echo "<td> 
    <a class='btn btn-warning' href='emp_edit2_0.php?id=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a>
    <a class='btn btn-danger deleteIDM' href='material_delete.php?id=$row[0]'><i class='fa-solid fa-trash-can'></i></a>
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
        jQuery(".deleteIDM").click(function() {
            if (!confirm('Are you sure you want to delete this record?')) {
                return false;
            }
        });
    });
</script>