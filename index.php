<?php 
session_start();

if (!isset($_SESSION['message'])) {
$_SESSION['message'] ="";
}
?>
<html>
<head>
<style>
body{
          background-image:url("login_bg.jpg");
          background-repeat: no-repeat, repeat;
          height: 700px;
          background-position: center;
          background-size: cover;
           position: relative;
           padding-right: 150px;
         }
</style>
        <title> User Login and Registration </title>
        <link rel="stylesheet" type="text/css" href="sty.css">
        <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="login-box">
     <div class="row">
     <div class="col-md-6 login-right">
<h4 style="color:red"><?php echo $_SESSION['message'] ?></h4>
<br/>
         <h2> Login </h2>

         <form action="login_validation.php" method="post">
         <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class="form-control" required>
              </div>
         <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
</div>
             <button type="submit" class="btn btn-primary">Login</button> 
            
</form>
               <a href="register_framework.php" >Not a member ? Sign up</a> 
         </div>
        
</div>
</div>
</body>
</html>