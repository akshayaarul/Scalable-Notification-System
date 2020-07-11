<?php
session_start();
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
<div form="res">Choose Recipient Type</div>
</br>

<select name="whom">
    <option>none</option>
    <option value=Single>Single</option>
    <option value="Subset">Subset</option>
    <option value="Everyone">Everyone</option>
  </select>
<input type="submit" name="submit" value="Proceed" />
</form>
<?php
$user="";
if(isset($_POST['submit'])){
$user=$_POST['whom']; 
if($user=='Single'){
  header('location:single.php');
}
if($user=='Subset'){
header('location:subset.php');
}
if($user=='Everyone'){
header('location:everyone.php');
}
}
?>

</div>
        
</div>

</body>
</html>