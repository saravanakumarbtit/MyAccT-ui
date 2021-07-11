<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--JQuery 3.5.1-->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="./jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="dashboard.js"></script>
  <title>MyAccTrac-Dashboard</title>
</head>
<body>
<div class="container">
<div class="row">
</div>
<div class="row">
  <div class="col s6">
    Photo if needed
  </div>
  <div class="col s6">
    <span id="dashboard-email-id"></span>
  </div>
</div>
<div class="row">
  <div class="col s3">
    <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary" id="add-new-app-btn">Add new App</button>
  </div>
  <div class="col s9">
    <label for="tracker-list" class="form-label">List of Applications Added</label>
    <table id="tracker-list" class="highlight">
        <thead>
        <th>AppName</th>
        <th>Subscribed For</th>
        <th>From Date</th>
        <th>To Date</th>
      </thead>
    </table>
  </div>
</div>

    <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <input type="hidden" id="tracker-mailId"/>
              <input type="hidden" id="tracker-id"/>
              <div class="input-field" id="checking">
                <label for="type-of-subscription">Type of Subscription</label>
                <select class="form-select" aria-label="Default select example" name="typeOfSubscription" id="type-of-subscription">
                </select>
              </div>
              <div class="input-field">
                <label for="app-name">App Name</label>
                <select class="form-select" aria-label="Default select example" name="appName" id="app-name">
                </select>
              </div>
              <div class="input-field">
                <label for="from-date">From Date</label>
                <input type="date" class="datepicker" id="from-date"/>
              </div>
              <div class="input-field">
                <label for="to-date">To Date</label>
                <input type="date" class="datepicker" id="to-date" />
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</body>
<style>
.single-row:hover {
  background-color: #ffff99;
}
</style>
</html>
<?php ?>
