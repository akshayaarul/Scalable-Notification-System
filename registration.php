<?php
session_start();

$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');

$name=$_POST['user'];
$pass=$_POST['password'];
$mail=$_POST['email'];
$dept=$_POST['department'];
$type=$_POST['designation'];


if($type=='student'){
 $s = "select * from student where user = '$name'";

$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);
 

if($num==1){
echo" username Already Taken";
}else{

$reg=" insert into student (user,password,email,department,designation) values('$name','$pass','$mail','$dept','$type')";
$lastseen=" insert into lastseen (username,id) values('$name',0)";


mysqli_query($con,$reg);
mysqli_query($con,$lastseen);
header('location:index.php');

}
}

else
{
$s = "select * from staff where user = '$name'";

$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);
 

if($num==1){
echo" username Already Taken";
}else{

$reg=" insert into staff (user,password,email,department,designation) values('$name','$pass','$mail','$dept','$type')";

mysqli_query($con,$reg);
header('location:index.php');
}
}
?>