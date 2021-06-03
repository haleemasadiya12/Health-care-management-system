<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());


$var=mysql_query("SELECT * from prescription");
echo"<table border size=1>";
echo"<tr><th>prescription_id</th> <th>medicine_quantity</th><th>medicine_name</th><th>d_ssn</th><th>p_ssn</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
}
echo"</table>";
?>
<h4><font color="cyan"><a href="prescriptiondb.html">click here to go back to the prescription database</a></font></h4>
<h4><font color="cyan"><a href="first.html">click here to go back to the home page </a></font></h4>
</body>
</html>