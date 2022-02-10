<?php 
include ('connexion.php');
//update data cours
$query=" UPDATE `students` SET `name`=' $nom',`email`='$Email',`phone`='$Phone',`enroll_number`='$Enroll',`date_of_admission`=' $Date' WHERE 1";
mysqli_query($conn,$query);

?>