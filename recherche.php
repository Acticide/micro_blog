<?php
   $search = htmlspecialchars($_GET['search']);
   	include('includes/connexion.inc.php');
	
   // Requetes SQL : 
   
   $query = "SELECT * FROM messages WHERE contenu LIKE :s";
   
   $s = "%" . $search . "%";
   
   $req = $pdo->query($sql);
   $req->$pdo->query([ "s"  =>  $s ]);  

	while($data=$req->fetch()){ //Affichage des messages
	?>
		<p>
	<?php echo $data['contenu']; ?>
		</p>
		<footer>
	<?php echo date('d/m/y à H:i:s',$data['date']);?>
		</footer>
	<?php }?>