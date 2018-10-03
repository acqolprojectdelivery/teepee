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
                    <li><a href="firstpage.php" class="active"><b>Dashboard</b></a></li>
                    <li><a href="thirdpage.php"><b>My Tree Tests</b></a></li>
                    <li><a href="secondpage.php"><b>Create New Test</b></a></li>
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
                    <a href="#">
                        <li>Getting Started</li>
                    </a>
                    <a href="addcontent.php">
                        <li class="leftPanelActive">Add Text Content</li>
                    </a>
                    <a href="Adduserdata.php">
                        <li>Add User Data</li>
                    </a>
                    <a href="createtest.php">
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


        <div class="rightBody">
            <div class="panel rightPanel">
                <div class="panel_body">
                    <div class="newTreeTestPanelTitle">
                        Add Text Content
                    </div>

                    <div class="newTreeTestPanelMainBody">
                        <form>
                            <div class="buttonOptions">
                                <input type="submit" name="saveButton" value="Save" class="submitButton buttonOptionsHover" />

                            </div>

                            <div class="formHeading" style="padding-top: 10px;">Title:</div><br />
                            <input type="text" name="welcomeMessage" class="inputBox" value="Welcome" /><br />

                            <div class="formHeading">Message:</div><br />
                            <div class="inputBodyBox ">
                                <i class="fas fa-bold fontOptions"></i>
                                <i class="fas fa-italic fontOptions"></i>
                                <i class="fas fa-underline fontOptions"></i>
                                <input type="button" class="posRight" onclick="chooseEdit(1)" value="Edit" />
                                <input type="button" class="posRight" onclick="choosePreview(1)" value="Preview" />

                                <textarea name="welcomeMessage" class="textareaBox" id="welcomeMessageId" readonly="true">Welcome to the Tree Testing.</textarea>
                            </div>
                            <!-- <hr style="width:60%; float: left;" /><br/> -->
                            <div class="formHeading">How does this work?</div><br />
                            <input type="text" name="workingMessageTitle" class="inputBox" value="How does this work?" /><br />
                            <div class="inputBodyBox ">
                                <i class="fas fa-bold fontOptions"></i>
                                <i class="fas fa-italic fontOptions"></i>
                                <i class="fas fa-underline fontOptions"></i>
                                <input type="button" class="posRight" onclick="chooseEdit(2)" value="Edit" />
                                <input type="button" class="posRight" onclick="choosePreview(2)" value="Preview" readonly="true">

                                <textarea name="workingMessage" class="textareaBox" id="workingMessageId">These are the steps: You will be asked some questions, You need to select the place where you would find the answer
								</textarea>
                            </div>


                            <div class="formHeading">Thank You:</div><br />
                            <input type="text" name="thankyouMessageTitle" class="inputBox" value="Thank You" /><br />
                            <div class="inputBodyBox " style="margin-bottom: 0px;">
                                <i class="fas fa-bold fontOptions"></i>
                                <i class="fas fa-italic fontOptions"></i>
                                <i class="fas fa-underline fontOptions"></i>
                                <input type="button" class="posRight" onclick="chooseEdit(3)" value="Edit" />
                                <input type="button" class="posRight" onclick="choosePreview(3)" value="Preview" />

                                <textarea name="thankyouMessage" class="textareaBox" id="thankyouMessageId" readonly="true">Thank you for you participation.</textarea>
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
