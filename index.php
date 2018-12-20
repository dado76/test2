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
                    <a class="btn btn-primary btn-lg" href="login.php">Connexion</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Crée un compte</a>
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
        </div>
   
	</div>
</div>
<?php include_once'includes/footer.php'; ?>
