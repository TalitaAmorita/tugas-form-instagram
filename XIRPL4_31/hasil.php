<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registrasi Sukses</title>
</head>

<body background="images/background.png"/>
<center><br/><br/>
<img width=400 height=100 src='images/tulisan.png'/>
<br/><br/><br/>
<table>


<?php
$host= "localhost";
$user= "root";
$password="";
$email= $_POST['email'];
$fullname= $_POST['fullname'];
$username= $_POST['username'];
$password= $_POST['password'];
$password= str_repeat("*", strlen($password));
echo "<tr> <td>Email</td> <td>:</td> <td>$email</td> </tr>";
echo "<tr> <td>Fullname</td> <td>:</td> <td>$fullname</td> </tr>";
echo "<tr> <td>Username</td> <td>:</td> <td>$username</td> </tr>";
echo "<tr> <td>Password</td> <td>:</td> <td>$password</td> </tr>";
?>
</table>
<br/><br/>

<hr width="99%" size="2" color ="black"><br/<br/>
<font face="Arial"><b>Selamat Datang di Instagram</b><br/><br/>

</center>
</font>
</body>
</html>
