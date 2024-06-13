
<!DOCTYPE html>

<html lang='ru'>
  <head>
    <meta charset='UTF-8'>
    <title>registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css"> 

  </head>

  <body >
   <div class="container">

    <div class="row">
        <div class="col-12">
         <h1>registration.php</h1> 
        </div>
      </div>

    <div class="row">
      <div class="col-12">
        <form method="POST" action="registration.php">
            <div class="row form__reg"><input type="email" class="form" name="email" placeholder="email"></div>
            <div class="row form__reg"><input type="text" class="form" name="username" placeholder="login"></div>
            <div class="row form__reg"><input type="text" class="form" name="password" placeholder="password"></div>
            <button type="submit" name= "submit" class="btn_red btn__reg ">contunue</button>
        </form>
      </div>
    </div>

  </body>
</html>

<?php
    require_once('db.php');
    $link = mysqli_connect('db', 'root', 'kali', 'first');

    if (isset($_COOKIE['User'])) {
      header("Location: profile.php");
    }

    if (!$link) die("link failed");
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

   


      if (!$email || !$username || !$password)  die('Please fill all values!');

      $insert_users_query = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$password')";

      if (!mysqli_query($link, $insert_users_query)) {
        die("Failed to insert new user");
      }





    }




?>
