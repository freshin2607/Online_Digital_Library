<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$username=$_GET['id2'];

$sql="select Branch from LMS.user where UserName='$username'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$branch=$row['Branch'];



if($branch == 'COMPS' || $category == 'IT' )
{$sql1="update LMS.record set Due_Date=date_add(Due_Date,interval 60 day),Renewals_left=0 where BookId='$bookid' and UserName='$username'";
 
if($conn->query($sql1) === TRUE)
{$sql3="delete from LMS.renew where BookId='$bookid' and UserName='$username'";
 $result=$conn->query($sql3);
 
 $sql5="insert into LMS.message (UserName,Msg,Date,Time) values ('$username','Your request for renewal of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=renew_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=renew_requests.php", true, 303);

}
}
else
{$sql2="update LMS.record set Due_Date=date_add(Due_Date,interval 180 day),Renewals_left=0 where BookId='$bookid' and UserName='$username'";

if($conn->query($sql2) === TRUE)
{$sql4="delete from LMS.renew where BookId='$bookid' and UserName='$username'";
 $result=$conn->query($sql4);
 $sql6="insert into LMS.message (UserName,Msg,Date,Time) values ('$username','Your request for renewal of BookId: $bookid has been accepted',curdate(),curtime())";
 $result=$conn->query($sql6);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=renew_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=renew_requests.php", true, 303);

}
}



?>