<html>

<head>





</head>

<body>
		<?php 
		include 'connectionbdd.php'; // permet la connection à la base de données grâce au fichier connectionbdd.php
		?>	
		<h1> Supprimer une association </h1>
 
		<form action="traitementsupprimassociation.php" method="post"> 
 
		<label for="LIBELLE"> Nom de l'association : </label> 
		<select name="LIBELLE" id="LIBELLE">
		<?php
		$reponse = $bdd->query('SELECT LIBELLE FROM association');
 
		while ($donnees = $reponse->fetch())
		{
			?>
			<option value="<?php echo $donnees['LIBELLE']; ?>"> <?php echo $donnees['LIBELLE']; ?> </option>
			<?php
		}
		?>	
		</select>
		</br>
		<label for="TAG"> TAG de l'association : </label>
		<select name="TAG" id="TAG">
		<?php 
		$reponse2 = $bdd->query('SELECT TAG FROM association');
 
		while ($donnees2 = $reponse2->fetch())
		{
			?>
			<option value="<?php echo $donnees2['TAG']; ?>"> <?php echo $donnees2['TAG']; ?> </option>
			<?php
		}		
		?>		
		</select>
		</br>
	<input type= "submit" value= "Supprimer"> </br>
	</form>
	</body>
</html>

</html>