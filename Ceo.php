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
   
   
   <h1><center>JavaScript CRUD Example Tutorial</center></h1>
	<hr>
			<div class="employee-form">
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>Email Id</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" id="salary">
                    </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Submit">
                    </div>
                </form>
		</div>
		<br/>
		<div class = "employees-table">
                <table class="list" id="employeeList">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email Id</th>
                            <th>Salary</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
        </div>

</body>
</html>
