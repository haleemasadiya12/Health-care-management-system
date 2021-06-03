<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('healthcare') or die(mysql_error());
 if(isset($_POST['username'])){
	 $uname=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="select *from admin where user='".$uname."'and password='".$password."' limit 1";
	 $result=mysql_query($sql);
	 if(mysql_num_rows($result)==1)
	 {
		
		 echo "SUCESSFUL LOGIN !!!!";
		 echo "<br><br>";
		 echo "<hr>";
		  echo "<a href='first.html'>CLICK HERE TO VIEW DETAILS</a>";
 
		 exit();
	 }
	 else
	 {
		 echo "INVALID LOGIN"; 
		 echo "<br><br>";
		 echo "<a href = 'index.php'> CLICK HERE TO GO BACK</a>";
		 exit();
	 }
 }
 ?>
 


<html>
<style>

form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width:50% 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius:25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body style="background-image:url('image.jpg')">
 <font size="4" color="white">
<h2 size="6" align ="center">Login Form</h2>
</font>
<form  method="POST" action="#">
  <div class="imgcontainer">
    <font size="5" color="white">
  </div>
 <center>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	<br> 

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<br>
    
    <input type="submit" name="submit"  align="center" value="LOGIN" class="btn-login"/>

	<br>
	<br>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:"crimson">
    <a href="index.php">
    <button type="button" class="cancelbtn">Cancel</button></a>
    	</center>
  </div>
</form>
</font>
</body>
</html>
