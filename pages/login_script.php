
  <html>
  <head>
    <title>GeoBadge</title>

  </head>
  <body>
    <?php
        include 'DBsettings.php';

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(password_verify($password, mysqli_fetch_array($conn->query("SELECT Password FROM User WHERE Username LIKE '".$username."';"))["Password"])){
          define('auth', TRUE);
          require("index.php");
          exit;
        }
        else{
          echo "<script> alert('Email or password not correct'); </script>";
          echo "<script> location.href='login.html'; </script>";
          exit;
        }
      	$conn->close();
      ?>
  </body>
  </html>
