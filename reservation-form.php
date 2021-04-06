<?php include("utilsateur.php");

if(isset($_POST['reserver'])){ //Lancement de la réservation
  if (strlen(htmlspecialchars($_POST['titre'])) >= 2) {
    if (strlen(htmlspecialchars($_POST['desc'])) >= 4) {
      if (isset($_POST['date-debut']) && isset($_POST['date-debut-heure']) && isset($_POST['date-fin']) && isset($_POST['date-debut-heure'])) {

	    $userid = $_SESSION['id'];
        $titre = htmlspecialchars($_POST['titre']);
        $desc = htmlspecialchars($_POST['desc']);
        $array = array($_POST['date-debut'],$_POST['date-debut-heure']);
        $datedebut = implode(" ",$array);
        $array = array($_POST['date-fin'],$_POST['date-fin-heure']);
        $datefin = implode(" ",$array);
        $pdo = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
        $stmt = $pdo->prepare("INSERT INTO reservations (titre,description,debut,fin,id_utilisateur) VALUES ('$titre','$desc','$datedebut','$datefin','$userid')");
        $stmt->execute();
		header("location: planning.php");
		
      }//Réservation réussite.
    }
  } 
}


 



?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
  </head>
  <body>
  <header> <?php include('header.php');?> </header>
  <br><br>
  <div id="resevation">
    <section>
        <form action="reservation-form.php" method="post">
		        <h1>Réserver une salle</h1>
          <label for="titre">Titre:</label><br/>
          <input type="text" name="titre"><br/>
          <label for="desc">Description:</label><br/>
          <textarea name="desc" rows="4" cols="40" minlenght="10"></textarea><br/>
          <label for="date-debut">Date de début:</label><br/>
          <input class="date" type="date" name="date-debut">
          <input class="date" type="time" name="date-debut-heure" min="07:00" max="17:00" required><br/>
          <label for="date-fin">Date de fin:</label><br/>
          <input class="date" type="date" name="date-fin">
          <input class="date" type="time" name="date-fin-heure" min="07:00" max="17:00" required><br/>
          <input class="btn btn-danger" type="submit" name="reserver" value="Réserver">
        </form>
	</div>
    </section>
  </body>
</html>
