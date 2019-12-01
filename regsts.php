<?php
$con=mysqli_connect('localhost','root','','reg') or die('error at connection');
$caseid=$_POST['t1'];
$sts=$_POST['t2'];
$query="update user set status='$sts' where caseid=$caseid";
if (mysqli_query($con,$query))
{
header('Location:page1.html');
} 
else
 {
echo "Please try again";
}
?>