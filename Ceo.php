<?php
@include 'Svurzvane.php';

session_start();

if(!isset($_session['Ceo_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ceo</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span></span></h3>
      <h1>welcome <span>?php echo $_SESSION['Ceo_name'] ?</span></h1>
      <p>this is an Ceo page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>