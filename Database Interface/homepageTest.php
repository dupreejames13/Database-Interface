<?php
//check login info
 $db = mysqli_connect('localhost','jtd5251','tzPtmN6nKdoRlKBF','jtd5251')
 or die('Error connecting to MySQL server.');
?>

<!doctype hmtl>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet"/>
    <title>Books</title>
</head>
<body>
<div class="banner" style="padding:15px; text-align:center;">
<div class="banner-content">
<body style="background-color:rgb(201,255,229);">
<p style="font-family: Comic Sans MS">
<h1>Persons</h1>
<p>This page contains all of the books currently held within the library.</p>
<a href="https://google.com" class="btn btn-info">Click Here to Search Destinations Online</a>
</div>
</div>
<p>
<style>
     .button {
      background-color:teal;
      border-color:white;
      }
    </style>
<a href="create.php" type="button" class="btn btn-sm btn-info">Add Person</a>

</p>

<form>
    <div class="input-group mb-3">
        <input type="text" class="form-control"
               placeholder="Search for a person"
               name="search" value="<?php echo $search ?>">
               
        <div class="input-group-append">
            <button class="btn btn-sm btn-info" type="submit">Search</button>
        </div>
                
    </div>
</form>





<h2>Persons</h2>

<form action="add.php"method="POST">
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter book title" Required>
  <input type="text" name="author" value="<?php echo $data['author'] ?>" placeholder="Enter author" Required>
  <input type="text" name="pageCount" value="<?php echo $data['pageCount'] ?>" placeholder="Enter page count" Required>
  <input type="submit" name="Insert" value="Insert">
</form><br><br>

<table border="1">
  <tr>
    <td>PersonID</td>
    <td>First Name</td>
    <td>Last Name</td>
	<td>Email</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from Person"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['personID']; ?></td>
    <td><?php echo $data['firstName']; ?></td>
    <td><?php echo $data['lastName']; ?></td>    
	<td><?php echo $data['email']; ?></td>  
    <td><a href="edit.php?id=<?php echo $data['personID']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['personID']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>





