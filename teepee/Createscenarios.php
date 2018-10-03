<?php
$con = new mysqli("localhost","root","","teepee");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<link rel="stylesheet" type="text/css" href="css/createScenarios.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main_body.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script type="text/javascript" src="js/addTextContentFinal.js"></script>
	<script type="text/javascript" src="js/createScenarios.js"></script>

	<link rel="stylesheet" href="dist/themes/default/style.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<title></title>

	<script type="text/javascript">
	$(document).ready(function(){
			 $("#btn1").click(function(e){
			 e.preventDefault();
			});
	});
	</script>

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
									<a href="Adduserdata.php">
											<li>Add User Data</li>
									</a>
									<a href="createTree.php">
											<li>Create Tree</li>
									</a>
									<a href="Createscenarios.php" class="leftPanelActive">
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
									<div class="newTreeTestPanelTitle" id="1">
											Create Scenarios
											<input type="button" name="importNewScenario" value="Import Scenario" class="addButton buttonOptionsHover" style="float:right;margin-top: -6px;" />
									</div>

									<div class="newTreeTestPanelMainBody">


												<form method="post" enctype="multipart/form-data">
												<table>
													<div id="container">
														<div class="inputBodyBox " id="inputBodyBox">
												<textarea  cols="112" rows="14" name="e2">Scenario Description</textarea>
												<div id="answerDiv" style="    margin-top: 8px; display: none;"></div>
												<div class="addAnswerButton">
														<input type="button" name="addAnswerButtonId[0]" id="addAnswerButtonId[0]" value="Add Answer" class="otherButton buttonOptionsHover" onclick="displayModal()" />



												</div>
											</div>

												<input class="submitButton buttonOptionsHover" id="submit" type="submit" name="Add scenario" value="Add secnario" /> &nbsp&nbsp
												<input  class="submitButton buttonOptionsHover" id="submit" type="submit" name="t1" value="save" />
											</div>
										</div>
												</table>
												<?php
												if(isset($_POST['t1']))
												{
												$imgarryimp=array();
															$d="insert into createscenarios(scenarios)values('$_POST[e2]')";
												if($con->query($d)==TRUE)
														{
															echo "Saved Successfully";
														}
												}
												exit;
												?>
												</form>
												<table>
												<?php
												$t="select * from createscenarios";
												$y=$con->query($t);
												foreach ($y as $q);
												{
												?>
												<tr>
												<?php echo $q['scenarios'];?>
												</tr>
												<?php }?>
												</table>

												</form>
									</div>
							</div>
					</div>
			</div>
	</div> <!-- end of main body -->

<?php
{
}

?>
