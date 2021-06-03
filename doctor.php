<html>

<body  bgcolor="PaleGreen" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$d_ssn=$_REQUEST['d_ssn'];
$d_name=$_REQUEST['d_name'];
$d_gender=$_REQUEST['d_gender'];
$d_age=$_REQUEST['d_age'];
$d_posi=$_REQUEST['d_posi'];
$d_phone=$_REQUEST['d_phone'];
$d_address=$_REQUEST['d_address'];


$query ="INSERT INTO doctor VALUES('$d_ssn','$d_name','$d_gender','$d_age','$d_posi','$d_phone','$d_address')";
$result=mysql_query($query) or die(mysql_error());
if($result!=0)
{
	echo"data inserted successfully";

$var=mysql_query("SELECT * from doctor");

echo"<table border size=1>";
echo"<tr><th>D_SSN</th> <th> D_Name</th> <th>Gender</th> <th>Age</th> <th>Position</th> <th>Phone</th> <th>Address</th></tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td></tr>";
}
echo"</table>";
}
else {
	echo"insert the data";
}

?>
<h4><a href="doctordb.html"><font color="red">Click Here To Go Back To Doctor's Database</a></font></h4>
<h4><a href="first.html"><font color="red">Click Here To Go Back To  Home Page </a></font></h4>

</body>
</html>