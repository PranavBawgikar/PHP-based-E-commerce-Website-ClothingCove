<?php 
    
    $active='Contact';
    include("includes/header.php");

?>
  
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul>
           </div>
           <div class="col-md-3">
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           <div class="col-md-9">
               <div class="box">
                   <div class="box-header">
                       <center>
                           <h2> Feel free to Contact Us</h2>
                           <p class="text-muted">
                               If You Have Any Questions, Feel Free To Contact Us. Our Customer Service Work <strong>24/7</strong>
                           </p>
                       </center>
                       <form action="contact.php" method="post">
                           <div class="form-group">
                               <label>Name</label>
                               <input type="text" class="form-control" name="name" required>
                           </div>
                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" class="form-control" name="email" required>
                           </div>
                           <div class="form-group">
                               <label>Subject</label>
                               <input type="text" class="form-control" name="subject" required>
                           </div>
                           <div class="form-group">
                               <label>Message</label>
                               <textarea name="message" class="form-control"></textarea>
                           </div>
                           <div class="text-center">
                               <button type="submit" name="submit" class="btn btn-primary">
                               <i class="fa fa-user-md"></i> Send Message
                               </button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>