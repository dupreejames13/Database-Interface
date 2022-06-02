
<?php
//check login info
 $db = mysqli_connect('localhost','jtd5251','tzPtmN6nKdoRlKBF','jtd5251')
 or die('Error connecting to MySQL server.');
 $uname = $_POST['uname'];
 $psw = $_POST['psw'];
 
 //$dbuname = mysqli_query($db,"select 'Username' from Logins where login_ID = 1");
 //$dbpsw = mysqli_query($db,"select 'Password' from Logins where login_ID = 1");
 $qry = mysqli_query($db,"select * from Logins");
 $data = mysqli_fetch_array($qry); 
 
 if ($uname != $data['Username'] || $psw != $data['Password']){
	echo 'Incorrect login';
 }
 else{
	header("location:homepage.php"); // redirects to homepage
 }
 // if there were multiple logins, we'd have to loop through each and compare
?>
