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


    <title></title>
</head>

<body>

	<!-- Header Start -->
	<div class="header">

			<nav class="topHeader">
					<a href="index.html"><img id="logo" src="images/logo.png" /></a>
					<span class="testName">TeePee: Tree Testing</span>
			</nav>


			<!-- Menu Bar -->
			<nav class="menu">
					<img id="companyLogo" src="images/companyLogo.png" />
					<span class="companyName">Company Name</span>

					<div class="menuOptions">
							<ul id="menuItems">
									<li><a href="firstpage.php"><b>Dashboard</b></a></li>
									<li><a href="thirdpage.php"><b>My Tree Tests</b></a></li>
									<li><a href="secondpage.php" class="active"><b>Create New Test</b></a></li>
									<li style="margin-left: 70px;"><a href="#"><b><i class="fas fa-user-alt"></i> &nbsp;
															<?php echo $cuser['name']; ?>
															<i class="fas fa-sort-down icon"></i></b></a></li>
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
									<a href="secondpage.php">
											<li>Getting Started</li>
									</a>
									<a href="addtextcontent.php">
											<li>Add Text Content</li>
									</a>
									<a href="Adduserdata.php"  class="leftPanelActive">
											<li>Add User Data</li>
									</a>
									<a href="createTree.php">
											<li>Create Tree</li>
									</a>
									<a href="Createscenarios.php">
											<li>Create Scenarios</li>
									</a>
									<a href="Createsurvey.php">
											<li>Create Survey</li>
									</a>
					
							</ul>
					</div>
			</div>
            <div class="rightBody">
                <div class="panel rightPanel">
                    <div class="panel_body1">
                        <h3>&nbsp; Ask Some Information About the User Before the Test Begins</h3>
                        <p> &nbsp;You can collect Information about the user performing the test e.g. Name, Email, Location, Business Unit, etc</p>
                        <div class="buttonOptions1"><a href="Adduserdata1.php" />
                            <input type="submit" name="AddaQuestionButton" value="Add a Question" style="float: left" class="submitButton buttonOptionsHover">
                        </div>
                        <div class="buttonOptions2">
                            <input type="submit" name="SkipButton" value="Skip" class="submitButton buttonOptionsHover"/>


                        </div>
                        <!--      <hr style="width:60%; float: left;" /><br />-->

                    </div>

                </div>


            </div>
        </div> <!-- end of main body -->

    </div>

</body>

</html>
<?php
}
else {
	header('Location: login.php');
	exit();
}
?>
