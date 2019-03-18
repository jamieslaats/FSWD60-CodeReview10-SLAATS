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
	<title>View Author Data - CF Public Library</title>
	<!-- Custom styles for this template -->
	<link href="CSS/headertablefooter.css" rel="stylesheet">
	<link href="CSS/signin.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
			<hr>
			<!---CONTENT SECTION ENDS --->

			<!---TABLE AND DATABASE DATA PULL BEGINS--->
			<div>
				<H3>UPDATE AUTHOR DATA</H3>
			</div>
			<hr>
			<div>
				<?php 

				require_once 'actions/db_connect.php';

				if($_GET['Author_ID']) {
					$authorid = $_GET['Author_ID'];

					$sql = "SELECT * FROM authors WHERE Author_ID = {$authorid}";
                $result = $connect->query($sql); // mysqli_query($mysqli, $sql)

                $data = $result->fetch_assoc(); // mzsqli_fetch_assoc($result)

            }
            ?>

            <form class="" id="mediainputform" method="POST">
            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<label id="labellettering">Name</label>
            		</div>
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<input type="text" name="Name" value="<?php echo $data['Name'] ?>">
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<label id="labellettering">Surname</label>
            		</div>
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<input type="text" name="Surname" value="<?php echo $data['Surname'] ?>">
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<label id="labellettering">Media Focus</label>
            		</div>
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            			<input type="text" name="MediaFocus" value="<?php echo $data['MediaFocus'] ?>">
            		</div>
            	</div>
            	<div class="row">
            		<div  id="labelletteringediting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            			<button  id="updatebtn" class="btn btn-default" type="submit">Update Author</button>
            		</div>
            	</div>
            </form>

            <?php

            require_once 'actions/db_connect.php';

            if($_POST) {
            	$name = $_POST['Name'];
            	$surname = $_POST['Surname'];
            	$mediafocus = $_POST['MediaFocus'];

            	$authorid = $_GET['Author_ID'];

            	$sql = "UPDATE authors SET Name = '$name', Surname = '$surname', MediaFocus = '$mediafocus' WHERE Author_ID = {$authorid}";
            	if($connect->query($sql) === TRUE) {
            		echo "<p>Successfully Updated</p>";
            		echo "<a href='viewauthor.php?Author_ID=".$authorid."'><button  class='btn btn-default' type='button'>Back to View Author</button></a>";

            	} else {
            		echo "Error while updating record : ". $connect->error;
            	}

            	$connect->close();

            }

            ?>

        </div>
        <br>
        <br>

        <!---ENDS TABLE AND DATABASE DATA PULL--->

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