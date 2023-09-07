<?php
$a=$_POST['name'];
$b=$_POST['psw'];
$c=$_POST['ename'];
$d=$_POST['phnum'];
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password);
if(!$con)
{
    die("Connection failed");
}
mysqli_select_db($con,"jd");
$str="insert into user_details(username,password,email,phnum) values('$a','$b','$c','$d');";
mysqli_query($con,$str);
header('Location:signin.html');   
?>