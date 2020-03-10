<html>
<head>
  <title>GeoBadge</title>
  <link rel="stylesheet" href="css/nav_style.css">
  <style>
    table, td, th{border: 1px solid black;}
    table{width:100%;text-align:center; border-collapse: collapse;}   
  </style>
</head>
<body>
<?php
if(!defined("auth")){
  echo "<script> location.href='login.html'; </script>";
  exit;
}
?>
<header>
    <nav id="navbar">
      <div class=container>
        <h1 class = "logo"><a href="index.php">GEOBADGE</a></h1>
        <ul>
          <li><a class="current" href="index.html">Home</a></li>
          <li><a href="index.html">About</a></li>
          <li><a href="login.html">Esci</a></li>
      </div>
    </nav>
  </header>
  <section id="showcase">
    
  </section>
<?php
        include 'DBsettings.php';
        echo("<table>");
        echo("<tr>");
        echo("<th>ID</th>");
        echo("<th>USERNAME</th>");
        echo("<th>EMAIL</th>");
        echo("<th>PASSOWRD</th>");
        echo("</tr>");
        $users = $conn -> query("select * from User");
        $users_row = mysqli_fetch_assoc($users);
        while($users_row){
          echo("<tr>");
          foreach($users_row as $element){
            echo("<td>".$element."</td>");
          }
          echo("</tr>");
          $users_row = mysqli_fetch_assoc($users);
        }
        echo("</table>");
?>

</body>
</html>
