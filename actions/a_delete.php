<?php 

require_once 'db_connect.php';

if($_POST) {
	$mediaid = $_POST['Media_ID'];

	$sql = "DELETE FROM media WHERE Media_ID = {$mediaid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Record Successfully Deleted!!</p>";
		echo "<a href='../viewmedia.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

} else if($_POST) {
	$authorid = $_POST['Author_ID'];

	$sql = "DELETE FROM author WHERE Author_ID = {$authorid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Record Successfully Deleted!!</p>";
		echo "<a href='../viewauthorsandgenres.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

}	else if($_POST) {
	$publisherid = $_POST['Publ_ID'];

	$sql = "DELETE FROM publishers WHERE Publ_ID = {$publisherid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Record Successfully Deleted!!</p>";
		echo "<a href='../viewpublishers.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

} else if($_POST) {
	$employeeid = $_POST['Employee_ID'];

	$sql = "DELETE FROM employee WHERE Employee_ID = {$employeeid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Record Successfully Deleted!!</p>";
		echo "<a href='../viewemployee.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

} else ($_POST) {
	$genresid = $_POST['Genres_ID'];

	$sql = "DELETE FROM genres WHERE Genres_ID = {$genresid}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Record Successfully Deleted!!</p>";
		echo "<a href='../viewgenres.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}
?>
