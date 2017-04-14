<?php require_once 'core.php'; ?>

<!DOCTYPE html >
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/adminPanel.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<div class="col-lg-12 col-xs-12" id="header">
    <img src="assets/images/a5mmslogo.png" id="img"></img>

      <div id="username">
        <img src="assets/images/adminicon.png" class="img-circle"></img>
        <small>Welcome Admin</small>
        <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Logout </a>
      </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logout</h4>
              </div>

              <div class="modal-body">
                <p>Are you sure to logout?</p>
              </div>

              <div class="modal-footer">
                <a class="btn btn-primary" href="logout.php" >Logout</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>

            </div>
          </div>
        </div>
  </div>

<div class="col-lg-4" id="menu">
  <ul>
          <li><a href="viewClient.php"><img src="assets/images/client.png"></img> CLIENTS</a></li>
          <li><a href="viewJob.php"><img src="assets/images/jobs.png"></img> JOBS</a></li>
          <li><a href="viewApp.php"><img src="assets/images/employee.png"></img> APPLICANTS</a></li>
          <li><a href="viewAnnounce.php"><img src="assets/images/announcement.png"></img> ANNOUNCEMENTS</a></li>
        </ul> 
</div>

</body>
</html>
