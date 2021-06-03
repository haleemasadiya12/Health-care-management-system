<html>
<title>Pay Cheque Database</title>
</head>
<body style="background-image:url('pay_check.PNG')">
<hr>
<h1 align="center"><font color="black" size=20 face="Imprint MT Shadow">Database Insertion Of  Pay Cheque </font></h1>
<hr>

<br>
<hr>
<?php
if(isset($_POST['add'])){
$con=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('healthcare') or die(mysql_error());
//$con=mysql_connect("localhost","root","","healthcare") or die("cannot connect".mysql_error());
if($con)


echo "<br><br>";

$d_ssn=$_REQUEST['d_ssn'];
$chk_num=$_REQUEST['chk_num'];
$salary=$_REQUEST['salary'];
$pay_date=$_REQUEST['pay_date'];
$net_sal=NULL;



$sql="INSERT INTO pay_check (d_ssn,chk_num,salary,pay_date)VALUES('$d_ssn','$chk_num','$salary','$pay_date')";

$res=mysql_query($sql);
if(!$res)
{
   echo "not entered".mysql_error($con);
   
}
echo "<font size = 5>DATA INSERTED SUCESSFULLY!!!! <br></font></th></tr>";
echo "<br><br>";
echo "<a href='paycheckdis.php'><font color = black size=5pt >  CLICK TO VIEW RECORD</a>";
echo "<br><br>";
echo "<a href=home.html><font color = black size=5pt >  CLICK HERE TO GO BACK TO HOME PAGE</a>";
}
else{
?>


<form method="post" action ="paycheck1.php">
<table align ="center" cellpadding="5">
<tr>
<td><font size = 5>d_ssn:  </font></td>
<td><input type="text" name="d_ssn" id="d_ssn" required="required" ></td>
</tr>

<tr>
<td><font size = 5>chk_num:  </font></td>
<td><input type="text" name="chk_num" id="chk_num" required="required" ></td>
</tr>

<tr>
<td><font size = 5>salary:  </font></td>
<td><input type="text" name="salary" id="salary" required="required" ></td>
</tr>


<td><font size = 5>pay_date:  </font></td>
<td><input type="text" name="pay_date" id="pay_date" required="required" ></td>
</tr>

</table>

<tr>
<br>
<center>
<td><input type="submit" align ="center" name="add" id="add" value="insert" ></td>
</tr>
</center>




</form>
<?php
}
?> 


