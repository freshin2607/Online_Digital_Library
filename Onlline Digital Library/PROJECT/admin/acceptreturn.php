<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$username=$_GET['id2'];
$dues=$_GET['id3'];

$sql="select Branch from LMS.user where UserName='$username'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$branch=$row['Branch'];




$sql1="update LMS.record set Date_of_Return=curdate(),Dues='$dues' where BookId='$bookid' and UserName='$username'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update LMS.book set Availability=Availability+1 where BookId='$bookid'";
 $result=$conn->query($sql3);
 $sql4="delete from LMS.return where BookId='$bookid' and UserName='$username'";
 $result=$conn->query($sql4);
 $sql6="delete from LMS.renew where BookId='$bookid' and UserName='$username'";
 $result=$conn->query($sql6);
 $sql5="insert into LMS.message (UserName,Msg,Date,Time) values ('$username','Your request for return of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=return_requests.php", true, 303);

}





?>