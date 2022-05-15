<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form method="post">
    <label for="password">Password</label>
      <input type="password" name="password" id="password">
    <button type="submit">Login</button>
  </form>
  <?php
    if(!isset($_POST['password'])){
      die();
    }
    $password=$_POST['password'];
    $correctpassword=file_get_contents('password.secret');
    if($password===$correctpassword){
      print('Login Successful.');
    }else{
      print('Login Failed');
    }
  ?>


</body>
</html>