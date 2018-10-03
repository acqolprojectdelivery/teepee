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
    <link rel="stylesheet" type="text/css" href="css/createTree.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/main_body.css">
    <link rel="stylesheet" type="text/css" href="css/uploadFile.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/easyTree.css">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="src/easyTree.js"></script>
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
                        <li class="leftPanelActive">Create Tree</li>
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
                <div class="panel_body">
                    <div class="newTreeTestPanelTitle">
                        Create Tree
                    </div>


                    <div>
                        <!-- <div class="buttonOptions"> -->
                        <input type="submit" id="buildTree" name="newTree" value="Build a new tree" class="submitButton buttonOptionsHover" />
                        <!-- </div> -->
                        <!-- <div class="buttonOptions"> -->
                        <button id="importTree" class="submitButton buttonOptionsHover">Import a new tree</button>
                        <!-- </div> -->
                        <button id="jsonParseBtn" class="submitButton buttonOptionsHover">Json Parsed Tree</button>
                    </div>
                    <div id="container">


                    </div>

                    <!-- The Modal -->
                    <div id="myModal" class="bg-modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <br />
                            <img id="uploadFile" width="80px" height="50px" align="center" src="images/imgFileUpload.png" /><br />
                            <center>
                                <input type="file" id="myFile" class="submitButton buttonOptionsHover" multiple size="50" onchange="myFunction()">
                            </center>
                            <!-- <button id="submitfile" top="20px" class="submitButton buttonOptionsHover">Choose File to upload</button><br/> -->
                            <br />
                            <p id="demo" style="color:gray">
                                <p style="color:gray">Or drag and drop file to upload</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-3" id="createTableDiv">
                    <h3 class="text-success">Create a Tree</h3>
                    <div class="easy-tree">
                        <ul>
                            <li>Example 1</li>
                            <li>Example 2</li>
                            <li>Example 3
                                <ul>
                                    <li>Example 1</li>
                                    <li>Example 2
                                        <ul>
                                            <li>Example 1</li>
                                            <li>Example 2</li>
                                            <li>Example 3</li>
                                            <li>Example 4</li>
                                        </ul>
                                    </li>
                                    <li>Example 3</li>
                                    <li>Example 4</li>
                                </ul>
                            </li>
                            <li>Example 0
                                <ul>
                                    <li>Example 1</li>
                                    <li>Example 2</li>
                                    <li>Example 3</li>
                                    <li>Example 4
                                        <ul>
                                            <li>Example 1</li>
                                            <li>Example 2</li>
                                            <li>Example 3</li>
                                            <li>Example 4</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>



                    <!-- <table id="tblLevels" cellpadding="0" cellspacing="0" border="1">
						<thead>
								<tr>
										<th>Add Levels</th>
										<th></th>
										<th></th>
								</tr>
						</thead>
						<tbody>
						</tbody>
						<tfoot>
								<tr>
										<td><input type="text" id="txtName" /></td>
										<td><input type="button" onclick="Add()" id="addbutton"/></td>
								</tr>
						</tfoot>
				</table> -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.core.js"></script>
                    <script type="text/javascript" src="js/createTree.js"></script>
                    <script>
                        (function($) {
                            function init() {
                                $('.easy-tree').EasyTree({
                                    addable: true,
                                    editable: true,
                                    deletable: true
                                });
                            }

                            window.onload = init();
                        })(jQuery)

                    </script>

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
