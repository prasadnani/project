<?php
$con=mysqli_connect('localhost','root','','reg')or die('error at connection');
$cd=$_POST['t1'];
$pass=$_POST['t2'];
$query="select caseid,status from user where caseid='$cd' and password='$pass'";
$result=mysqli_query($con,$query) or die("error at execution");
echo "<h1> case management system for women security</h1>";
if($result->num_rows >0)
{
echo "<table align=center border=1>
		        <tr>
				<th>caseid</th>
				<th>status</th>
			</tr>";	
while($row=mysqli_fetch_row($result))
{
echo
			"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
			</tr>";
	  
}
echo "<table>";
}
else{
	echo "invalid credentials";
	}
?>
					
				
				
				
				
 