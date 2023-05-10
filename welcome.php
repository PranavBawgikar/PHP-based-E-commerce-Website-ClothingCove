<?php

$username = filter_input(INPUT_POST, 'tname');
$emailId = filter_input(INPUT_POST, 'temail');
$phoneno = filter_input(INPUT_POST, 'tnumber');
$password = filter_input(INPUT_POST, 'tpass');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ecom_store";


    //create connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    if (!$conn) {
      die ("Not connected to the specified database");
    }

//checking if the username already exists in the database
    $username_query = "SELECT * FROM customer WHERE username = '$username'";
    $result = mysqli_query($conn, $username_query);
    if(mysqli_num_rows($result) > 0){
      header('Location: register-login.php?error=username_exists');
      exit();
    } else {
        $sql_query = "INSERT INTO customer (username, password, email, mobile) 
        VALUES ('$username', '$password', '$emailId', '$phoneno')";
     if(mysqli_query($conn, $sql_query)) {
      echo "<br>";
      echo "New Record Inserted Successfully";
      header('Location: index.php');    
   } else {
      echo "<br>";
      die("Unable to insert record" . mysqli_error($conn));
   }
    }

    mysqli_close($conn);
     
?>