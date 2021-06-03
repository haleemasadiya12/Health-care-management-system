<html>
<body bgcolor="lavender">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$pay_id=$_REQUEST['pay_id'];



$result1=mysql_query("SELECT  pay_id from payment where pay_id='$pay_id'");
$row1=mysql_fetch_array($result1);

if($row1!=0){

$query="delete from payment where pay_id='$pay_id'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$$var=mysql_query("SELECT * from payment");
echo"<table border size=2>";
echo"<tr><th>pay_id</th> <th> amount</th> <th>pay_method</th> <th>paid_date</th> <th>p_ssn </th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> <td>$arr[4]</td></tr>";
}
echo"</table>";
}else{
echo "Invalid Transaction Number  !!!!";

}

?>
<h4><a href="paymentdb.html"><font color="red">click here to go back to the payment data base</a></font></h4>
<h4><a href="first.html"><font color="red">click here to go back to the home page </a></font></h4>
</body>
</html>