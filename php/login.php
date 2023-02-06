<?php
include "config.php";
        
 $email = $_POST["email"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  if(mysqli_num_rows($user) > 0){
$row = mysqli_fetch_assoc($user);
if($password == $row['password']){
      echo "Login Successful";
    //   $_SESSION["login"] = true;
    //    $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }

?>


