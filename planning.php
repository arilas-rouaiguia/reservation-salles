<?php include("utilsateur.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Planning</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
  </head>
  <body>
  <header><?php include("header.php"); ?> </header>
    <section class="tab">
      <h1>Planning</h1>
      <table class="planning">
        <tr>
          <th>Utilisateur</th> <th>Titre</th> <th>Date de Début</th> <th>Date de Fin</th> <th>Liens</th>
        </tr>
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
        $stmt = $pdo->prepare("SELECT reservations.id,utilisateurs.login,titre,debut,fin FROM reservations INNER JOIN utilisateurs ON utilisateurs.id = reservations.id_utilisateur ORDER BY debut DESC"); // Récupération des informations 
        $stmt->execute();
        $result = $stmt->fetchAll();
		
		
        foreach ($result as $key => $value) {
          $date_debut = strtotime($value[3]) ;
          $date_debut = date('Y-m-d H:i', $date_debut); 
          $date_fin = strtotime($value[4]);
          $date_fin = date('Y-m-d H:i', $date_fin);
            
			
			echo '<tr>
            <td>'.$value[1].'</td>
          <td class="user">'.$value[2].'</td> 
          <td class="date">'.$date_debut.'</td> 
          <td class="date">'.$date_fin.'</td>
          <td><form class="action" action="reser.php" method="post">
            <button class="btn btn-danger" type="submit" name="'.$value[0].'">Détails</button>
		</form>';} 		//Talbeau : Utilisateur, Date début, Date fin, lien détail
        ?>
    </section>
  </body>
</html>
