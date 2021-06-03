<html>
<body bgcolor="Khaki">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$var=mysql_query("SELECT * from pay_check");
echo"<table border size=1>";
echo"<tr><th>d_ssn</th> <th>chk_num</th> <th>salary</th>  <th>pay_date</th> <th>totalsalary</th></tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> <td>$arr[5]</td></tr>";
}
echo"</table>";

?>
<h4><a href="pay_checkinf.html"><font color="red">Click Here To Go Back</a></font></h4>
<h4><a href="first.html"><font color="red">Click Here To Go Back To Home Page </a></font></h4>
</body>
</html>