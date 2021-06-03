<html>
<body bgcolor="lavender">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$var=mysql_query("SELECT * from patient");
echo"<table border size=1>";
echo"<tr><th>d_ssn</th> <th> p_ssn</th> <th>p_name</th> <th>gender</th> <th>age</th>  <th>address</th></tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
}
echo"</table>";

?>
<h4><a href="patientdb.html"><font color="red">click here to go back  </a></font></h4>
<h4><a href="first.html"><font color="red">click here to go back to the home page </a></font></h4>

</body>
</html>