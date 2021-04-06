<header>
			<div id="titre">
			<h1>Ecole Jean Varselle</h1>
			</div>
        <ul id="menu-deroulant"> 
		<div id="liens">
            <a href="index.php ">Accueil</a> &nbsp; <a href=" inscription.php">Inscription</a> &nbsp;<a href="connexion.php">Connexion</a> &nbsp;<a href="planning.php">Planning</a> &nbsp;<a href="reservation-form.php">Réservation</a>   
			<?php if(!empty($_SESSION)){ echo ('<a class="lien" href="profil.php">Profil</a>&nbsp;<a class="lien" href="deconnexion.php">Deconnexion</a></section>');} //Uniquement affiché si connecté ?>
			</div>
			    </header>
