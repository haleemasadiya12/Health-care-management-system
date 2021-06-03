<body bgcolor="lightblue" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$prescription_id=$_REQUEST['prescription_id'];
$medicine_quantity=$_REQUEST['medicine_quantity'];
$medicine_name=$_REQUEST['medicine_name'];
$d_ssn=$_REQUEST['d_ssn'];
$p_ssn=$_REQUEST['p_ssn'];


$query="INSERT INTO prescription VALUES('$prescription_id','$medicine_quantity','$medicine_name','$d_ssn','$p_ssn')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!!";

$var=mysql_query("SELECT * from prescription");
echo"<table border size=2>";
echo"<tr><th>prescription_id</th> <th>medicine_quantity</th><th>medicine_name</th><th>d_ssn</th><th>p_ssn</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="prescriptiondb.html">click here to go back to the doctor's data base</a></font></h4>
<h4><font color="cyan"><a href="first.html">click here to go back to the home page </a></font></h4>

</body>
</html>