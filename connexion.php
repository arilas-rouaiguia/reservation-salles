<?php
include("securite.php"); include("utilsateur.php");

if (!empty($_SESSION)) {
  header("location: profil.php"); //renvoit a Profil si déja connecté
}


if (isset($_POST['connexion'])) { //Lancement de la connexion
  if (isset($_POST['login']) && isset($_POST['password'])) {
    
	$login = trim(htmlspecialchars($_POST['login']));
    $password = $_POST['password'];
    $pdo = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE login = '$login'");
    $stmt->execute();
    $stmtP = $pdo->prepare("SELECT password FROM utilisateurs WHERE login = '$login'");
    $stmtP->execute();
    $countP = $stmtP->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->fetch(PDO::FETCH_ASSOC);
    
	if (count($count)) { //Connexion validée
      if (password_verify($password,$countP['password'])) {
        $user = new user();
        $user->setId($count['id']);
        $user->setLogin($login);
        $_SESSION['id'] = $user->getId();
        $_SESSION['login'] = $user->getLogin();
        header("location: profil.php");
      }
      else {
        $msg = "Login ou Mdp incorrecte";
      }
    }
    else {
      $msg = "Login ou Mdp incorrecte";
    }
  }
  else {
    $msg = "Complétez le formulaire";
  }
}











?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css"/>
  </head>
  <body>
    <?php include('header.php'); ?>
    <section class="container">
        <br><br><br>
		<section>
		
          <form class="" action="connexion.php" method="post" style="width: 40%;border-left-width: 0px;margin-left: auto;margin-right: auto;">
		          <h1>Connexion</h1>
            <label for="login">Identifiant:</label><br/>
            <input type="text" name="login"><br/>
            <label for="password">Mot de Passe:</label><br/>
            <input type="password" name="password"><br/>
            <?php if(isset($msg)){
              echo ("<span>".$msg."</span>");
            } ?>
            <input class="btn btn-danger" type="submit" name="connexion" value="Se connecter">
          </form>
      </section>
    </section>
  </body>
</html>
