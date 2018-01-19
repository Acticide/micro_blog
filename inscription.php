<?php
	ini_set("display_errors",0);error_reporting(0);
	include('includes/connexion.inc.php');
	include('includes/haut.inc.php');
?>
	<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<div class="row">
        <div class="col-sm-3"></div>
        <div style="text-align: center" class="col-sm-6">

            <h1>Créer un compte </h1>
            <form action="inscription.php" method="POST">

                <p id="mail">Email</p>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                </br>

                <p id="password">Mot de passe</p>
                <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                </br>

                <button class="btn btn-success" type="submit"> Inscription </button>
				</br>
				</br>
            </form>
        </div>
    </div>
<?php
	$sql = "INSERT INTO utilisateurs(email,mdp) VALUES (:email,:mdp)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':email', $_POST['email']);
	$stmt->bindValue(':mdp', $_POST['mdp']);
	$stmt->execute();
include('includes/bas.inc.php');
?>