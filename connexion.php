<?php
	session_start();
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

<?php
	/*if(isset($_POST['email'])){
		$sql="SELECT email,mdp FROM utilisateurs WHERE email=:email And mdp=:mdp";
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':email',$_POST['email']);
		$prep->bindValue(':mdp',$_POST['mdp']);
		$prep->execute();
		$prep->rowCount();
		$sid= md5($_POST['email'].time());
		$sql2="UPDATE utilisateurs SET sid=:sid WHERE email = :email";
		$prep2 = $pdo->prepare($sql2);
		$prep2->bindValue(':sid',$sid);
		$prep2->bindValue(':email',$_POST['email']);
		$prep2->execute();
		$prep2->rowCount();
		$cookie = setcookie('sid',$sid,time()+15*60);
		header("location:index.php");
	}
	else{*/
	
	$message="";
	if(isset($_SESSION['email'])){
		$sql="SELECT email,mdp FROM utilisateurs WHERE email=:email And mdp=:mdp";
		$prep = $pdo->prepare($sql);
		$prep->bindValue(':email',$_POST['email']);
		$prep->bindValue(':mdp',$_POST['mdp']);
		$prep->execute();
		$prep->rowCount();
		$sid= md5($_POST['email'].time());
		$sql2="UPDATE utilisateurs SET sid=:sid WHERE email = :email";
		$prep2 = $pdo->prepare($sql2);
		$prep2->bindValue(':sid',$sid);
		$prep2->bindValue(':email',$_POST['email']);
		$prep2->execute();
		$prep2->rowCount();
		$cookie = setcookie('sid',$sid,time()+15*60);
	}else
	//AFFICHE LE FORMULAIRE
	if (!isset($_POST['email'])) //On est dans la page de formulaire
	{
?>
	<form class="form-horizontal" action="connexion.php" method="POST">
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-8">
		  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputPassworqld3" class="col-sm-2 control-label">Mot de passe</label>
		<div class="col-sm-8">
		  <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <div class="checkbox">
			<label>
			  <input type="checkbox"> Se rappeler de moi
			</label>
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Se connecter</button>
		</div>
	  </div>
	</form>
<?php }
	else{
		
		//SI UN DES CHAMP EST VIDE
		if (empty($_POST['email']) || empty($_POST['mdp'])) {
			$message='Un des champs est vide';
		
		}
		//ON TESTE LE MDP
		else{

			$query=$pdo->prepare('SELECT id,email,mdp,sid
			FROM utilisateurs WHERE email = :email');
			$query->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
			$query->execute();
			$data=$query->fetch();
			$mdp=/*md5*/($_POST['mdp']);
			if( $data['mdp'] == $mdp ){
				$_SESSION['id']= $data['id'];
				$_SESSION['email']= $data['email'];
				$_SESSION['mdp']=$data['mdp'];
				$_SESSION['sid']=$data['sid'];
				
				$message='<h3>Bienvenue'.$_SESSION["email"].'vous êtes connecté</h3>';	
				header('Location:index.php');


			}
			//mdp ou pseudo non correspondant
			else{
				$message='Pseudo ou mdp invalide';
				

			}
	 $query->CloseCursor();	
	}
	echo '
		<div class="in">
		<p id="mess_co">'.$message.'</p>
		</div>';
	} 
?>
	
<?php
	include('includes/bas.inc.php');
?>