<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Сори</title>
  <link rel='stylesheet' type='text/css' href='styles.css'>
 </head>

 <body link='white' vlink='white'>
  <div id="container">

   <div id="header">Библиотека котов</div>

   <div id="sidebar">

    <p><a href="stat.html">О нас</a></p>
    <p><a href="table_page.php">Таблица с книгами</a></p>
    <p><a href="logout.php">Выход из аккаунта</a></p>
   </div>

   <div id="content">

    <ul>
      <li><a href="books/Гоголь/вий.pdf" download>Скачать файл Вий</a></li>
      <li><a href="books/Гоголь/ревизор.pdf" download>Скачать файл Ревизор</a></li>
      <li><a href="books/Гоголь/шинель.pdf" download>Скачать файл Шиннель</a></li>
    </ul><br><br>
    <button onclick="location.href = 'main_page.php';" id='btn'>Вернуться на главную страницу</button>
   </div>
   <div id="footer">&copy; Андрей Тощаков 10 "Б"</div>
  </div> 
 </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>