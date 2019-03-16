<?php  
ob_start();
session_start();
require_once 'actions/db_connect.php';


// it will never let you open index(login) page if session is set
if(isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
}

$error = false;

if (isset($_POST["submit"])) {
// prevent sql injections/ clear user invalid inputs

  $emplcode = trim($_POST["Empl_Code"]);
  $emplcode = strip_tags($emplcode);
  $emplcode = htmlspecialchars($emplcode);


  $email = trim($_POST["Email"]);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST["Password"]);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);



if(empty($emplcode)){
  $error = true;
  $emplcodeError = "Please Enter Your Employee Code!";
}

if(empty($email)){
  $error = true;
  $emailError = "Please Fill In Your Email Address!";
} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL)) {
  $error = true;
  $emailError = "Please Enter Valid Address!";
}

if(empty($pass)) {
  $error = true;
  $passError = "Please Enter Your Password!";
}
// if there's no error, continue to login
if(!$error) {
  $password = hash('sha256',$pass); //password hashing
  $res=mysqli_query($connect, "SELECT Employee_ID,Empl_Code,Name,Surname,Email FROM employee WHERE email='$email'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if Employee_ID,Empl_Code,Name,Surname,Email, Pass is correct it returns must be 1 row

  if(($count ==1) && ($row['pass']==$password) ) {
    $_SESSION['user']= $row['user_id'];
    header("Location: index.php");
  } else {
    $errMSG = "Incorrect Credentials, Try Again...";
  }
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="CF Public Library">
    <meta name="Jamie Slaats" content="CF Public Library">
    <link rel="icon" href="../../favicon.ico">
    <title>Employee Login Page - CF Public Library</title>
   <!-- Custom styles for this template -->
    <link href="CSS/headertablefooter.css" rel="stylesheet">
    <link href="CSS/signin.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap Javascript core -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
      <!--- HEADER SECTION BEGINS --->
        <header id="header" class="header">
            <div class="headerlogo" id="headerlogo">
                <img src="IMG/cfpubliclibrarylogo.png" alt="CF Public Library Logo">
            </div>
        </header><!-- /HEADER -->
        <!--- LOGIN CONTENT SECTION BEGINS FOR EMPLOYEES --->
        <div class="welcommeemployee jumbotron" id="welcommeemployee">
            <h2>This is the login page for all employees to be able to enter into the content management system. Please login with your details in order to:</h2>
            <ol>
                <li>View/Add/Update Media Data.</li>
                <li>View/Add/Update Author Data.</li>
                <li>View/Add/Update Publisher Data.</li>
                <li>View/Add/Update Genre Data.</li>
                <li>View/Add/Update Employee Data.</li>
            </ol>
        </div>
        <form class="form-signin">
            <h2 class="form-signin-heading">Please Sign In</h2>
            <label for="inputEmpID" class="sr-only">Employee ID</label>
            <input type="text" id="inputEmplID" class="form-control" placeholder="Employee ID" name="Empl_Code" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember Me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <!---CONTENT SECTION ENDS --->
        <footer id="footer">
            <div>
                <img class="center-block" src="IMG/cfpubliclibraryblack.png" alt="CF Public Library Logo" width="300">
            </div>
            <div class="copyright text-center">
                <p>Jamie Slaats - CodeFactory 2019&#169;</p>
            </div>
        </footer>
        <!--- END OF FOOTER SECTION --->
        </footer>
    </div> <!-- /container -->
</body>

</html>
<?php ob_end_flush(); ?>