<?php
include('dbconn.php');

$per_page_record = 7;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}
//determine the sql LIMIT starting number for the results on the displaying page  
$start_from = ($page - 1) * $per_page_record;

$sql = "Select * from emp_table order by name LIMIT $start_from, $per_page_record";
$query = mysqli_query($db, $sql);
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered'>";
echo "<tr>";
// echo "<th> S. No.</th>";
echo "<th> Name</th>";
echo "<th> Gender</th>";
echo "<th> Emp. Code</th>";
echo "<th> Phone</th>";
echo "<th> E-mail</th>";
echo "<th> Department</th>";
echo "</tr>";

// $count = 1;
while ($fetch = mysqli_fetch_array($query)) {
    echo "<tr>";
    // echo "<td>$count</td>";
    echo "<td> $fetch[name]</td>";
    echo "<td> $fetch[gender]</td>";
    echo "<td> $fetch[code]</td>";
    echo "<td> $fetch[phone]</td>";
    echo "<td> $fetch[email_id]</td>";
    echo "<td> $fetch[department_name]</td>";
    echo "</tr>";
    // $count++;
}
echo "</table>";
echo "</div>";

?>
<div class="pagination">
    <?php
    include('dbconn.php');
    $query = "SELECT COUNT(*) FROM emp_table";
    $rs_result = mysqli_query($db, $query);
    $row = mysqli_fetch_row($rs_result);
    $total_records = $row[0];

    // Number of pages required.   
    $total_pages = ceil($total_records / $per_page_record);
    $pagLink = "";

    if ($page >= 2) {
        echo "<a href='emp_display_0.php?page=" . ($page - 1) . "'>  Prev </a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            $pagLink .= "<a class = 'active' href='emp_display_0.php?page="
                . $i . "'>" . $i . " </a>";
        } else {
            $pagLink .= "<a href='emp_display_0.php?page=" . $i . "'>   
                                                " . $i . " </a>";
        }
    };
    echo $pagLink;

    if ($page < $total_pages) {
        echo "<a href='emp_display_0.php?page=" . ($page + 1) . "'>  Next </a>";
    }

    ?>
</div>

<script>
    function go2Page() {
        var page = document.getElementById("page").value;
        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
        window.location.href = 'emp_display_0.php?page=' + page;
    }
</script>
<script type="text/javascript">
    function print12() {
        w = document.getElementById('p3');
        w.style.display = 'none';
        window.print();
        w.style.display = 'block';

    }
</script>