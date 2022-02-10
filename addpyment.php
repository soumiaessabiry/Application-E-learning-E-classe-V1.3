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
    <title>add payment</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <h2  style="text-align: center;">Payment Details</h2>
    <form action="#" method="POST">
        <label  class="label-class">
			 Nom:
			<input type="text" name="nome" >
		</label>
		<br><br>
		<label    class="label-class">
            Payment Schedule :
			<input type="text" name="payment"  >
		</label>
        <br><br>
		<label class="label-class">
           Bill Number :
			<input type="text" name="bill" >
		</label><br><br>

		<label class="label-class">
			Amount Paid:
			<input type="text" name="amount" >
		</label>
		    <?php //echo $enroll; ?>
            <br><br>
		<label class="label-class">
		   Balance amount:
			<input type="text" name="balance" >
		</label>
        <br><br>
		<label class="label-class">
             Date :
			<input type="date" name="date" >
		</label>
		<br><br>
		<input type="submit" name="submite" value="Ajouter">
	</form> 
    <?php 
   
        //insert data 
        if (@$_POST['submite']) {
            $nom=$_POST['nome'];
            $Payment=$_POST['payment'];
            $Bill=$_POST['bill'];
            $Amount=$_POST['amount'];
            $Balance=$_POST['balance'];
            $Date=$_POST['date'];
            $query="INSERT INTO `payment_details`( `name`, `payment _schedule`, `bill_number`, `amount_paid`, `balance_amount`, `date`) VALUES ('$nom',' $Payment','$Bill','$Amount',' $Balance','$Date')";
            if (mysqli_query($conn,$query)) echo " insert success";
            else "error";
            
        }

   
    ?>
</body>
</html>