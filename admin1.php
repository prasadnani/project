<?php
$con=mysqli_connect('localhost','root','','reg')or die('error at connection');
$user=$_POST['t1'];
$pass=$_POST['t2'];
$query="select userid,password from admin where userid='$user' and password='$pass'";
$res=mysqli_query($con,$query) or die('error at execution');
$i=mysqli_fetch_row($res);
 if($i[0]==$user && $i[1]==$pass)
 {
  header('Location:w.html');
 }
 else
  echo "invalid credentials";
?>