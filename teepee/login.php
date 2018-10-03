<?php
include("connect.php");
$errorNo=0;
$emailerror=$passworderror="";
if(isset($_POST['login'])){
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $details = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
  if(mysqli_num_rows($details) == 1)
  {
    $verifydetails = mysqli_fetch_assoc($details);
    if ($verifydetails['password']==$password) {
      $_SESSION['cuseremail'] = $email;
      setcookie("useremail", $email, time() + (86400 * 30), "/");
      $passworderror=$emailerror="";
      header('Location: firstpage.php');
      exit();
    }
    else {
      $passworderror="Enter correct Password";
    }
  }
  else {
    $emailerror="Enter correct Email";
  }
}
else {
  echo "you dont have permission to access this file. please login first";
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title></title>
</head>

<body>
    <!-- Header -->

    <nav class="topHeader">
        <a href="index.html"><img id="logo" src="images/logo.png" /></a>

        <span class="testName">TeePee: Tree Testing</span>


    </nav>

    <div class="signInUpBackgroundImageWrapper">
        <div class="signinBackgroundImage">
            <img id="bg_img" src="images/background.jpg" />
        </div>
        <div class="signinBackgroundGradient"></div>

    </div>

    <div id="mainBody">
        <div class="panel">
            <div class="panel_body">
                <div class="panel_title">
                    Login
                </div>

                <div class="panel_main_body">


                    <form style="margin-top: 20px;" method="POST" action="login.php">
                        <div class="formHeading">Email:
                            <span style="color:red">
                                <?php
                if (isset($_POST['email'])) {
                  echo "$emailerror";
                }
                ?></span>
                        </div>
                        <input type="text" name="email" value="<?php
              if (isset($_POST['email'])) {
                echo $email;
              }
              ?>" class="box" /> <br />

                        <div class="formHeading">Password:
                            <span style="color:red">
                                <?php
                  if (isset($_POST['password'])) {
                    echo "$passworderror";
                  }
                  ?></span>
                        </div>
                        <input type="password" name="password" value="<?php
                if (isset($_POST['password'])) {
                  echo $password;
                }
                ?>" class="box" /><br />

                        <input type="submit" name="login" value="login" class="submitButton">

                    </form>

                    <div class="options"><a href="#">Forgot password? </a></div>
                    <div class="options"><a href="signup.php">Not a member? Register Now </a></div>

                </div>

            </div>

        </div>
    </div>
</body>

</html>
