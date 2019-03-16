<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="CF Database Library" content="CF Public Library">
    <meta name="Jamie Slaats" content="CF Public Library">
    <link rel="icon" href="../../favicon.ico">
    <title>CF Public Library - Open Index Page</title>
    <!-- Custom styles for this template -->
    <link href="CSS/headertablefooter.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap Javascript core -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
    	<!--HEADER SECTION BEGINS -->
        <header id="header" class="header">
            <div class="headerlogo" id="headerlogo">
                <img src="IMG/cfpubliclibrarylogo.png" alt="CF Public Library Logo">
            </div>
        </header><!-- /HEADER-->
        <!--- CONTENT SECTION BEGINS FOR EXTERNAL USERS --->

        <div class="welcommessage" id="welcomemessage">
            <h1>Welcome to the CF Public Library!</h1>
            <h3>Here you can find a list of all of our current titles and offerings available to you!</h3>
        </div>
        <hr>
        <div class="manageTable">
            <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-condensed">
                <thead>
                    <tr>
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
           <td>".$row['ISBN_No']."</td>
           <td>".$row['MediaCode']."</td>
           <td>".$row['Title']."</td>
           <td><img src='".$row['TitleImage']."' width=100px></td>
           <td>".$row['Description']."</td>
           <td>".$row['MediaType']."</td>
           <td>".$row['PublisherDate']."</td>
           <td>".$row['Total_Count']."</td>
           <td>".$row['Avail_Count']."</td>
           <td>".$row['Location_ID']."</td>
           <td>".$row['fk_Author_ID']."</td>
           <td>".$row['fk_Publ_ID']."</td>
           <td>".$row['fk_Genres_ID']."</td>
           </tr>";
         }
       } else {
         echo "<tr><td colspan='13'><center>No Data Avaliable</center></td></tr>";
       }
       ?>
            </tbody>
            </table>
        </div>




    	<!---FOOTER SECTION BEGINNING --->
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
	
</body>
</html>