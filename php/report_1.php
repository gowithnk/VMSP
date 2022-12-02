
<form class="form-horizontal" action="report_display.php" method="post">
  <h2 class="text-center">Report</h2>
  <div class="row">
    <div class="form-outline mb-4">
      <input class="form-control" type="date" name="from" id="datepicker" placeholder="From" required>
      <label for="datepicker" class="form-label">Date From :</label>
    </div>
    <div class="form-outline mb-4">
      <input class="form-control" type="date" name="to" id="datepicker1" placeholder="To" required>
      <label for="datepicker1" class="form-label">Date To :</label>
    </div>
    <button class="btn btn-info btn-block btn-lg" type="submit">View Report</button>
  </div>
</form>

<script>
datepicker.max = new Date().toISOString().split("T")[0];
datepicker1.max = new Date().toISOString().split("T")[0];
</script>