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
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

        <table id='tableMainPage' align=center border="1">
        <!--<table width=70% text-align=center background-color=#ff3bf8 border=1 align=center>-->
          <tr class='header'>
            <th>id</th>
            <th>author</th>
            <th>name</th>
            <th>year</th>
          </tr>

          <?php
            $conn = mysqli_connect("localhost", "root", "root", "library");
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM Books
            JOIN Author ON id_author = id_au;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["author"] . "</td><td>". $row["name"]. "</td><td>". $row["year"]. "</td></tr>";
              }
            } else { 
              echo "0 results"; 
            }

            $conn->close();
          ?>
        </table>
          <!-- В этом js идёт фильтрация-->
        <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("tableMainPage");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
        </script>
        <br><br>
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