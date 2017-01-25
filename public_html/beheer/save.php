<?php include("beheersql.php");

$tbl_name=$_GET['tbl_name'];
$id=$_GET['id'];
$name=$_GET['name'];

// Get values from form 
$text=mysqli_real_escape_string($con,$_POST['text']);

// Insert data into mysql 
$sql="UPDATE $tbl_name SET text='$text' WHERE id='$id'";

$result=mysqli_query($con,$sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
header ("Location: ./");
}

else {
echo "ERROR";
}

?>