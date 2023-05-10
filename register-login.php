<html>
  <head> 
    <title>Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style type="text/css">

<style type="text/css">
        body{ font: 14px sans-serif; 
              background-image: url('C-over-B_purple_logo.png');
              background-repeat: no-repeat;
        }
        .wrapper{ width: 350px; padding: 20px; }
        #aDiv{width: 300px; height: 300px; margin: 0 auto;}
    </style>
</head>
<body>
  <div id="aDiv" class="wrapper">
  <h2>Sign Up</h2>
  <p>Please fill this form to create an account.</p>
<form action="welcome.php" method="POST" onsubmit="return validateForm();">
    <div class="form-group">
       <label>Username</label>
       <input type="text" name="tname" id="username" class="form-control">
       <span class="help-block"></span>  
    </div> 

    <?php
      if (isset($_GET['error']) && $_GET['error'] == 'username_exists') {
        echo "Username already exists. Please try again with a different username.";
      }
    ?>
    <br><br>
    <div class="field-email">
        <div class="form-group">
          <label>Email ID</label>
          <input type="text" name="temail" id="email" class="form-control">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
          <span class="help-block"></span>  
        </div>
  </div>

    <div class="form-group">
       <label>Phone Number</label>
       <input type="text" name="tnumber" id="phoneNumber" class="form-control">
       <span class="help-block"></span>  
    </div>

    <div class="field-password">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="tpass" id="password" class="form-control">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
          <span class="help-block"></span>  
        </div>
    </div><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-default" value="Reset">
    </div>

<p>Already have an account? <a href="customer_login.php">Login here</a>.</p>
</div>
  
  <script>
    function validateForm() {
      var username = document.getElementById("username").value;
      var email = document.getElementById("email").value;
      var phoneNumber = document.getElementById("phoneNumber").value;
      var password = document.getElementById("password").value;

      // Check if username is empty
      if (username == "") {
        alert("Please enter a username");
        return false;
      }
      if (email == "") {
            alert("Please enter your email");
            return false;
        }

        if (phoneN
          umber == "") {
            alert("Please enter your phone number");
            return false;
        }
        if (password == "") {
            alert("Please enter your password");
            return false;
        }
        var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }
        var numberRegex = /^[0-9]+$/;
        if (!numberRegex.test(number)) {
            alert("Please enter a valid phone number");
            return false;
        }

        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if (!passwordRegex.test(password)) {
            alert("Password must be between 6 to 20 characters and include at least one numeric digit, one uppercase and one lowercase letter");
            return false;
        }

        return true;
    }
  </script>
</body>
</html>