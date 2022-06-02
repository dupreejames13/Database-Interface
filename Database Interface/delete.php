<?php

 $db = mysqli_connect('localhost','jtd5251','tzPtmN6nKdoRlKBF','jtd5251')
 or die('Error connecting to MySQL server.');
 
$id = $_GET['id'];
$del = mysqli_query($db,"delete from Books where Book_ID=$id");
//$del = mysqli_query($db,"delete from Books where Book_ID = '2'"); // testing purposes

if($del)
{
    mysqli_close($db);
    header("location:homepageTest.php");
    exit;	
}
else
{
    echo "Error deleting book";
}
?>