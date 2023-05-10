<html>
  <head> 
    <title>Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">

    <style type="text/css">
        body{ font: 14px sans-serif; }
          .wrapper{ width: 350px; padding: 20px; }
          #aDiv{width: 300px; height: 300px; margin: 0 auto;}
    </style>
</head>
<body>
     <div id="aDiv" class="wrapper">
         <h2>Login</h2>
              <p>Please fill this form to Log into your account.</p>

  <form action="welcome1.php" method="POST">
    <div class="form-group">
       <label>Email ID</label>
       <input type="text" name="temail" class="form-control">
       <span class="help-block"></span>  
    </div> 
    <div class="form-group">
       <label>Password</label>
       <input type="text" name="tpass" class="form-control">
       <span class="help-block"></span>  
    </div> 
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="submit	">
        <input type="reset" class="btn btn-default" value="Reset">
    </div>
    <p>Don't have an account? <a href="register-login.html">Register here</a>.</p>
</div>
</body>
</html>