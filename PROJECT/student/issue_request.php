<?php
require('dbconn.php');

$id=$_GET['id'];

$username=$_SESSION['UserName'];

$sql="insert into LMS.record (UserName,BookId,Time) values ('$username','$id', curtime())";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=book.php", true, 303);

}




?>