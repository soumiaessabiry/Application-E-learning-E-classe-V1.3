<!DOCTYPE html>
<html lang="en">
    <?php
      session_start();
    //connextion db 
        include "connexion.php";
       
      
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>inscription</title>
</head>
<body>

<form action="" method="POST">
       <h2>Inscription</h2>
        <label  class="label-class">
			  First Name: 
			<input type="text"  name="firstname"  required>
		</label>
		<br><br>
        <label  class="label-class">
			  last Name: 
			<input type="text"  name="lastname"  required >
		</label>
		<br><br>
		<label    class="label-class">
              Email :
			<input type="email" name="email"   required >
		</label>
        <br><br>
		<label class="label-class">
              Password :
			<input type="password" name="password"  required >
		</label>
		<br><br>
		 <input type="submit" name="submite" value="S'inscrire">
	</form> 
    <?php 
        // function for validaton
        include ("lesfonctions.php");
        // validation data  trim=evite space ctype_alpha verfier si le var et contien des espace des number ,,,,
        if (isset($_POST['submite'])) {
            $FIRSTNAME=validation($_POST['firstname']);
            $LASTNAME=validation($_POST['lastname']);
            $EMAIL=validation($_POST['email']);
            $PASSWORD=md5($_POST['password']);//hach
            $query="INSERT INTO `comptes`(`first_name`, `last_name`, `email`, `password`) VALUES ('$FIRSTNAME','$LASTNAME','$EMAIL','$PASSWORD')";
            if (mysqli_query($conn,$query)) {
                 header("location:index.php");
                echo" inscription is success";
            }else{
                echo "error";
            }
        }
      
      
    
    ?>
</body>
</html>
