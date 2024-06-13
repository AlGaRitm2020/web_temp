<!DOCTYPE html>

<html lang='ru'>
  <head>
    <meta charset='UTF-8'>
    <title>Гареев А.М.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css"> 

  </head>

  <body >

  <div class="container nav_bar">
    </div>
      <div class="row">
        <div class="col-12">
         <div class="nav_text text-center">
         Personal information 
         </div>
        </div>
      </div>

  </div>
    
  <div class="container">

      <div class="row">
        <div class="col-12">
         <h1>Гареев А.М.</h1> 
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-sm-6">
          <p>Гареев Альберт. Студент {course} курса компьютерной безопасности ДВФУ. Уже реализовал несколько пет-проектов, прошел обучение в Яндекс.Лицее, участвовал в хакатонах и ctf. Пишу на python, использовал flask, aiogram, PostgreSQL, {other_stack} знаком c git, linux {other_etc} Готов к любой работе по специальности в рамках моих компетенций, рассматриваю стажировки с возможностью обучения</p>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class='text-center my_photo'></div>
          <div class="my_photo_label ext-center">Гареев А.М.</div>

          
        </div>
 
      </div>

    
   </div> 
   <div class="container">
      <div class="row">
       <div class="button_js col-12">
         <button id="myButton" class="btn_red"> click me</button> 
          <p id="demo"></p>
       </div> 
      </div>
    
   </div>

   <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>h3110, <span class="username"> <?php echo $_COOKIE["User"]; ?> </span></h1> 
        </div>
        
        
            <form action="profile.php" method="POST" enctype="multipart/form-data" name="upload">
               <div class='col-12'> <input type="text" class="form" name="title" placeholder="header..."> </div>
               <div class="col-12"><textarea name="content" cols="30" rows="10" placeholder="start typing your thoughts..."></textarea></div>
               <div class="col-12"><input type="file" name="file" /><br></div>
               <div class="col-12"><button type="submit" class="btn_red" name="submit">save post</button></div>
            </form>
        
    </div>
</div>


 

  <script type="text/javascript" src="js/button.js"></script> 
  </body>
  
</html>

<?php

  require_once('db.php');
  $link = mysqli_connect('db', 'root', 'kali', 'first');

  if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    die($content);
    if (!$title | !$content) die ("fill title and content");

    $insert_post_query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if (!mysqli_query($link, $insert_post_query)) die("failed to create post");


    // upload file
    if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed! supported types=[gif,jpg/jpeg,png] fsize must be lower than 1MB";
        }
    }

  }


?>