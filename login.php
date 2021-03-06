<?php
    $page_title = 'Login';
    include_once'includes/header.php';
    include_once'controllers/ParseLogin.php'; 
?>
	<body background="K5JXuOD.png">
        <section id="login-main">
            <div class="container">
                <div class="row">
        
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <h3>Connexion</h3>
                        <br>

                        <?php if(isset($result)){
                            echo $result;
                        } ?>
                        <?php if(!empty($form_errors)){
                            echo show_errors($form_errors);
                        } ?>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <form class="form-horizontal" action="" method="POST">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input class="form-control" type="text" placeholder="username" name="username">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input class="form-control" type="password" placeholder="password" name="password">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="remember-me">
                                    <label><input name="remember" value="yes" type="checkbox"> Se rappeler de moi</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 button">
                                <input name="loginBtn" type="submit" class="btn btn-danger btn-lg pull-right" value="Connexion"><br />
                            </div>
                        </form>
                        <div class="col-md-12 text-center lost-pwd">
                            <a href="forgot_pwd.php">Mot de passe perdu ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include_once'includes/footer.php'; ?>