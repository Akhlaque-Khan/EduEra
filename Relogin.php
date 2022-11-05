<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relogin</title>
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="dictionary.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<div class="grid-container">
<div class="content1">
<?php include 'content.php'; ?>
    </div>
    <div class="container">
   <form action="LoginHelp.php" class="container" method="POST">
   <center><h2 style="color:red">You have entered wrong Email or Password</h2> 
    <h2>Login Page</h2>
  UserName <input type="text" class="input" placeholder="UserName" name="email"><br>
  Password <input type="password" class="input" placeholder="Password" name="Phone"><br>
  <input type="checkbox" name="" id="">Remember me
  <br>
  <button type="submit" class="submit">Submit</button><span style="font-size:45px;color:black;">Or</span>
  <button type="reset" class="submit">Reset</button>
</center>      
   </form>
</div>
    <div>
<?php include 'dictionary.php'; ?>
    </div>
</div>
</body>
</html>