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
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <h2  style="text-align: center;">Add new studenr</h2>
    <form action="#" method="POST">
        <label  class="label-class">
			 Nom:
			<input type="text"  name="nome" >
		</label>
		  <?php //echo $nom; ?>
		<br><br>
		<label    class="label-class">
            Email :
			<input type="email" name="email"  >
		</label>
        <br><br>
		<label class="label-class">
            Phone :
			<input type="text" name="phone" >
		</label><br><br>

		<label class="label-class">
			Enroll number:
			<input type="text" name="enroll" >
		</label>
		    <?php //echo $enroll; ?>
            <br><br>
		<label class="label-class">
		     Date of admossion:
			<input type="date" name="date" >
          
		</label>
		
		<br><br>
		<input type="submit" name="submite" value="S'inscrire">
	</form> 
    <?php 
        //insert data 
        if (isset($_POST['submite'])) {
            $nom=$_POST['nome'];
            $Email=$_POST['email'];
            $Phone=$_POST['phone'];
            $Enroll=$_POST['enroll'];
            $Date=$_POST['date'];
            $query="INSERT INTO `students`(`name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ('$nom','  $Email','  $Phone','$Enroll','$Date')";
            if (mysqli_query($conn,$query)) echo "   insert student is success";
            else "error";
            
        }

   
    ?>
</body>
</html>