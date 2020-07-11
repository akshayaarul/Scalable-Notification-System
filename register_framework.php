<html>
<head>
        <title> User Login and Registration </title>
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
</style>
          <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box">
     <div class="row">
     <div class="col-md-6 login-right">
         <h2> Register </h2>
         <form action="registration.php" method="post">
         <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class="form-control" required>
              </div>
         <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
        </div>

       <div class="form-group">
              <label>email</label>
              <input type="text" name="email" class="form-control" required>
        </div>

      <div class="form-group">
              <label>department (EIE/EEE/CSE/IT) </label>
              <input type="text" name="department" class="form-control" required>
        </div>

     <div class="form-group">  
           <label>student/staff</label>
              <input type="text" name="designation" class="form-control" required>
               
   </div>
             <button type="submit" class="btn btn-primary">Register</button> 
            
</form>
         </div> 
</div>
</div>
</body>
</html>