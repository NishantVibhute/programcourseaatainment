<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
<script src="JS/global.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <?php
  
		$subId = $_REQUEST["subId"];
  
		session_start();
		if(empty($_SESSION["username"]))
		{ 
			header('Location: signin.php'); 
		}
		else{
			$userName = $_SESSION["username"];
		}
	?>

	
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $userName ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="mainMenu1"><a  href="subjectdashboard.php">Dashboard</a></li>
            <li id="mainMenu2"><a href="settings.php">Settings</a></li>
            <li id="mainMenu3"><a href="profile.php">Profile</a></li>
            <li id="mainMenu4"><a href="logout.php">Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li id="liMainMenu1" class="active"><a  onclick="toggle_visibility_dashboard(1)" >Overview <span class="sr-only">(current)</span></a></li>
            <li id="liMainMenu2"><a onclick="toggle_visibility_dashboard(2)">Upload</a></li>
            <li id="liMainMenu3"><a onclick="toggle_visibility_dashboard(3)">Course Outcomes</a></li>
            <li id="liMainMenu4"><a onclick="toggle_visibility_dashboard(4)">Export</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div id="dashboardContainer1" style="display : block">
				<?php include 'overview.php'; ?>
			</div>
			<div id="dashboardContainer2" style="display : none">
				<?php include 'upload.php'; ?>
			</div>
			<div id="dashboardContainer3" style="display : none">
			
			
			</div>
			<div id="dashboardContainer4" style="display : none">
				
			</div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="UploadForm/assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="UploadForm/assets/js/jquery.ui.widget.js"></script>
		<script src="UploadForm/assets/js/jquery.iframe-transport.js"></script>
		<script src="UploadForm/assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="UploadForm/assets/js/script.js"></script>
	
  </body>
</html>
