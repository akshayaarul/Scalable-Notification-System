<?php
session_start();
$user= $_SESSION['username'];
?>
<html>

<head>
  
<title> Sending message</title>
        <link rel="stylesheet" type="text/css" href="sty.css">
<style>
    body{
              background-image:url("Register_bg.jpg");
              background-repeat: no-repeat, repeat;
             height: 700px;
             padding-left: 150px;
             padding-top: 80px;
             background-size: cover;
             position: relative;
         }
 .login-box{
 max-width: 600px;
 float: none;
 margin: 100px auto;
}
.grp{
padding-top:30px;
padding-bottom:10px;
}
.res{
padding-top=100px;
padding-bottom=10px;
}

}
</style>
          <link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>


<body>
<div class="container">
    <div class="login-box">
     <div class="row">
       <form action="#" method="post">

<div class="form-group">
            <label><div class="grp">Message</div></label>
            <input type="text" name="message" class="form-control" required>
     </div>

<input type="submit" name="submit" value="Send" />
<a href="staff.php">Back</a>
 </form> 
<?php

if(isset($_POST['submit'])){
$mess=$_POST['message'];

$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');



 $s = "select user from student";
$result= mysqli_query($con,$s);

while ($array = mysqli_fetch_array($result)) 
{
    $temp=$array['user'];
    $query="INSERT INTO notificationn(username,message,sent) VALUES('$temp','$mess','{$user}')";
    mysqli_query($con,$query);
}
}
?>
</div>
</div>
</body>
</html>