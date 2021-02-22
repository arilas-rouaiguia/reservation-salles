<?php
session_start();
//LIBRARIES
$Http = 'libraries/Http.php';
$database = 'libraries/database.php';
$utils = 'libraries/utils.php';

//CSS
$bootstrap = "css/bootstrap.min.css";
$headerCss = "css/header.css";
$pagesCss = "css/index.css";
$footerCss = "css/footer.css";;
//PATHS
$index = "index.php";
$inscription = "View/inscription.php";
$connexion = "View/connexion.php";
$profil = "View/profil.php";
$planning = "View/planning.php";
$reservation = "View/reservation-form.php";
require('require/html_/header.php');

?>
<main>
    <article id="content">
    <section id ="contentSection" >
        <h1>Bienvenue</h1>
        <p>L'école de rattrapage Edward Richtofen Moriaty ouvre ses portes a vous et vos enfants pour étudier en ce lieu dédié. </br> Fondée par notre maire Pascal Durein, ce lieux a comme objectif de permettre aux enfants de progresser grace a des activités multiples allant a jeux et des révisions pour combler les difficultés scolaires.</p>
        <h2>Nos Tarifs</h2>
        <p>25€ de l'heure par enfant inscript</p>
        <h2>Notre équipe</h2>
        <p>Notre équipe éducative est composée d'Arnold notre prof de Math, Céline notre Prof d'Anglais, Luc notre expert en EPS et Blaze le directeur de de lieux.</p>
		</br> 
    </section>
</article>

    <section id="room">

        <article class="article_salles">
            <img class="img_salles" alt="école" src="https://i.pinimg.com/originals/d5/e6/0c/d5e60c07b0ed94ca3a98e58a9c82f7e4.jpg">	
        </article>

    </section>

</main>

<?php
$img_signature = 'images/netero.png';
require('require/html_/footer.php');
?>