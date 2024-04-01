<?php

$conn=mysqli_connect('mysqli','root','','assoc');

if(isset($_POST['submit'])){

   $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
   $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE user_email = '$user_email' && user_password= '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(user_name, user_email, user_password, user_type) VALUES('$user_name','$user_email','$pass','$user_type')";
         mysqli_query($conn, $insert);
        # header('location:login_form.php');
      }
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log in</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="Admin/assets/css/style.css">
</head>
<body>
<div class="bc">
<div class="form-container">

<form action="" method="post">
   <h3>Add user</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="text" name="user_name" required placeholder="enter the user name">
   <input type="email" name="user_email" required placeholder="enter the email">
   <input type="password" name="password" required placeholder="enter your password">
   <input type="password" name="cpassword" required placeholder="confirm your password">
   <select name="user_type">
      <option value="user">user</option>
      <option value="admin">admin</option>
   </select>
   <input type="submit" name="submit" value="register now" class="form-btn">
   <p>already have an account? <a href="login_form.php">login now</a></p>
   <p>ouma</p>
</form>
</div>
</div>
</body>
</html>