<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
  
<form class="form-horizontal" action="report_display.php" method="post">
  <h2 class="text-center">Report</h2>
  <div class="row">
    <div class="form-outline mb-4">
      <input class="form-control" type="text" name="from" id="datepicker" placeholder="From" required>
      <label for="datepicker" class="form-label">Date From :</label>
    </div>
    <div class="form-outline mb-4">
      <input class="form-control" type="text" name="to" id="datepicker1" placeholder="To" required>
      <label for="datepicker1" class="form-label">Date To :</label>
    </div>
    <button class="btn btn-info btn-block btn-lg" type="submit">View Report</button>
  </div>
</form>

<script>
  $("#datepicker").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: -180,
    maxDate: 0,
  });

  $("#datepicker1").datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: -179,
    maxDate: 0,
  });
</script>