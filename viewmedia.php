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
	<title>Homepage - CF Public Library</title>
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
		<br>
		<br>
		<!---CONTENT SECTION ENDS --->

		<!---TABLE AND DATABASE DATA PULL BEGINS--->
		<div class="manageTable">
   			<table border="1" cellspacing="0" cellpadding="0">
     			<thead>
       				<tr>
				       	<th>Media_ID</th>
				        <th>ISBN#</th>
				        <th>Media Code</th>
				        <th>Title</th>
				        <th>Image</th>
				        <th>Description</th>
				        <th>Media Type</th>
				        <th>Publisher Date</th>
				        <th>Total Units</th>
				        <th>Available Units</th>
				        <th>Unit Location</th>
				        <th>Author</th>
				        <th>Publisher</th>
				        <th>Genre</th>
				        <th>Admin Managing</th>
				        <th>Creation Date</th>
				        <th>Last Updated</th>
				        <th>Edit/Delete</th>
       				</tr>
     			</thead>
      		<tbody>

       <?php
       require_once 'actions/db_connect.php';

       $sql = "SELECT * FROM media";
       $result = $connect->query($sql);

       if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           echo "<tr>
           <td>".$row['Media_ID']."</td> 
           <td>".$row['ISBN_No']."</td>
           <td>".$row['MediaCode']."</td>
           <td>".$row['Title']."</td>
           <td>".$row['TitleImage']."</td>
           <td>".$row['Description']."</td>
           <td>".$row['MediaType']."</td>
           <td>".$row['PublisherDate']."</td>
           <td>".$row['Total_Count']."</td>
           <td>".$row['Avail_Count']."</td>
           <td>".$row['Location_ID']."</td>
           <td>".$row['fk_Author_ID']."</td>
           <td>".$row['fk_Publ_ID']."</td>
           <td>".$row['fk_Genres_ID']."</td>
           <td>".$row['fk_Admin_ID']."</td>
           <td>".$row['Created_at']."</td>
           <td>".$row['Updated_at']."</td>
           <td> 
           <a href='update.php?id=".$row['Media_ID']."'><button type='button'>Edit</button></a>
           <a href='delete.php?id=".$row['Media_ID']."'><button type='button'>Delete</button></a>
           </td>
           </tr>";
         }
       } else {
         echo "<tr><td colspan='18'><center>No Data Avaliable</center></td></tr>";
       }
       ?>
     		</tbody>
   			</table>
 		</div>
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