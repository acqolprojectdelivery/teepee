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


    <style>
        #circle {
			width: 70px;
			height: 70px;
			background: #fff;
			-moz-border-radius: 35px;
			-webkit-border-radius: 35px;
			border-radius: 35px;
			border: 1px solid  #555555;
			border-color: black;
		}

		#circle1 {
			width: 65px;
			height: 75px;
			background: #fff;
			-moz-border-radius: 30px;
			-webkit-border-radius: 30px;
			border-radius: 30px;
			border: 1px solid  #555555;
			border-color: black;
		}
		.rectangle {
			height: 100px;
			width: 900px;
			background-color: #fff;
			border:2px solid;
		}
		.text1{
			height: 35px;
			width: 200px;
			border-radius: 20px;
		}

		.button1 {

			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

		}
		.button2:hover {

			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.button {
			background-color: #ffffff; /* Green */
			border: none;
			color: black;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2p;
			cursor: pointer;
			border-radius: 15px;

			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
		}
		ul li ul{
			display: none;
			list-style: none;
			float: right;
		}
		ul li:hover ul{
			display: block;
		}



		</style>
    <title></title>
</head>

<body>
    <!-- Header Start -->
    <div class="header" style="margin-top: -120px">

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
    <!--<div class="mainBody">
		<div class="leftBody">
		<div class="panel leftNavBarPanel">
		<ul>
		<a href="#"><li>Getting Started</li></a>
		<a href="#"><li class="leftPanelActive">Add Text Content</li></a>
		<a href="#"><li>Add User Data</li></a>
		<a href="#"><li>Create Tree</li></a>
		<a href="#"><li>Create Scenarios</li></a>
		<a href="#"><li>Create Survey</li></a>
		<a href="#"><li>Preview</li></a>
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

<div class ="formHeading" style="padding-top: 10px;">Title:</div><br/>
<input type="text" name="welcomeMessage" class = "inputBox" value="Welcome" /><br/>

<div class ="formHeading">Message:</div><br/>
<div class ="inputBodyBox ">
<i class="fas fa-bold fontOptions"></i>
<i class="fas fa-italic fontOptions"></i>
<i class="fas fa-underline fontOptions"></i>
<input type="button" class = "posRight" onclick="chooseEdit(1)"  value="Edit" />
<input type="button" class = "posRight" onclick="choosePreview(1)"  value="Preview" />

<textarea name="welcomeMessage" class = "textareaBox" id="welcomeMessageId" readonly="true">Welcome to the Tree Testing.</textarea>
</div>
<!-- <hr style="width:60%; float: left;" /><br/> -->
    <!--					<div class ="formHeading">How does this work?</div><br/>
<input type="text" name="workingMessageTitle" class = "inputBox" value="How does this work?" /><br/>
<div class ="inputBodyBox ">
<i class="fas fa-bold fontOptions"></i>
<i class="fas fa-italic fontOptions"></i>
<i class="fas fa-underline fontOptions"></i>
<input type="button" class = "posRight" onclick="chooseEdit(2)"  value="Edit" />
<input type="button" class = "posRight" onclick="choosePreview(2)"  value="Preview" readonly="true">

<textarea name="workingMessage" class = "textareaBox" id="workingMessageId"/>These are the steps: You will be asked some questions, You need to select the place where you would find the answer
</textarea>
</div>

<div class ="formHeading">Thank You:</div><br/>
<input type="text" name="thankyouMessageTitle" class = "inputBox" value="Thank You" /><br/>
<div class ="inputBodyBox " style="margin-bottom: 0px;">
<i class="fas fa-bold fontOptions"></i>
<i class="fas fa-italic fontOptions"></i>
<i class="fas fa-underline fontOptions"></i>
<input type="button" class = "posRight" onclick="chooseEdit(3)"  value="Edit" />
<input type="button" class = "posRight" onclick="choosePreview(3)"  value="Preview" />

<textarea name="thankyouMessage" class = "textareaBox" id="thankyouMessageId" readonly="true">Thank you for you participation.</textarea>
</div>
</form>
</div>


</div>
</div>
</div>
</div>
</div>-->
    <!-- end of main body -->


    <div style="margin-top:120px;margin-left: 40px">
        <label>Hi
            <?php echo $cuser['name']; ?></label><br><br>
        <label style="font-size: 20px"><b>Projects</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="font-size: 20px"><b>Test</b></label>
        <div style="float: right;margin-right:190px;margin-top: -15px;cursor: pointer;">
            <a href="secondpage.php"><button class="button2 button button1" type="button"><b>Create Tree Test</b></button></a>
        </div>
    </div>
    <div id="circle1" style="margin-top: 20px;margin-left: 30px">
        <h3 style="margin-top: 5px;margin-left: 15px;font-size: 15px;font-family:monospace">All</h3>
    </div>
    <div id="circle1" style="margin-top: -76.5px;margin-left: 150px">
        <h3 style="margin-top: 6px;margin-left: 7px;font-size: 16px;font-family:monospace">Active</h3>
    </div>
    <div id="circle1" style="margin-top: -76.5px;margin-left: 218px">
        <h3 style="margin-top: 8px;margin-left: 10px;font-size: 16px;font-family:monospace">Draft</h3>
    </div>
    <div id="circle1" style="margin-top: -78px;margin-left: 286px">
        <p style="margin-top: 10px;margin-left: 7px;font-size: 16px; font-family:monospace;"><b>Closed</b></p>
    </div><br><br>
    <div style="margin-left: 30px">
        <h2>Recent Tree Tests</h2>
    </div>
    <div style="margin-left: 30px;" class="rectangle"><label><b>&nbsp;&nbsp;&nbsp;Tree Test Of Intranet V2</b></label><br></div><br>
    <div style="margin-left: 30px;margin-top: -12px" class="rectangle"><label><b>&nbsp;&nbsp;&nbsp;Tree Test Of Intranet V1</b></label></div><br>
    <div style="margin-left: 30px;margin-top: -12px" class="rectangle"><label><b> &nbsp;&nbsp;&nbsp;Tree Test Of Intranet V3</b></label></div>
    <div style="margin-left:30px;margin-top: 20px">
        <button class="button2 button button1" type="button"><b>Display all</b></button>
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
