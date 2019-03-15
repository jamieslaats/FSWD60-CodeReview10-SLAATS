<?php 

require_once 'db_connect.php';

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
	$fkadminid = $_POST['fk_Admin_ID'];

	$mediaid = $_POST['Media_ID'];

	$sql = "UPDATE media SET ISBN_No = '$isbnno', MediaCode = '$mediacode', Title = '$title', TitleImage = '$titleimage',Description = '$description', MediaType = '$mediatype', PublisherDate = '$publisherdate', Total_Count = '$totalcount', Avail_Count = '$availcount', Location_ID = '$locationid', fk_Author_ID = '$fkauthorid', fk_Publ_ID = '$fkpublid', fk_Genres_ID = '$fkgenresid', fk_Admin_ID = '$fkadminid' WHERE Media_ID = {$mediaid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully Updated</p>";
		echo "<a href='../update.php?id=".$mediaid."'><button type='button'>Back</button></a>";
		echo "<a href='../indexcfpublib.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error while updating record : ". $connect->error;
	}

	$connect->close();

} else if($_POST) {
	$fname = $_POST['Name'];
	$lname = $_POST['Surname'];
	$mediafocus = $_POST['MediaFocus'];

	$authorid = $_POST['Author_ID'];

	$sql = "UPDATE author SET Name = '$fname', Surname = '$lname', MediaFocus = '$mediafocus' WHERE Author_ID = {$authorid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully Updated</p>";
		echo "<a href='../update.php?id=".$authorid."'><button type='button'>Back</button></a>";
		echo "<a href='../indexcfpublib.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error while updating record : ". $connect->error;
	}

	$connect->close();

} else if($_POST) {
	$pubname = $_POST['Name'];
	$pubaddress = $_POST['Address'];
	$pubpostcode = $_POST['PostCode'];
	$pubcity = $_POST['City'];
	$pubcountry = $_POST['Country'];
	$pubsize = $_POST['Size'];

	$publisherid = $_POST['Publ_ID'];

	$sql = "UPDATE publishers SET Name = '$pubname', Address = '$pubaddress', PostCode = '$pubpostcode', City = '$pubcity', Country = '$pubcountry', Size = '$pubsize' WHERE Publ_ID = {$publisherid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully Updated</p>";
		echo "<a href='../update.php?id=".$publisherid."'><button type='button'>Back</button></a>";
		echo "<a href='../indexcfpublib.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error while updating record : ". $connect->error;
	}

	$connect->close();

} else if($_POST) {
	$emplcode = $_POST['Empl_Code'];
	$fname = $_POST['Name'];
	$lname = $_POST['Surname'];
	$emailaddress = $_POST['Email'];
	$department = $_POST['Department'];
	$password = $_POST['Password'];

	$employeeid = $_POST['Employee_ID'];

	$sql = "UPDATE employee SET Empl_Code = '$emplcode', Name = '$fname', Surname = '$lname', Email = '$emailaddress', Department = '$department', Password = '$password' WHERE Employee_ID = {$employeeid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully Updated</p>";
		echo "<a href='../update.php?id=".$employeeid."'><button type='button'>Back</button></a>";
		echo "<a href='../indexcfpublib.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error while updating record : ". $connect->error;
	}

	$connect->close();

} else ($_POST) {
	$genrename = $_POST['GenreName'];

	$genresid = $_POST['Genres_ID'];

	$sql = "UPDATE genres SET GenresName = '$genrename' WHERE Genres_ID = {$genresid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully Updated</p>";
		echo "<a href='../update.php?id=".$genresid."'><button type='button'>Back</button></a>";
		echo "<a href='../indexcfpublib.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error while updating record : ". $connect->error;
	}

	$connect->close();

}

?>