<!DOCTYPE html>
<html lang="en">
<?php
  //connextion db 
	include "connexion.php";
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <h2  style="text-align: center;">Add course</h2>
    <form action="#" method="POST">
        <label  class="label-class">
           Nom de langage:
			<input type="text" name="nom" >
		</label>
		  
		<br><br>
		<label    class="label-class">
            Duree de coure :
			<input type="text" name="duree"  >
		</label>
        <br><br>
		<label class="label-class">
            Discription :
			<input type="text" name="discription" >
		</label><br><br>

		<label class="label-class">
             Prix:
			<input type="text" name="prix" >
		</label>	
		<br><br>
		<input type="submit" name="submite" value="Ajouter">
	</form> 
    <?php 
        //insert data 
        if (@$_POST['submite']) {
            $nomlag=$_POST['nom'];
            $Duree=$_POST['duree'];
            $Discription=$_POST['discription'];
            $Prix=$_POST['prix'];
            $query="INSERT INTO `courses`(`nom`,`duree`,`discription`,`prix`) VALUES ('$nomlag','$Duree','$Discription','$Prix')";
            if (mysqli_query($conn,$query)) echo "   insert student is success";
            else "error";
            
        }

   
    ?>
</body>
</html>