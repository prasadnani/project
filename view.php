<?php
$con=mysqli_connect('localhost','root','','reg')or die('error at connection');
$sql="select caseid,name,complaint description from user";
$result=mysqli_query($con,$sql) or die("error at execution");
echo "<h1> case management system for women security</h1>";
echo "<table align=center border=1>
		    <tr>
				<th>caseid</th>
				<th>name</th>
				<th>complaint</th>
			</tr>";	
while($row=mysqli_fetch_row($result))
{
echo
			"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
			</tr>";
	  
}
echo "<table>"
?>
					
				
				
				
				
 