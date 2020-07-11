 <?php
session_start();

$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');

$name=$_POST['user'];
$pass=$_POST['password'];

 $s = "select * from student where user = '$name' && password='$pass'";

$k = "select * from staff where user = '$name' && password='$pass'";

$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);

$result1= mysqli_query($con,$k);
$num1=mysqli_num_rows($result1);

if($num==1){
$_SESSION['username']=$name;  
 header('location:student.php');
}
elseif($num1==1){
$_SESSION['username']=$name;  
 header('location:staff.php');
}
else{
$_SESSION['message']="Invalid username or password";  
 header('location:index.php');
}

?>