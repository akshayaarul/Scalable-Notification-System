
<?php

session_start();

$username= $_SESSION['username'];



$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');
 

 $s = "select username,message,sent,created_date from notificationn where username = '$username' order by created_date desc";
$result= mysqli_query($con,$s);

$val = $_SESSION["lastseenid"];
$name = $_SESSION["username"];


// update last seen id in last seen table so that from next time, it will pick the reords greater than this id.
$updatelastidquery = "UPDATE lastseen SET id = '$val' WHERE username = '$name' ";
$updatelastidfinal = mysqli_query($con,$updatelastidquery);

$test=array();


while ($row = mysqli_fetch_row($result)) {
$test[]=$row;
}


?>
<head>
<style>
body{
 overflow: hidden; 
}
  .bg{
overflow: auto;
              background-image:url("inbox_bg.jpg");
             background-repeat: no-repeat, repeat;
             background-position: center;
             height: 100%;
             padding-left: 150px;
             padding-top: 10px;
            background-size: cover;
            
            }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
 

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2{
text-align: center;
}

h1{
     
     text-align: center;
     padding-right:200px;
    
     text-transform: uppercase;
    }
</style>
</head>
<body>
<div class="bg">
<div class="form">
<h1>Notification</h1>
</div>

<div style="overflow-x:auto;">
<table align="center">
  <tr>
    <th>SENT USER</th>
    <th>MESSAGE</th>
    <th>DATE AND TIME</th>
  </tr>

 <?php foreach($test as $key=>$value): ?>
  <tr>
  
    <td> <?php echo $value[2]?> </td>
    <td> <?php echo $value[1]?> </td>
     <td> <?php echo $value[3]?> </td>
    
  </tr>
<?php endforeach; ?>
  
 
</table>
<a style="padding-left:860px"; href="student.php">Back</a>
</div>
</div>
</body>
