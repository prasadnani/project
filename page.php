<?php
$con=mysqli_connect('localhost','root','','reg') or die('error at connection');
$caseid=$_POST['t1'];
$pwd=$_POST['t2'];
$name=$_POST['t3'];
$phn=$_POST['t4'];
$email=$_POST['t5'];
$address=$_POST['t6'];
$aadhar=$_POST['t7'];
$cd=$_POST['t8'];
$doc=$_POST['t9'];
$query="insert into user(caseid,password,name,mobile,email,address,aadhar,complaint,document) 
                 values('$caseid','$pwd','$name','$phn','$email','$address','$aadhar','$cd','$doc')";

$result=mysqli_query($con,$query) or die("error at execution");
if($result)
{
      header("Location:page.html");
} 
else
 {
      echo "Please try again";
}
//mysqli_close($con);
?>