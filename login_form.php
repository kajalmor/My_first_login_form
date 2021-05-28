<?php
$server="localhost";
$user="root";
$pass="";
$db="user_login_form";
$mydb=mysqli_connect($server, $user, $pass, $db) or die("Not Connected!");
$name=$_POST['username'];
$password=$_POST['password'];
$query="insert into login values('$name',$password)";
mysqli_query($mydb, $query);
mysqli_close($mydb);
?>