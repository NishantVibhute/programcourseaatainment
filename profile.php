<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	 <script src="JS/global.js"></script>
	 
 <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
	 
	 
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="settingsidebar/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="settingsidebar/css/simple-sidebar.css" rel="stylesheet">
	<script src="JS/jquery.min.js"></script>
	<script src="JS/jquery-1.10.2.js"></script>
	<script src="JS/jquery-ui.js"></script>
	
		<link href="CSS/global.css" rel="stylesheet">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="margin-top:50px !important">

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li id="mainMenu1"><a  href="subjectdashboard.php">Dashboard</a></li>
            <li id="mainMenu2"><a href="settings.php">Settings</a></li>
            <li id="mainMenu3"><a href="#">Profile</a></li>
            <li id="mainMenu4"><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div id="wrapper">

        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        						
						<div id="div2" style="display : block">
														
							<form>
							<h3>My Profile</h3>
								<hr>
								<div id="div2" style="width:50%">
								  <div class="form-group">
									<label >Name</label>
									<input  class="form-control" >
								  </div>
								  <div class="form-group">
									<label >User ID</label>
									<input  class="form-control" >
								  </div>
								  <div class="form-group">
									<label >Old Password</label>
									<input type="password"  class="form-control"  placeholder="Old Password">
								  </div>
								  <div class="form-group">
									<label >New Password</label>
									<input type="password"  class="form-control"  placeholder="New Password">
								  </div>
								  <div class="form-group">
									<label >Retype Password</label>
									<input type="password"   class="form-control"  placeholder="Retype Password">
								  </div>
								  <button type="submit" class="btn btn-default">Submit</button>
							  </div>
							</form>
							
						</div>
						
											
						
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
