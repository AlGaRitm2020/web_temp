
<!DOCTYPE html>

<html lang='ru'>
  <head>
    <meta charset='UTF-8'>
    <title>login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css"> 

  </head>

  <body >
   <div class="container">

    <div class="row">
        <div class="col-12">
         <h1>login.php</h1> 
        </div>
      </div>

    <div class="row">
      <div class="col-12">
        <form method="POST" action="login.php">
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

    if (!$link) die("link failed");
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

   


      if (!$username || !$password)  die('Please fill all values!');

      $select_user = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
      $result = mysqli_query($link, $select_user);

      if (mysqli_num_rows($result) >= 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
      }
      else {
        echo "wrong username or password";
      }



    }




?>

