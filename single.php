<?php
session_start();
$user = $_SESSION['username'];
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
<div form="res">Recipient</div>
</br>
<select name="Content">
<option>none</option>

<?php
$con=mysqli_connect('sql101.epizy.com','epiz_26232706','scE5vOgcgAGNMd');
mysqli_select_db($con,'epiz_26232706_test');

$s = "select user from student";
$result= mysqli_query($con,$s);
//$kek=mysqli_fetch_row($result);
//echo $kek[0];
while ($row = mysqli_fetch_row($result)) {
    //printf ("%s \n", $row[0]);
echo "<option>$row[0]</option>";
  }
?>
</select>


<div class="form-group">
            <label><div class="grp">Message</div></label>
            <input type="text" name="message" class="form-control" required>
     </div>

<input type="submit" name="submit" value="Send" />
<a href="staff.php">Back</a>
</form>
<?php



$selected_val="";
if(isset($_POST['submit'])){
$mess=$_POST['message'];
$selected_val = $_POST['Content'];  // Storing Selected Value In Variable


$servername = "sql101.epizy.com";
$username = "epiz_26232706";
$password = "scE5vOgcgAGNMd";
$dbname = "epiz_26232706_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO notificationn (username,message,sent)
VALUES ('{$selected_val}', '$mess','{$user}')";


if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

</div>
        
</div>
</div>
</body>
</html>