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
            <li id="mainMenu3"><a href="profile.php">Profile</a></li>
            <li id="mainMenu4"><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li id="li1">
                    <a  onclick="toggle_visibility(1)"><span id="sp1">Course Year</span></a>
                </li>
                <li  id="li2">
                    <a  onclick="toggle_visibility(2)"><span id="sp2">Subject</span></a>
                </li>
                <li  id="li3">
                    <a  onclick="toggle_visibility(3)"><span id="sp3">Program Outcomes</span></a>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
						
						<div id="div1" style="display : none">
							<form>
								<h3>Set The Course Year<h3>
								<hr>
								<h4> from </h4>
								<input name="myDate" class="monthYearPicker" /><br>
								<h4> To </h4>
								<input name="myDate" class="monthYearPicker" />
								<br><br>
								<input type="submit" value="SUBMIT"/>
							</form>
						</div>
						
						<div id="div2" style="display : none">
														
							<form>
							<h3>Add Subject</h3>
								<hr>
								<div id="div2" style="width:50%">
								  <div class="form-group">
									<label >Academic Year</label>
									<input  class="form-control" placeholder="Year">
								  </div>
								  <div class="form-group">
									<label >Branch</label>
									<input  class="form-control"  placeholder="Branch">
								  </div>
								  <div class="form-group">
									<label >Subject Name</label>
									<input  class="form-control"  placeholder="Subject Name">
								  </div>
								  <div class="form-group">
									<label >Subject Code</label>
									<input  class="form-control"  placeholder="Subject Code">
								  </div>
								  <div class="form-group">
									<label for="exampleInputFile">Subject Image</label>
									<input type="file" id="exampleInputFile">
								  </div>
								  <button type="submit" class="btn btn-default">Submit</button>
							  </div>
							</form>
							
						</div>
						
						<div id="div3" style="display : none">
						<form>
							<h3>Add Program Outcomes</h3>
								<hr>
								<div id="div31" style="width:60%">
									<label style="width:15%">ID</label>
									<label >Name</label></br><br>
									
									<div id="divPo1">
										<input style="width:15%" id="poId1" placeholder="id"/>
										<input style="width:60%" id="poName1" placeholder="name"/>
										<input type="button" value="+" onclick="addPoDiv(1)" id="poButAdd1"/>
										
									</div>
									
								</div>
								<hr>
								<button type="submit" class="btn btn-default">Submit</button>
								
						</form>
						</div>
						
						
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<script type="text/javascript">
  
        

 </script>

  

</body>

</html>
