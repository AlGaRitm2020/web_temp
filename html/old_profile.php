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
         <h1>h3110, <span class="username"> <?php echo $_COOKIE["User"]; ?> </span></h1> 
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

  <script type="text/javascript" src="js/button.js"></script> 
  </body>
  
</html>

<?php

  require_once('db.php');
  $link = mysqli_connect('db', 'root', 'kali', 'first');


?>