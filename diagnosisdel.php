<html>
<body bgcolor="palegreen" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$diagnosis_id=$_REQUEST['diagnosis_id'];


$result1=mysql_query("SELECT diagnosis_id from diagnosis where diagnosis_id='$diagnosis_id'");
$row1=mysql_fetch_array($result1);

if($row1!=0){

$query="delete from diagnosis where diagnosis_id='$diagnosis_id'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";


$var=mysql_query("SELECT * from diagnosis");
echo"<table border size=2>";
echo"<tr><th>diagnosis_id</th> <th>category</th><th>d_ssn</th><th>p_ssn</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
}
echo"</table>";
}else{

echo "Invalid Diagnosis ID !!!!";

}

?>
<h4><font color="cyan"><a href="diagnosisdb.html">Click Here To Go To Diagnosis Database</a></font></h4>

<h4><font color="cyan"><a href="first.html">Click Here To Go To Home Page </a></font></h4>

</body>
</html>