<html>
<body bgcolor="Bisque " >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$p_ssn=$_REQUEST['p_ssn'];

$result1=mysql_query("SELECT p_ssn from patient where p_ssn='$p_ssn'");
$row1=mysql_fetch_array($result1);

if($row1!=0){

$query="delete from patient where p_ssn='$p_ssn'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from patient");
echo"<table border size=1>";
echo"<tr><th>d_ssn</th> <th> p_ssn</th> <th>p_name</th> <th>gender</th> <th>age</th><th>address</th></tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
}
echo"</table>";

}else{
echo "Invalid Patient SSN  !!!!";

}


?>
<h4><a href="patientdb.html"><font color="red">Click Here To Go Back To The Patient Database</a></font></h4>
<h4><a href="first.html"><font color="red">Click Here To Go Back To  Home Page </a></font></h4>

</body>
</html>