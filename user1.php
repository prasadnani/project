<?php
$caseid=$_POST['t1'];
$password = $pwd=$_POST['t2'];

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($caseid)) {
		$nameErr = "Name is required";
	  } else {
		$sql="select * from complaint where caseid ='$caseid'";
        $result=mysqli_query($con,$sql) or die("error at execution");
		if (empty($result)){
		$nameErr = "Incurrect Case Id";
		}
	  }
	  
	 if (empty($password)) {
		$nameErr = "Name is required";
	  } else {
		$sql="select * from complaint where caseid ='$caseid' and password ='$password'";
        $result=mysqli_query($con,$sql) or die("error at execution");
		if (empty($result)){
		$nameErr = "Incurrect Password";
		}
	  }
}*/

$caseid=$_POST['t1'];
$con=mysqli_connect('localhost','root','','reg')or die('error at connection');
$sql="select * from complaint where caseid ='$caseid'";
$result=mysqli_query($con,$sql) or die("error at execution");
echo "<table align=center border=1>
			<tr>
				<th>caseid</td>
				<th>status</td>
			</tr>";	
while($row=mysqli_fetch_row($result))
{
echo
			"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
			</tr>";
}
echo"</table>"
?>
					
				
				
				
				
 