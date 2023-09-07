<?php
$a=$_POST['ename'];
$b=$_POST['psw'];
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password);
if(!$con)
{
    die("Connection failed");
}
mysqli_select_db($con,"jd");
$str="select * from user_details where email='$a';";
$res=mysqli_query($con,$str);
$row=mysqli_fetch_assoc($res);
if($row['password']==$b)
{
    if(mysqli_num_rows($res)>0)
    {
        header('Location:land.html');
    }
}
else {
    header('Location:wrgu.html');
}
?>