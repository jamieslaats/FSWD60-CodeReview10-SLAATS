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

				if($_GET['Media_ID']) {
					$mediaid = $_GET['Media_ID'];

					$sql = "SELECT * FROM media WHERE Media_ID = {$mediaid}";
                $result = $connect->query($sql); // mysqli_query($mysqli, $sql)

                $data = $result->fetch_assoc(); // mzsqli_fetch_assoc($result)

            }
            ?>

            <form class="" id="mediainputform" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">ISBN Number</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="left">
                        <input type="text" name="ISBN_No" value="<?php echo $data['ISBN_No'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Media Code</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="MediaCode" value="<?php echo $data['MediaCode'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Title of Media</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Title" value="<?php echo $data['Title'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Title Image</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="TitleImage" value="<?php echo $data['TitleImage'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Description</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Description" value="<?php echo $data['Description'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Media Type</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="MediaType" value="<?php echo $data['MediaType'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Publisher Date</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="PublisherDate" value="<?php echo $data['PublisherDate'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Total Number of Units</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Total_Count" value="<?php echo $data['Total_Count'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Number of Units Available</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Avail_Count" value="<?php echo $data['Avail_Count'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label id="labellettering">Media Location</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Location_ID" value="<?php echo $data['Location_ID'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="fk_Author_ID" id="labellettering">Author Name</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select  name="fk_Author_ID">
                            <option><?php echo $data['fk_Author_ID'] ?></option>
                             <option disabled="">-----------------------------------</option>
                            <?php 
                            require_once 'actions/db_connect.php';

                            $sql = $connect->query("SELECT * FROM `authors`");
                                while($mediaAuthor = $sql->fetch_assoc()){
                                    echo "<option value=" .$mediaAuthor['Author_ID']. ">".$mediaAuthor['Author_ID']. " - ".$mediaAuthor['Name']. " ". $mediaAuthor['Surname']."</option>";
                                }   
                             ?>
                        </select>
                    </div>                      
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="fk_Author_ID" id="labellettering">Publisher Name</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select  name="fk_Publ_ID">
                            <option><?php echo $data['fk_Publ_ID'] ?></option>
                             <option disabled="">-----------------------------------</option>
                            <?php 
                            require_once 'actions/db_connect.php';

                            $sql = $connect->query("SELECT * FROM `publishers`");
                                while($mediaPubl = $sql->fetch_assoc()){
                                    echo "<option value=" .$mediaPubl['Publ_ID']. ">".$mediaPubl['Publ_ID']. " - ".$mediaPubl['Name']. " -  ". $mediaPubl['Country']."</option>";
                                }   
                             ?>
                        </select>
                    </div>                      
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="fk_Author_ID" id="labellettering">Genre</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select  name="fk_Genres_ID">
                            <option><?php echo $data['fk_Genres_ID'] ?></option>
                            <option disabled="">-----------------------------------</option>
                            <?php 
                            require_once 'actions/db_connect.php';

                            $sql = $connect->query("SELECT * FROM `genres`");
                                while($mediaGenres = $sql->fetch_assoc()){
                                    echo "<option value=" .$mediaGenres['Genres_ID']. ">".$mediaGenres['Genres_ID']. " - ".$mediaGenres['GenreName']. "</option>";
                                }   
                             ?>
                        </select>
                    </div>                      
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for="fk_Author_ID" id="labellettering">Admin Name</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select  name="fk_EmpAdmin_ID">
                            <option><?php echo $data['fk_EmpAdmin_ID'] ?></option>
                             <option disabled="">-----------------------------------</option>
                            <?php 
                            require_once 'actions/db_connect.php';

                            $sql = $connect->query("SELECT * FROM `employee`");
                                while($mediaAdmin = $sql->fetch_assoc()){
                                    echo "<option value=" .$mediaAdmin['EmpAdmin_ID']. ">".$mediaAdmin['EmpAdmin_ID']. " - ".$mediaAdmin['Name']. " ". $mediaAdmin['Surname']." -  ". $mediaAdmin['Department']."</option>";
                                }   
                             ?>
                        </select>
                    </div>                      
                </div>
                    <div  id="labelletteringediting" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button  id="updatebtn" class="btn btn-default" type="submit">Update Media</button>
                    </div>
                </div>
                </form>

            <?php

            require_once 'actions/db_connect.php';

            if($_POST) {
                $isbnno = $_POST['ISBN_No'];
                $mediacode = $_POST['MediaCode'];
                $title = $_POST['Title'];
                $titleimage = $_POST['TitleImage'];
                $description = $_POST['Description'];
                $mediatype = $_POST['MediaType'];
                $publisherdate = $_POST['PublisherDate'];
                $totalcount = $_POST['Total_Count'];
                $availcount = $_POST['Avail_Count'];
                $locationid = $_POST['Location_ID'];
                $fkauthorid = $_POST['fk_Author_ID'];
                $fkpublid = $_POST['fk_Publ_ID'];
                $fkgenresid = $_POST['fk_Genres_ID'];
                $fkempadminid = $_POST['fk_EmpAdmin_ID'];

                $mediaid = $_GET['Media_ID'];

                $sql = "UPDATE media SET ISBN_No = '$isbnno', MediaCode = '$mediacode', Title = '$title', TitleImage = '$titleimage',Description = '$description', MediaType = '$mediatype', PublisherDate = '$publisherdate', Total_Count = '$totalcount', Avail_Count = '$availcount', Location_ID = '$locationid', fk_Author_ID = '$fkauthorid', fk_Publ_ID = '$fkpublid', fk_Genres_ID = '$fkgenresid', fk_EmpAdmin_ID = '$fkempadminid' WHERE Media_ID = {$mediaid}";
                if($connect->query($sql) === TRUE) {
                    echo "<p>Successfully Updated</p>";
                    echo "<a href='viewmedia.php?Media_ID=".$mediaid."'><button  class='btn btn-default' type='button'>Back to View Media</button></a>";
                   
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