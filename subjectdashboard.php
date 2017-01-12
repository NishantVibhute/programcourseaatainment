<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Dashboard</title>
		<meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="AnimationBooks/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="AnimationBooks/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="AnimationBooks/css/book.css" />
		<script src="AnimationBooks/js/modernizr.custom.js"></script>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
	<script>
		function redirect (val)
		{
			document.getElementById("subjectForm").method="POST";
			document.getElementById("subjectForm").action = "dashboard.php?subId="+val;
			document.getElementById("subjectForm").submit();
			
		}
	
	</script>
	
	
	</head>
	
	<body>
	<?php
		$server_path="POA/";
		require 'dbconnection.php';
		session_start();
		if(empty($_SESSION["username"]))
		{ 
			header('Location: signin.php'); 
		}
		else{
			$userName = $_SESSION["username"];
		}
	?>
	
	
	
	<!--header-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $userName;?></a>
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
	<!--header-->
		<form id="subjectForm" >
		<div class="container">
			<!-- Top Navigation -->
			
			<div class="component">

				<ul class="align">
				
					<?php
						$conn = connectdb();
						
						$sql = "SELECT id,sub_name,sub_code,sub_image_path FROM m_subject WHERE br_id=1";
						$result = $conn->query($sql);
						
						
							if ($result->num_rows > 0) {
						// output data of each row
						
								while($row = $result->fetch_assoc()) {
									$cars = array(
										array($row["id"],$row["sub_name"],$row["sub_code"],$row["sub_image_path"]),
									);?>
									
									<li>
						<figure class='book'>

						<!-- Front -->

							<ul class='hardcover_front'>
								<li>
									<img src="<?php echo $server_path.$row["sub_image_path"] ?>" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

						<!-- Pages -->

							<ul class='page'>
								<li></li>
								<li>
									<a class="btn" onclick="redirect(<?php echo $row["id"] ?>)">VIEW</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

						<!-- Back -->

							<ul class='hardcover_back'>
								<li></li>
								<li></li>
							</ul>
							<ul class='book_spine'>
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1><?php echo $row["sub_name"] ?></h1>
								
								<h3><span><?php echo $row["sub_code"] ?><span></h3>
							</figcaption>
						</figure>
					</li>
									
									
								<?php	
								}
									
						} else {
					   $Error = "Invalid User ID";
						}
					

						closeConnection($conn);
					
					?>
				
					
				</ul>
				
			</div>
		</div><!-- /container -->
		</form>
	</body>
</html>