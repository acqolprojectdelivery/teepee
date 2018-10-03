<?php
include("connect.php");
$errorNo=0;
$nameerror=$emailerror=$passworderror=$report=$passwordConfirmerror="";
if(isset($_POST['register'])){
  $Name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $passwordConfirm = $_POST['cpassword'];
  if(strlen($Name) < 3){
    $errorNo=1;
    $nameerror="* Name is too short";
  }
  if(strlen($password) < 8){
    $errorNo=1;
    $passworderror="* must have above 8 chars";
  }
  if($password !== $passwordConfirm){
    $errorNo=1;
    $passwordConfirmerror="* password is not matching";
  }
  $details = mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
  if(mysqli_num_rows($details) == 1)
  {
    $report="* User already registered";
  }
  if( $errorNo==0 ){
    $details = mysqli_query($con,"SELECT id FROM users WHERE email='$email'");
    if(mysqli_num_rows($details) == 0)
    {
      $insertQuery = "INSERT INTO users(name,email,password) VALUES ('$Name','$email','$password')";
      if(mysqli_query($con, $insertQuery)){
        header('Location: firstpage.php');
      }
    }
  }
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
                    Register
                </div>

                <div class="panel_main_body">


                    <form style="margin-top: 20px;" method="POST" action="firstpage.php">
                        <div class="formHeading">Name:
                            <span style="color:red">
                                <?php
                if (isset($_POST['name'])) {
                  echo "$nameerror";
                }
                ?></span></div><br />



                        <input type="text" name="name" value="<?php
                if (isset($_POST['name'])) {
                  echo $Name;
                }
                ?>" class="box" /><br />



                        <div class="formHeading">Email:
                            <span style="color:red">
                                <?php
                    if (isset($_POST['name'])) {
                      echo "$report";
                    }
                    ?>
                            </span></div><br />


                        <input type="email" name="email" value="<?php
                  if (isset($_POST['email'])) {
                    echo $email;
                  }
                  ?>" class="box" /><br />


                        <div class="formHeading">Password:
                            <span style="color:red">
                                <?php
                      if (isset($_POST['password'])) {
                        echo "$passworderror";
                      }
                      ?></span>
                        </div><br />
                        <input type="password" name="password" value="<?php
                    if (isset($_POST['name'])) {
                      echo $password;
                    }
                    ?>" class="box" /><br />

                        <div class="formHeading">Re-enter Password:
                            <span style="color:red">
                                <?php
                        if (isset($_POST['password'])) {
                          echo "$passwordConfirmerror";
                        }
                        ?></span>
                        </div><br />
                        <input type="password" name="cpassword" value="<?php
                      if (isset($_POST['name'])) {
                        echo $passwordConfirm;
                      }
                      ?>" class="box" /><br />

                        <input type="submit" name="register" class="submitButton" value="register">

                    </form>

                    <div class="options"><a href="signup.html">Already a member? Sign In Now </a></div>

                </div>

            </div>

        </div>
    </div>
</body>

</html>
