<!DOCTYPE html>

<html lang='ru'>
  <head>
    <meta charset='UTF-8'>
    <title>Гареев А.М.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css"> 

  </head>

  <body >
   
   <div class="container">


      <div class="row">
        <div class="col-12 text-center">
         <h1 id='auth'>posts board</h1> 
          <?php
              if (!isset($_COOKIE['User'])) {
            ?>
           <a class='link' href="/registration.php">Зарегистрируйтесь</a> или <a class='link' href="/login.php">войдите</a>, чтобы просматривать контент!
            <?php
            } else {
              $link = mysqli_connect('db', 'root', 'kali', 'first');

              $select_posts = "SELECT * FROM posts";
              $res = mysqli_query($link, $select_posts);

              if (mysqli_num_rows($res) >  0) {
                while ($post = mysqli_fetch_array($res)) {
                    echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                }
               } else {
                    echo "There's no posts yet";
               }
           // подключение к БД
              }

          ?>

          
        </div>
 
      </div>

    
   </div> 
  </body>
  
</html>
