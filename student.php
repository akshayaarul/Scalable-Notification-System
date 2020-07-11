<?php
session_start();
?>
<html>
<head>

<title> Home page </title>
         <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style>
    body{
              background-image:url("student_bg.jpg");
             background-repeat: no-repeat, repeat;
             height: 700px;
             padding-left: 150px;
             padding-top: 80px;
             background-size: cover;
             position: relative;
overflow: auto;
            }
     h1{
     color:#fff;
     text-align: left;
     padding-top: 100px;
     padding-bottom: 50px;
     text-transform: uppercase;
    }
a{
     text-align: right;
     padding-bottom: 200px;
     text-transform: uppercase;
   }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  padding-top: 100px;
}

td, th {
  color:white;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


h2{
color:#fff;
padding-bottom: 30px;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
a{
    text-align: right;
   padding-right: 100px;

}

</style>


<?php

    function loadinbox() {
$_SESSION['username']=$_SESSION['username'];  
    header('Location: inbox.php');
  }
if(isset($_GET['doVariable'])){
	loadinbox();
}


$resk=$_SESSION['username'];
$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');


 $s = "select * from student where user = '$resk'";
$result= mysqli_query($con,$s);
$kek=mysqli_fetch_row($result);


// get last seen id so that we can get count of message greater than this number
$lastseenquery = "select id  from lastseen where username = '$resk'";
$lastseenfinal= mysqli_query($con,$lastseenquery);
$lastseen=mysqli_fetch_row($lastseenfinal);


// get count of message
$notification_count = "select count(username) as name from notificationn where username = '$resk' and id>'$lastseen[0]'";
$result1= mysqli_query($con,$notification_count);
$kek1=mysqli_fetch_row($result1);


// get last seen count for updating once it is viewed
$lastidquery = "select id  from notificationn where username = '$resk' and id>'$lastseen[0]' order by id desc limit 1";
$lastidfinal= mysqli_query($con,$lastidquery);
$lastseenid=mysqli_fetch_row($lastidfinal);

$_SESSION['lastseenid']=$lastseenid[0];  





?>

</head>


<body>
 <a href="?doVariable=true" class="notification">
  
  <span>Inbox</span>
  <span class="badge"><?php echo $kek1[0]; ?> </span>
  
  <a class="float-right" href="logout.php"><img src="logout.png" alt="HTML tutorial" style="width:30px;height:30px;"></a>
  
<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
<h2>Personal Details</h2>

<table align="left">
  <tr>
    <th>ID</th>
    <th>INFORMATION</th>
  </tr>
  <tr>
    <td> Name  </td>
    <td>  <?php echo $kek[0]; ?>   </td>
  </tr>
   <tr>
    <td> Mail Id </td>
    <td>  <?php echo $kek[2]; ?>   </td>
  </tr>
   <tr>
    <td> Department</td>
    <td>  <?php echo $kek[3]; ?>   </td>
  </tr>
  <tr>
    <td> Profile Type</td>
    <td>  <?php echo $kek[4]; ?>   </td>
  </tr>
</table>



</body>
</html>
