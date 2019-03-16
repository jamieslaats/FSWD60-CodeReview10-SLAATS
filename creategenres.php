<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="CF Public Library">
	<meta name="Jamie Slaats" content="CF Public Library">
	<link rel="icon" href="../../favicon.ico">
	<title>Create Genres Page - CF Public Library</title>
	<!-- Custom styles for this template -->
	<link href="CSS/headertablefooter.css" rel="stylesheet">
	<link href="CSS/signin.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Bootstrap Javascript core -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
		<!--- LINKS CONTENT SECTION BEGINS --->
		<div class="headertitle" id="headertitle" >
			<h1>Content Management System</h1>
		</div>
		<div class="">
		<table class="table table-responsive">
				<tr>
					<tr>
					<td><a href="viewmedia.php"><button class="btn btn-default">View Media Data</button></a></td>
					<td><a href="viewauthor.php"><button class="btn btn-default">View Author Data</button></a></td>
					<td><a href="viewpublisher.php"><button class="btn btn-default">View Publisher Data</button></a></td>
					<td><a href="viewgenres.php"><button class="btn btn-default">View Genres Data</button></a></td>
					<td><a href="viewemployee.php"><button class="btn btn-default">View Employee Data</button></a></td>
					<td><a href="indexcfpublib.php"><button class="btn btn-default">Hompage</button></a></td>
					
				</tr>
					<tr>
					<td><a href="createmedia.php"><button class="btn btn-default">Create Media Data</button></a></td>
					<td><a href="createauthor.php"><button class="btn btn-default">Create Author Data</button></a></td>
					<td><a href="createpublisher.php"><button class="btn btn-default">Create  Publisher Data</button></a></td>
					<td><a href="creategenres.php"><button class="btn btn-default">Create  Genres Data</button></a></td>
					<td><a href="createemployee.php"><button class="btn btn-default">Create  Employee Data</button></a></td>
					<td><a href="logout.php"><button class="btn btn-default">Logout</button></a></td>
				</tr>
		</table>
		</div>
		<!--- LINKS CONTENT SECTION ENDS --->
		<hr>
		<!--- ADD CONTENT TO SYSTEM SECTION BEGINS --->
		<div class="dataentrysection">
			<div >
				<h3>CREATE GENRES CONTENT</h3>
			</div>	
			<hr>
			<form id="mediainputform" action="actions/a_creategenres.php" method="POST">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label id="labellettering">Genre Name</label>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="GenreName" placeholder="Name">
					</div>
				</div>
				
					<div id="labellettering" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<button class="btn btn-default" type="submit">Insert Genre</button>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<a href="indexcfpublib.php"><button class="btn btn-default" type="button">Back</button></a>
					</div>
			</form>
		</div>
			<!--- ADD CONTENT TO SYSTEM SECTION ENDS --->
			<br>
			<br>
			<footer id="footer">
				<div>
					<img class="center-block" src="IMG/cfpubliclibraryblack.png" alt="CF Public Library Logo" width="300">
				</div>
				<div class="copyright text-center">
					<p>Jamie Slaats - CodeFactory 2019&#169;</p>
				</div>
			</footer>
	</div> <!-- /container -->
</body>
</html>