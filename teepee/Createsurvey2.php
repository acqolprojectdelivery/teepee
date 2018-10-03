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
                                <?php echo $cuser['name']; ?> <i class="fas fa-sort-down icon"></i></b></a></li>
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
                    <a href="Adduserdata.php">
                        <li>Add User Data</li>
                    </a>
                    <a href="createTree.php">
                        <li>Create Tree</li>
                    </a>
                    <a href="Createscenarios.php">
                        <li>Create Scenarios</li>
                    </a>
                    <a href="Createsurvey.php" class="leftPanelActive">
                        <li>Create Survey</li>
                    </a>
                    <a href="#">
                        <li>Preview</li>
                    </a>
                </ul>
            </div>
        </div>


        <div class="rightBody">
            <div class="panel rightPanel">
                <div class="panel_body1">
                    <h3>&nbsp&nbsp Ask Some Information About the User Before the Test Begins</h3>
                    <p>&nbsp&nbsp You can collect Information about the user performing the test e.g. Name, Email, Location, Business Unit, etc</br></br></br></p>
                    <div class="buttonOptions1">
                        <input type="submit" name="AddaQuestionButton" value="Add a Question" style="float: left" class="submitButton buttonOptionsHover" />
                        <div class="buttonOptions2">
                            <input type="submit" name="SkipButton" value="Skip" class="submitButton buttonOptionsHover" /><br><br><br>
                        </div>

                        <div class="panel-body">
                            <p><label for="Question"><b>Question:</b></label><br><br>
                                <input type="text" placeholder="Type your question here..." style="width: 500px; height: 35px;"><br><br>
                                <input type="checkbox" name="Mandatory" value="option">Mandatory<br><br>

                                <label for="Expected Answer Type"><b>Expected Answer Type:</b></label><br><br>
                                <select style="width: 500px; height: 35px;">
                                    <option value="Radio Button">Radio Button</option>
                                    <option value="Text">Text</option>
                                    <option value="Check Box">Check Box</option>
                                    <option value="Combo Box">Combo Box</option>
                            </p><br><br><br>
                            <div class="buttonOptions2">
                                <input type="submit" name="SaveButton" value="Save" class="submitButton buttonOptionsHover" /><br><br>
                                <b>
                                    <p>Options:</p>
                                </b>
                                <input type="radio" name="options"> Option1<br>
                                <div class="buttonOptions2">
                                    <input type="submit" name="OptionButton" value="Add Option" class="submitButton buttonOptionsHover"><br><br>
                                </div><br><br>

                                <div class="buttonOptions1">
                                    <input type="submit" name="AddanotherQuestionButton" value="Add another Question" style="float: left" class="submitButton buttonOptionsHover">
                                    <!-- <hr style="width:60%; float: left;" /><br/> -->
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
