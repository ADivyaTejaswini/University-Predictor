<?php
$a=$_POST['exam'];
$b=$_POST['rank'];
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password);
if(!$con)
{
    die("Connection failed");
}
mysqli_select_db($con,"jd");
$str="select college_name from clg_details where $b between min_rank and max_rank";
$res=mysqli_query($con,$str);
while($row=mysqli_fetch_assoc($res))
{
    echo"<h3 style='color:white;'>";
    echo $row['college_name'];
    echo"</h3>";
}
?>