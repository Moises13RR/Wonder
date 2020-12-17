<?php
  session_start();
  require 'PHP/database.php';
  if (!empty($_POST['emailCte']) && !empty($_POST['contrasena'])) {
    // code...
    $records = $conn->prepare('SELECT nomCte, emailCte, contrasenaCte FROM cliente WHERE emailCte=:emailCte');
    $records->bindparam(':emailCte',$_POST['emailCte']);
    $records->execute();
    print("PDO::FETCH_ASSOC: ");
    $results = $records->fetch(PDO::FETCH_ASSOC);
    print($results);
    

    //if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
    if (count($results) > 0 && $_POST['contrasena'] == $results['contrasenaCte']) {
      $_SESSION['admin_id'] = $results['nomCte'];
      header('Location: home.php');
    }else {
      $message = 'Lo sentimos, los datos no son correctos';
    }
  }
?>

<!doctype html>
<html>
  <script>var __adobewebfontsappname__="dreamweaver"</script>
  <script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
  <head>
    <meta charset="UTF-8">
    <title>WonderCircus</title>
    <link rel="shortcut icon" href="Media/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Media/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/indexStyle.css" type="text/css">
    <link href="CSS/blogPostStyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/slider.css">
    <style type="text/css">
      #btn {
      	-webkit-transition: all 0.2s ease 0s;
      	-o-transition: all 0.2s ease 0s;
      	transition: all 0.2s ease 0s;
      }
      #btn:hover {
      	text-shadow: 15;
      	background-color: #B7B7B7;
      	color: #FFFFFF;
      }
    </style>
  </head>

  <body>
    <!--
    
    <div id="adap">
    	<img src="Media/logo.jpg" alt="Wonder Circus" width="relative" id="ban">
    </div>
  -->
    <br>
    <center>
      <form class="adap2" action="index.php" method="post">
        <?php if (!empty($message)) : ?>
          <p><?= $message ?></p>
        <?php endif; ?>
        <div class="blurred-box" >
          <!--  you dont need the user-login-box html  -->
          <!--  for demo purposes only and its shit  -->
          <div class="user-login-box">
            <span class="user-icon"></span>
            <div class="user-name">Administrador</div>
            <input class="user-password" type="text" name="emailCte" placeholder="Nombre de usuario"/>
            <input class="user-password" type="password" name="contrasena" placeholder="Contraseña"/>
            <input class="ent" type="submit" value="Entrar">

          </div>
        </div>
      </form>
      <!--
      <div id="adap2">
        <form action="index.php" method="post">
          <input type="text" name="usuario" placeholder="Nombre de usuario">
          <input type="password" name="contraseña" placeholder="Contraseña">
          <input type="submit" value="Entrar">
        </form>
      -->
        <!--
      	<a href="home.html">
      	   <input type="button" id="btn" value="Iniciar">
        </a>

      </div>
      -->
    </center>
  </body>
</html>
