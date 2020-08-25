<?php

include('config.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/estilo_form_cliente.css">
    <link rel="stylesheet" href="../css/estilo_header.css">
    <!--<link rel="stylesheet" href="../css/estilo_registro_empresario.css">-->
    <title></title>
  </head>
  <body>
    <header>
        <img class="logo" src="" alt="Logo">
        <p class"frase">BIENVENIDOS A LA PAGINA DE ANDRES/GONXALITO</p>
        <nav>
          <ul class="redes">
            <li><a href="https://www.instagram.com/ignea_team/?hl=es"><button>Instagram</button></a></li>
            <li><a href="mailto:ignearopa@gmail.com"><button>Correo</button></a></li>
            <li><a href="https://www.facebook.com/"><button>FaceBook</button></a></li>
          </ul>
        </nav>
    </header>
    <form method="post" action="" name="signup-form">
      <div class="form-element">
          <label>Username</label>
          <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
      </div>
      <div class="form-element">
          <label>Email</label>
          <input type="email" name="email" required />
      </div>
      <div class="form-element">
          <label>Password</label>
          <input type="password" name="password" required />
      </div>
      <button type="submit" name="register" value="register">Register</button>
    </form>
  </body>
</html>
