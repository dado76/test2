<?php 
    $page_title = 'Homepage';
    include_once'includes/header.php';
    include_once'config/Session.php';    
?>


	<div class="container">
	<body background="K5JXuOD.png">
	   <style>
	body {
color:white;

background-image:url(K5JXuOD.png);
}
	   </style>

		<h1>Bienvenue dans la communauté 76ers</h1>
		<?php 
            if(!isset($_SESSION['username'])):
        ?>
		<br>
		<br>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-danger btn-lg" href="login.php">Connexion</a>
                </li>
                <li>
                    <a class="btn btn-danger btn-lg" href="register.php">Crée un compte</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div id="usr">
            <p>
                Vous étes connecté avec le profil <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Déconnexion</a>
            </p>
		
  
        <?php endif; ?>
</div>

		   <div class="container">


	 
<h2>Nous rejoindre</h1>

<h4><li>Discord <br>
<img src="téléchargement.jpg" href="">
<h4><li>Télécharger A3 Launcher <br>
<br>
      <a class="btn btn-danger " href="https://a3.launcher.eu/updates/setup_a3launcher.exe">Télécharger A3 lAUNCHER</a>
</li>

<br><br>
<li>Lancer A3 Launcher et chercher le serveur</li>
<img src="capture.png">
<br><br>

<li> Appuyer sur le symbole Download laisser les téléchargements touner.</li>
<br><br>
<li> Appuyer sur le symbole Play et jouer !</li>






<?php include_once'includes/footer.php'; ?>
