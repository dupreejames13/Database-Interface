<?php
 $db = mysqli_connect('localhost','jtd5251','tzPtmN6nKdoRlKBF','jtd5251')
 or die('Error connecting to MySQL server.');

$id = $_GET['id']; // get id through query url

$qry = mysqli_query($db,"select * from Books where Book_ID=$id");

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) // when click on Update button
{
    $title = $_POST['title'];
    $author = $_POST['author'];
    $pageCount = $_POST['pageCount'];
	
    $edit = mysqli_query($db,
	"
	update Books 
	set Book_Title='$title',
	Book_Author='$author',
	Page_Count='$pageCount'
	where Book_ID='$id'
	");
	
	//$edit = mysqli_query($db,"update Books set Book_Title='Success', Book_Author='Success', Page_Count = '123' where Book_ID='3'"); //testing purposes
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:homepageTest.php"); // redirects to homepage
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Edit Data</h3>

<form method="POST">
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter book title" Required>
  <input type="text" name="author" value="<?php echo $data['author'] ?>" placeholder="Enter author" Required>
  <input type="text" name="pageCount" value="<?php echo $data['pageCount'] ?>" placeholder="Enter page count" Required>
  <input type="submit" name="update" value="Update">
</form>