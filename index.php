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
	
	</br>
	
	<section>
		<div class="container">

			<form method="POST" action="recherche.php">
				<div class="col-sm-5">
					<div class="form-group">
					  <input type="input" name="requete" class="form-control" placeholder ="Rechercher" >
					</div>
				</div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-success btn-lg">Rechercher</button>
			</div>
			</form>
		</div>
	</section>

    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">              
                <form method="POST" action="message.php">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
							<input type="hidden" name="id" value="id"/>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>                        
                </form>
            </div>
			
	<?php
		$limit = 5;  //Limite de commentaire par page
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  //Si page existante
		$debut = ($page-1) * $limit; 
		
		$sql="SELECT * FROM messages ORDER BY date DESC LIMIT $debut, $limit";
		$stmt=$pdo->query($sql);
		while($data=$stmt->fetch()){ //Affichage des messages
	?>
		<blockquote>
		<p>
	<?php echo $data['contenu']; ?>
		</p>
		<footer>
	<?php echo date('d/m/y à H:i:s',$data['date']);?>
		</footer>
		<a href="message.php?a=sup&id=<?=$data['id']?>" class="btn btn-danger">Supprimer</a>
		<a href="index.php?b=mod&id=<?=$data['id']?>" class="btn btn-primary">Modifier</a>
		</blockquote>
	<?php 
	}
		$sql = "SELECT COUNT(id) FROM messages";  
		$stmt= $pdo->query($sql);  
		$row = $stmt->fetch();  
		$total_lignes = $row[0];  
		$total_pages = ceil($total_lignes / $limit);  //Calcul le nombre de pages
		$page = "<div class='pagination'>";  
		for ($i=1; $i<=$total_pages; $i++) //Pagination index
		{ 
				  echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
		}  
		echo $page . "</div>";  
	?>

            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>

<?php
	include('includes/bas.inc.php');
?>
