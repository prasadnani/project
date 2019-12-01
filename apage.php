<?php
$con=mysqli_connect('localhost','root','','reg') or die('error at connection');
$name=$_POST['t1'];
$pwd=$_POST['t2'];
$query="insert into admin(userid,Password)
                values('$name','$pwd')";
if (mysqli_query($con,$query))
{
header('Location:areg.html');
} 
else
 {
echo "Please try again";
}
?>