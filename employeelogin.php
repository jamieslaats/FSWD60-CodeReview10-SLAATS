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
        <div class="welcommessage" id="welcomemessage">
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
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmpID" class="sr-only">Employee ID</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Employee ID" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
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