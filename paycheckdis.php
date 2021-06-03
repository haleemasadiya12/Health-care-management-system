<html>
<body>
<body bgcolor="khaki">
<center>

<hr>



<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('healthcare') or die(mysql_error());

$var=mysql_query("SELECT * FROM pay_check");

echo "<br><br>";

echo "<table border size=1 align=center>";
   echo"<tr><th><font size = 5> d_ssn</font></th><th><font size = 5> chk_num</font> </th><th><font size = 5> salary</font>  </th><th> <font size = 5>pay_date </font></th> <th><font size = 5> net_sal </font> </th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td><font size = 5>$arr[0]</font></td><td><font size = 5>$arr[1]</font> </td> <td><font size = 5>$arr[2]</font> </td> <td><font size = 5>$arr[3]</font> </td> <td><font size = 5>$arr[4]  </tr>";
   } 
   echo"</table>";
   

   
$p0=mysql_query("call Totalsalary(@out);");
$rs=mysql_query('SELECT @out');
while ($arr=mysql_fetch_row($rs))
{
	echo '<br><br>';
	echo "<tr><td><font size = 5>Total salary = Rs   $arr[0] </font></td></tr>";
}
	echo "<br><br>";
	echo "<a href = 'pay_checkinf.html'><font color = black size=5pt >  CLICK HERE TO GO BACK</a>";
	echo "<br><br>";
echo "<a href='first.html'><font color = black size=5pt >  CLICK HERE TO GO BACK TO MAIN PAGE</a>";


	?>
	<?php
  
    mysql_close($dbh);
   ?>
     </body>
</html>


