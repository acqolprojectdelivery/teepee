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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/addTextContentFinal.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/main_body.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script type="text/javascript" src="js/addTextContentFinal.js"></script>
    <title>
    </title>
    <style>
        ul li ul{
            display: none;
            list-style: none;
            float: right;
        }
        ul li:hover ul{
            display: block;
        }
        </style>


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
                                <?php echo $cuser['name']; ?> <i class="fas fa-sort-down icon"></i></b></a>
                        <ul id="menuitems">
                            <li><a href=""><b>My Account</b></a></li>
                            <li><a href="logout.php"><b>Logout</b></a></li>
                        </ul>
                    </li>
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
                    <a href="#" class="active">
                        <li>Getting Started</li>
                    </a>
                    <a href="addtextcontent.php">
                        <li>Add Text Content</li>
                    </a>
                    <a href="adduserdata.php">
                        <li>Add User Data</li>
                    </a>
                    <a href="createTree.php">
                        <li>Create Tree</li>
                    </a>
                    <a href="createScenarios.php">
                        <li>Create Scenarios</li>
                    </a>
                    <a href="Createsurvey.php">
                        <li>Create Survey</li>
                    </a>
                    
                </ul>
            </div>
        </div>
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom w3-card-4">
                <header class="w3-container w3-teal">

                    <h2>Projects</h2>
                </header>
                <div class="w3-container">
                    <input type="text" placeholder="search Projects">
                </div>
                <footer class="w3-container w3-teal">
                    <p onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display">Close</p>
                    <p class="w3-button w3-display">Save</p>
                </footer>
            </div>
        </div>


        <div class="rightBody">
            <div style="height:500px;width: 950px" class="panel rightPanel">
                <div class="panel_body">
                    <div class="newTreeTestPanelTitle">
                        Get Started
                    </div>

                    <div class="newTreeTestPanelMainBody">
                        <form>


                            <div class="formHeading" style="padding-top: 10px;">Text Name:</div><br />
                            <input style="width: 300px" type="text" name="welcomeMessage" class="inputBox" />
                            <div class="formHeading" style="padding-top: 10px;">Project</div><br />
                            <select style="width: 300px;height: 30px; font-family: 'FontAwesome', sans-serif;">

                                <optgroup label="Create new Project">
                                    <option onclick="document.getElementById('id01').style.display='block'">Add &nbsp; &#xf067;</option>

                                </optgroup>
                                <optgroup label="Exsisting Project">
                                    <option>Project A</option>
                                    <option>Project B</option>
                                    <option>Project C</option>
                                </optgroup>
                            </select><br />


                            <div style="float: left" class="buttonOptions">
                                <input type="submit" name="saveButton" value="Save" class="submitButton buttonOptionsHover" />

                                <input type="submit" name="CancelButton" value="Cancel" class="submitButton buttonOptionsHover" />



                            </div>
                            <div style="float: right;margin-top: -100px;margin-right: 520px;"><label>OR</label>
                            </div>
                            <div style="float: right;margin-top: -120px;margin-right:250px" class="buttonOptions">
                                <input type="submit" name="copyButton" value="Copy From Existing Test " class="submitButton buttonOptionsHover" />
                            </div>



                        </form>
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
