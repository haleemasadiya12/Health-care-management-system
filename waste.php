<html>
<body bgcolor="PapayaWhip" >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('healthcare') or die (mysql_error());

$diagnosis_id=$_REQUEST['diagnosis_id'];
$category=$_REQUEST['category'];
$d_ssn=$_REQUEST['d_ssn'];
$p_ssn=$_REQUEST['p_ssn'];

$result1=mysql_query("SELECT  diagnosis_id from diagnosis where diagnosis_id='$diagnosis_id'");
	$row1= mysql_fetch_array($result1);

if($row1!=0){

$query="update diagnosis set diagnosis_id='$diagnosis_id',category='$category',d_ssn='$d_ssn',p_ssn='$p_ssn' where diagnosis_id='$diagnosis_id'";
$result=mysql_query($query) or die(mysql_error());
echo "data updated successfully!!!!";

$var=mysql_query("SELECT * from diagnosis");
echo"<table border size=2>";
echo"<tr><th>diagnosis_id</th> <th>category</th><th>d_ssn</th><th>p_ssn</th> </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
}
echo"</table>";
}else{
	echo "CANNOT UPDATE !!!!";
}
?>
<h4><a href="diagnosisdb.html"><font color="red">Click Here To Go To Diagnosis Database</font></a></h4>
<h4><a href="first.html"><font color="red">Click Here To Go To Home Page</font></a></h4>

</body>
</html>





