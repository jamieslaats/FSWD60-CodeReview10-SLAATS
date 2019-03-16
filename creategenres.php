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
	<title>Add Media Data Page - CF Public Library</title>
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
		<!--- LINKS CONTENT SECTION BEGINS --->
		<table>
			<caption><h1>Content Management System</h1></caption>
			<tbody>
				<tr>
					<td colspan="" rowspan="" headers=""><a href="viewmedia.php"><button>View Media Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="viewauthor.php"><button>View Author Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="viewpublisher.php"><button>View Publisher Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="viewgenres.php"><button>View Genres Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="viewemployee.php"><button>View Employee Data</button></td>
					<td colspan="" rowspan="2" headers=""><a href="logout.php"><button>Logout</button></td>
				</tr>
					<tr>
					<td colspan="" rowspan="" headers=""><a href="createmedia.php"><button>Create Media Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="createauthor.php"><button>Create Author Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="createpublisher.php"><button>Create  Publisher Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="creategenres.php"><button>Create  Genres Data</button></td>
					<td colspan="" rowspan="" headers=""><a href="createemployee.php"><button>Create  Employee Data</button></td>

				</tr>
			</tbody>
		</table>
		<!--- LINKS CONTENT SECTION ENDS --->
		<hr>
		<!--- ADD CONTENT TO SYSTEM SECTION BEGINS --->
		<fieldset>

		<legend>ADD GENRES CONTENT</legend>
			

			<form class="" id="mediainputform" action="actions/a_creategenres.php" method="POST">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="right">
						<label id="labellettering">Genre Name</label>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="left">
						<input type="text" name="GenreName" placeholder="Name" />
					</div>
				</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="right">
						<button type="submit">Insert Genre</button>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="left">
						<a href="indexcfpublib.php"><button type="button">Back</button>
						</div>
					</div>
				</form>

			</fieldset>
			<!--- ADD CONTENT TO SYSTEM SECTION ENDS --->
			<br>
			<br>
			<!---FOOTER SECTION BEGINS --->
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