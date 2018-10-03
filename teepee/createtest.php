<?php
include("connect.php");
if(isset($_COOKIE['useremail'])){
	$temp=$_COOKIE['useremail'];
	$userdetails = mysqli_query($con, "SELECT * FROM users WHERE email='$temp'");
	$cuser = mysqli_fetch_assoc($userdetails);
	if ($cuser['email']==$temp) {
		$_SESSION['cuseremail']=$temp;
	}
}
if(isset($_SESSION['cuseremail'])) {
	$login=1;
	$email= $_SESSION['cuseremail'];
	$userdetails = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	$cuser = mysqli_fetch_assoc($userdetails);
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/addTextContentFinal.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main_body.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script type="text/javascript" src="js/addTextContentFinal.js"></script>
	<title></title>
</head>
<body>
	<!-- Header Start -->
	<div class="header">

		<nav class="topHeader">
			<a href="index.html"><img id="logo" src="images/logo.png"/></a>
			<span class = "testName">TeePee: Tree Testing</span>
		</nav>


		<!-- Menu Bar -->
		<nav class="menu">
			<img id="companyLogo" src="images/companyLogo.png"/>
			<span class = "companyName">Company Name</span>

			<div class="menuOptions">
				<ul id="menuItems">
	            	<li ><a href="first page.html"><b>Dashboard</b></a></li>
	                <li><a href="my test page.html"><b>My Tree Tests</b></a></li>
	                <li><a href="second page.html" class="active"><b>Create New Test</b></a></li>
	                <li style="margin-left: 70px;"><a href="#"><b><i class="fas fa-user-alt"></i> &nbsp;<?php echo $cuser['name']; ?> <i class="fas fa-sort-down icon"></i></b></a></li>
            </ul>
			</div>
		</nav>
		<!-- end of menu bar -->

	</div>
	<!-- Header End -->

	<!-- start of main body -->
	<div class="mainBody">
		<div class="leftBody">
			<div class="panel leftNavBarPanel">
						<ul>
							<a href="secondpage.php" ><li>Getting Started</li></a>
							<a href="addtextcontent.php" ><li >Add Text Content</li></a>
							<a href="Adduserdata.php"><li>Add User Data</li></a>
							<a href="createtest.php" class="leftPanelActive"><li>Create Tree</li></a>
							<a href="createScenarios.php" ><li>Create Scenarios</li></a>
							<a href="Createsurvey.php"><li>Create Survey</li></a>
							<a href="#"><li>Preview</li></a>
						</ul>
			</div>
		</div>


		<div class="rightBody">
			<div class="panel rightPanel">
				<div class="panel_body">
					 <div class="newTreeTestPanelTitle">
						Create Tree
					</div>

					<div class="newTreeTestPanelMainBody">
						
							<div class="buttonOptions">
								<input type="submit" name="Import a New Tree" value="Import a New Tree" class="submitButton buttonOptionsHover" />
								<input type="submit" name="Build New Tree" value="Build New Tree" class="submitButton buttonOptionsHover" />
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of main body -->



</body>
</html>
<?php
}
else {
	header('Location: login.php');
	exit();
}
?>
