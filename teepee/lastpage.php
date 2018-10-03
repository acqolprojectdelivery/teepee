<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/addTextContentFinal.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main_body.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<script type="text/javascript" src="js/addTextContentFinal.js"></script>
	<title></title>
<style>        table {
    border-collapse: collapse;
    width: 90%;
}

th, td {
    text-align: left;
    padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:lightgray;
        color: black;
    font-style:bold;
}



    </style>
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
	            	<li ><a href="#" class="active"><b>Dashboard</b></a></li>
	                <li><a href="#"><b>My Tree Tests</b></a></li>
	                <li><a href="#" ><b>Create New Test</b></a></li>
	                <li style="margin-left: 70px;"><a href="#"><b><i class="fas fa-user-alt"></i> &nbsp;<?php echo $cuser['name']; ?> <i class="fas fa-sort-down icon"></i></b></a></li>
            </ul>
			</div>
		</nav>
		<!-- end of menu bar -->

	</div>
	<!-- Header End -->

	<!-- start of main body -->
    <div></div>
	<div class="mainBody">
        <label>My Tree Test</label>



					    <table border="2px">
                <tr>
                    <th>
                        Project
                    </th>
                    <th>
                        Test Title
                    </th>
                    <th>Created Date</th>
                    <th>
                        Modified Date
                    </th>
                    <th>
                        Scenarios
                    </th>
                    <th>
                        Responses
                    </th>
                    <th>
                        Time Spent
                    </th>

                </tr>
                <tr>
                    <td>Project1</td>
                    <td>Tree Test for Intranet V1</td>
                    <td>12/01/2018</td>
                    <td>12/01/2018</td>
                    <td>10</td>
                    <td>230</td>
                    <td>90</td>


                </tr>
                <tr>
                    <td>Project1</td>
                    <td>Tree Test for Intranet V2</td>
                    <td>12/01/2018</td>
                    <td>12/01/2018</td>
                    <td>10</td>
                    <td>230</td>
                    <td>90</td>


                </tr>
                <tr>
                    <td>Project1</td>
                    <td>Tree Test for Intranet V3</td>
                    <td>12/01/2018</td>
                    <td>12/01/2018</td>
                    <td>10</td>
                    <td>230</td>
                    <td>90</td>


                </tr>
                <tr>
                    <td>Project2</td>
                    <td>Tree Test for Intranet V4</td>
                    <td>12/01/2018</td>
                    <td>12/01/2018</td>
                    <td>10</td>
                    <td>230</td>
                    <td>90</td>


                </tr>
                <tr>
                    <td>Project2</td>
                    <td>Tree Test for Intranet V1</td>
                    <td>12/01/2018</td>
                    <td>12/08/2018</td>
                    <td>10</td>
                    <td>230</td>
                    <td>90</td>


                </tr>
                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            </table>

	</div>
	<!-- end of main body -->



</body>
</html>
