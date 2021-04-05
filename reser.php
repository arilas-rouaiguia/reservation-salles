<?php include("utilsateur.php");

if (isset($_POST)) {
  foreach ($_POST as $key => $value) {
    $idPlan = $key;
  }
  $pdo = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
  $stmt = $pdo->prepare("SELECT utilisateurs.login,titre,description,debut,fin FROM reservations INNER JOIN utilisateurs ON utilisateurs.id = reservations.id_utilisateur WHERE reservations.id = '$idPlan' "); //Récupération informations
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
}
else { 
  header("location: planning.php"); 
}



?>

<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	<header> <?php include("header.php");?> </header>
    <title><?php echo $result['titre']; ?></title>

  </head>
  <br><br>
  <body>
  <div id="reser">
     <section>   <!--Mise en place de la reservation-->
        <h1>Titre:</h1>
        <span class="info"><?php echo $result['titre']; ?></span>
        <h2>Réservé par l'utilisateur:</h2>
        <span class="info"><?php echo $result['login'] ?></span>
        <h2>Description</h2>
        <span class="info"><?php echo $result['description']; ?></span>
        <h3>Date de début</h3>
        <span class="info"><?php $date_debut = strtotime($result['debut']);
        $date_debut = date('d-m-Y H:i', $date_debut);
        echo $date_debut; ?></span>
        <h3>Date de fin</h3>
        <span class="info"><?php $date_fin = strtotime($result['fin']);
        $date_fin = date('d-m-Y H:i', $date_fin);
        echo $date_fin; ?></span>
       
	   <?php echo '<br><br><a class="return" href="planning.php">Retour</a>' ?>
      </section>
	</div>
  </body>
</html>
