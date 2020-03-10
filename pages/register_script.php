

  <html>
  <head>
    <title>Join GeoBadge</title>
  </head>
  <body>

    <?php
        include 'DBsettings.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        if(mysqli_fetch_array($conn->query("SELECT * FROM User WHERE Username LIKE '".$username."';"))){
          echo ("<script> alert('Error: user already registered'); </script>");
          echo "<script> location.href='register.html'; </script>";
          exit;
        }
        if(mysqli_fetch_array($conn->query("SELECT * FROM User WHERE Email LIKE '".$email."';"))){
          echo ("<script> alert('Error: email already registered'); </script>");
          echo "<script> location.href='register.html'; </script>";
          exit;
        }
        else{
          $conn ->query("INSERT INTO User(Username, Email, Password) VALUES ('".$username."','".$email."','".password_hash($password, PASSWORD_DEFAULT)."');");
          mail("alessandro.cavalieri5pro@gmail.com","Welcome to GeoBadge","confirm your email here: ","");
          echo ("<script> alert('Welcome to our website'); </script>");
          echo "<script> location.href='login.html'; </script>";

          exit;

        }
        $conn->close();
      ?>
  </body>
  </html>
