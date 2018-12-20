<?php 
    $page_title = 'Homepage';
    include_once'includes/header.php';
    include_once'config/Session.php';    
?>
	<body background="K5JXuOD.png">

	<div class="container text-center">
		<h1>Bienvenue dans la communauté 76ers</h1>
		<?php 
            if(!isset($_SESSION['username'])):
        ?>
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
                Vous éte connecté avec le profil <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Déconnexion</a>
            </p>
			
        </div>
        <?php endif; ?>
      <a href="https://www.gametracker.com/server_info/212.129.1.28:2302/" target="_blank"><img src="https://cache.gametracker.com/server_info/212.129.1.28:2302/b_560_95_1.png" border="0" width="560" height="95" alt=""/></a>
	  </div>
   
	</div>
</div>
<?php include_once'includes/footer.php'; ?>
