<?php
include('dbconn.php');

$sql = "SELECT * FROM material_pass order by id DESC";
$query = mysqli_query($db, $sql);
echo "<div class='table-responsive mt-2'>";  
echo "<table style='width:100% !important;' id='dtMaterial' class='table text-wrap align-middle mb-0 bg-white table-bordered table-hover table-striped'>";
echo "<thead class='table-dark'>";
echo "<tr>";
echo "<th> Id</th>";
echo "<th> Material Pass</th>";
echo "<th> Material Type</th>";
echo "<th> Challan Type</th>";
echo "<th> Purpose</th>";
echo "<th> Person Name</th>";
echo "<th> Company Name</th>";
echo "<th> Address</th>";
echo "<th> Employee Name</th>";
echo "<th> Approved By</th>";
echo "<th> Date</th>";
echo "<th> Out Time</th>";
echo "<th> Actions</th>";
echo "</tr>";
echo "</thead>";
echo "</tbody>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td> $row[id]</td>";
    echo "<td> $row[MaterialPass]</td>";
    echo "<td> $row[ItemCategory]</td>";
    echo "<td> $row[ReturnType]</td>";
    echo "<td> $row[Reason]</td>";
    echo "<td> $row[PersonName]</td>";
    echo "<td> $row[CompanyName]</td>";
    echo "<td> $row[ToLocation]</td>";
    echo "<td> $row[EmpId]</td>";
    echo "<td> $row[ApprovedBy]</td>";
    echo "<td> $row[Date]</td>";
    echo "<td> $row[OutTime]</td>";
    echo "<td> 
    <a class='btn btn-info' href='material_all_print_pdf.php?id=$row[0]' target='_blank'><i class='fa-regular fa-eye'></i></a>
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