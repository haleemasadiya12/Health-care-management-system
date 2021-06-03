<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$pay_id=$_REQUEST['pay_id'];
$p_ssn=$_REQUEST['p_ssn'];
$amount=$_REQUEST['amount'];
$pay_method=$_REQUEST['pay_method'];
$paid_date=$_REQUEST['paid_date'];

$query="INSERT INTO payment VALUES('$pay_id','$amount','$pay_method','$paid_date','$p_ssn')";
$result=mysql_query($query) or die(mysql_error());

echo "data inserted successfully!!!!";

$var=mysql_query("SELECT * from payment");
echo"<table border size=2>";
echo"<tr><th>pay_id</th> <th> amount</th> <th>pay_method</th> <th>paid_date</th> <th>p_ssn </th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="paymentdb.html">click here to go back to the payment data base</a></font></h4>
<h4><font color="cyan"><a href="first.html">click here to go back to the home page </a></font></h4>

</body>
</html>