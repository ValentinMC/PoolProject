<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/estilo_form_cliente.css">
    <link rel="stylesheet" href="../css/estilo_header.css">
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
    <form method="post" action="" name="signin-form">
      <h1>INICIO DE SESIÓN</h1>
      <div class="form-element">
          <label>Username</label>
          <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
      </div>
      <br>
      <div class="form-element">
          <label>Password</label>
          <input type="password" name="password" required />
      </div>
      <br><br>
      <button type="submit" name="login" value="login">Log In</button>
    </form>
  </body>
</html>
