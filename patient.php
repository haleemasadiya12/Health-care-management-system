<html>
<body bgcolor="lavender">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$d_ssn=$_REQUEST['d_ssn'];
$p_ssn=$_REQUEST['p_ssn'];
$p_name=$_REQUEST['p_name'];
$p_gender=$_REQUEST['p_gender'];
$p_age=$_REQUEST['p_age'];
$p_address=$_REQUEST['p_address'];


$query="INSERT INTO patient VALUES('$d_ssn','$p_ssn','$p_name','$p_gender','$p_age','$p_address')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!!";

$var=mysql_query("SELECT * from patient");
echo"<table border size=1>";
echo"<tr><th>d_ssn</th> <th> p_ssn</th> <th>p_name</th> <th>gender</th> <th>age</th><th>address</th></tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="patientdb.html">click here to go back to the patient's data base</a></font></h4>
<h4><font color="cyan"><a href="first.html">click here to go back to the home page </a></font></h4>

</body>
</html>