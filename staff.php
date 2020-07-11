<?php

session_start();

$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');
$resk = $_SESSION['username']; 
 $s = "select * from staff where user = '$resk'";
$result= mysqli_query($con,$s);
$ans=mysqli_fetch_row($result);

?>
<html>
<head>
<body>
<title> Home page </title>
  <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style>
    body{
              background-image:url("staff_bg.jpg");
             background-repeat: no-repeat, repeat;
             height: 700px;
             padding-left: 150px;
             padding-top: 80px;
             background-size: cover;
             position: relative;
            }
h1{
     
     text-align: left;
     padding-top: 50px;
     padding-left: 80px;
     color:#fff;
     text-transform: uppercase;
}
a{
    text-align: right;
  //   padding-bottom: 200px;
   padding-right: 100px;
//     text-transform: uppercase;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  padding-top: 100px;
  padding-left: 80px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
  color:#fff;
}


h2{
padding-bottom: 30px;
padding-top:30px;
padding-left: 80px;
     color:#fff;

}

</style>
</head>
</head>
 
<a  style="padding-bottom:100px; padding-right:250px;"class="float-right" href="logout.php"><img src="logout.png" alt="HTML tutorial" style="width:30px;height:30px;"></a>
 <a style="padding-bottom:100px; padding-right:50px;"class="float-right" href="message.php"><img src="gmail.png" alt="HTML tutorial" style="width:30px;height:30px;"></a>
  
  <h1>Welcome <?php echo $_SESSION['username']; 
    ?>
 </h1>



<h2>Personal Details</h2>
<table style="margin-top:10px; margin-left:80px;">
  <tr>
    <th>ID</th>
    <th>INFORMATION</th>
  </tr>
  <tr>
    <td> Name  </td>
    <td>  <?php echo $ans[0]; ?>   </td>
  </tr>
   <tr>
    <td> Mail Id </td>
    <td>  <?php echo $ans[2]; ?>   </td>
  </tr>
   <tr>
    <td> Department</td>
    <td>  <?php echo $ans[3]; ?>   </td>
  </tr>
  <tr>
    <td> Profile Type</td>
    <td>  <?php echo $ans[4]; ?>   </td>
  </tr>
</table>
</div>
</body>
</html>
  
    