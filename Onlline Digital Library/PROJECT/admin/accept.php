<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$username=$_GET['id2'];

$sql="select Branch from LMS.user where UserName='$username'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$branch=$row['Branch'];



if($branch == 'COMPS' || $branch == 'IT' )
{$sql1="update LMS.record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 60 day),Renewals_left=1 where BookId='$bookid' and UserName='$username'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update LMS.book set Availability=Availability-1 where BookId='$bookid'";
 $result=$conn->query($sql3);
 $sql5="insert into LMS.message (UserName,Msg,Date,Time) values ('$username','Your request for issue of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=issue_requests.php", true, 303);

}
}
else
{$sql2="update LMS.record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 180 day),Renewals_left=1 where BookId='$bookid' and UserName='$username'";

if($conn->query($sql2) === TRUE)
{$sql4="update LMS.book set Availability=Availability-1 where BookId='$bookid'";
 $result=$conn->query($sql4);
 $sql6="insert into LMS.message (UserName,Msg,Date,Time) values ('$username','Your request for issue of BookId: $bookid has been accepted',curdate(),curtime())";
 $result=$conn->query($sql6);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:1; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=issue_requests.php", true, 303);

}
}



?>