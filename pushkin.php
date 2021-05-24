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

    <p><a href="about.php">О нас</a></p>
    <p><a href="table_page.php">Таблица с книгами</a></p>
    <p><a href="author_description.php">Посмотреть описание авторов</a></p>
    <p><a href="logout.php">Выход из аккаунта</a></p>
   </div>

   <div id="content">

    <table align=center>
      <td>
        <ul>
          <li><a href="books/Пушкин/евгений_онегин.pdf" download>Скачать файл Евгений Онегин</a></li>
          <li><a href="books/Пушкин/капитанская дочка.pdf" download>Скачать файл Капитанская дочка</a></li>
          <li><a href="books/Пушкин/пиковая дама.pdf" download>Скачать файл Пиковая дама</a></li>
        </ul>
      </td>
      <td align=center>
        <img src="img/pushkin.jpeg" width="50%">
      </td>
    </table><br><br>
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