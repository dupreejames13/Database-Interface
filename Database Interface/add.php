
<?php

 $db = mysqli_connect('localhost','jtd5251','tzPtmN6nKdoRlKBF','jtd5251')
 or die('Error connecting to MySQL server.');
 
$qry = mysqli_query($db,"select * from Books");
$data = mysqli_fetch_array($qry); 

if(isset($_POST['Insert']))
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$pageCount = $_POST['pageCount'];
	
	$add = mysqli_query($db,
	"INSERT INTO `Books`
	(`Book_Title`, `Book_Author`, Page_Count) 
	VALUES 
	('$title','$author',$pageCount)");

	if($add)
	{
		mysqli_close($db);
		header("location:homepageTest.php");
		//echo "SUCCESSSSSSSSSSSSSSSSS!!!!! adding book"; // testing
		exit;	
	}
	else
	{
		echo "Error adding book";
	}
}
?>

