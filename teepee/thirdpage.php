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
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
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
                    <li><a href="thirdpage.php" class="active"><b>My Tree Tests</b></a></li>
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



        <div class="newTreeTestPanelTitle">
            My Tree Tests
        </div>
        <br />

        <table style="width:100%">
            <tr>
                <th>Project</th>
                <th>Test Title</th>
                <th>Created Date</th>
                <th>Modified Date</th>
                <th>Scenarios</th>
                <th>Responses</th>
                <th>Time Spent</th>
            </tr>
            <tr>
                <td>Project 1</td>
                <td>Tree Test 1</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Project 2</td>
                <td>Tree Test 2</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Project 2</td>
                <td>Tree Test 3</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Project 3</td>
                <td>Tree Test 4</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Project 3</td>
                <td>Tree Test 5</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Project 4</td>
                <td>Tree Test 6</td>
                <td>20/02/2018</td>
                <td>20/02/2018</td>
                <td>10</td>
                <td>235</td>
                <td>12</td>
            </tr>
        </table>
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
