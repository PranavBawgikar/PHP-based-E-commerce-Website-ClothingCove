<div class="box">
  <div class="box-header">
      <center>
          <h1><strong>Login</strong>  </h1>
          <p class="lead"> Already Have An Account...? </p>
          <p class="text-muted"> Provide Your Email Address and Password To Login </p>
      </center>
  </div>
  <form method="post" action="checkout.php">
      <div class="form-group">
          <label> Email </label>
          <input name="c_email" type="text" class="form-control" required>
      </div>
       <div class="form-group">
          <label> Password </label>
          <input name="c_pass" type="password" class="form-control" required>
      </div>
      <div class="text-center">
          <button name="login" value="Login" class="btn btn-primary">
              <i class="fa fa-sign-in"></i> Login
          </button>
      </div>
  </form>
  <center>
     <a href="customer_register.php">
         <h3> No Account? Register here.</h3>
     </a> 
  </center>
</div>

<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['c_email'];
    
    $customer_pass = $_POST['c_pass'];
    
    $select_customer = "select * from customer where email='$customer_email' AND password='$customer_pass'";
    
    $run_customer = mysqli_query($conn,$select_customer);
    
    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    $select_cart = "select * from cart where ip_add='$get_ip'";
    
    $run_cart = mysqli_query($conn,$select_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_customer==0){
        
        echo "<script>alert('Your email or password is wrong')</script>";
        
        exit();
        
    }
    
    if($check_customer==1 AND $check_cart==0){
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }else{
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    
}
?>