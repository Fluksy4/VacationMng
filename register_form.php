<?php

@include 'Svurzvane.php';

if(isset($_POST['submit'])){

   $Username = mysqli_real_escape_string($conn, $_POST['Username']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $Name = mysqli_real_escape_string($conn, $_POST['Name']);
   $Lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
   $Role = $_POST['Role'];
   $Team = $_POST['Team'];

   $select = " SELECT * FROM neshto WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO `neshto`(`Username`,`password`,`Email`,`Name`,`Last name`, `Role`,`Team`) VALUES('$Username','$pass','$email','$Name','$Lastname','$Role','$Team')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
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
   <title>register form</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="Username" name="Username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="Name" required placeholder="enter your name">
      <input type="text" name="Lastname" required placeholder="enter your last name">

      
      <select name="Role">
         <option value="Ceo">Ceo</option>
         <option value="Developer">Developer</option>
         <option value="Team Lead">Team Lead</option>
         <option value="Unassigned">Unassigned</option>
      </select>
      <select name="Team">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>