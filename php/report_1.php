<!DOCTYPE html>
<html>

<head>
  <title>Report</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

</head>

<body>
  <form class="form-horizontal" action="report_display.php" method="post">
      <h2 class="text-center">Report</h2><br>
      <div class="row">
          <div class="form-group">
            <label for="datepicker" class="col-sm-2 control-label">Date From :</label>
            <div class="col-sm-10"> 
             <input class="form-control" type="text" name="from" id="datepicker" placeholder="From" required >
            </div>
          </div>
          <div class="form-group">
            <label for="datepicker1" class="col-sm-2 control-label">Date To :</label>
            <div class="col-sm-10"> 
              <input class="form-control" type="text" name="to" id="datepicker1" placeholder="To" required > 
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10"> 
              <input class="btn btn-info btn-block" type="submit" value="View Report">
            </div>
          </div>
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
</body>
</html>
