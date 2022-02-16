<?php
			include "connexion.php";
            include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course </title>
    <link rel="stylesheet" href="stylepa.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="styleboot/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap"><!-- col1-->
            <?php include('sidebar.php');?>
            <div class="col "><!-- col2-->
                <?php include 'navbar.php' ?>
                <div class="d-flex justify-content-between mt-3 ">
                    <div >
                        <a href="#" class="fs-3 fw-bold me-3 ">Course</a>
                        
                    </div>

                    <div class="d-flex justify-content-between align-items-center gap-3">
                    <a href="addcours.php" class="fs-3 fw-bold me-3 ">Add course</a>
                        <i class="bi bi-chevron-expand fs-4 fw-bold" style="color:#00C1FE;"></i>
                        
                    </div>
                </div>
                <!-- table-->
                <div class="table-responsive-md">
                       <table  width="100%" style="height: 352px; text-align:center" class="table table-hover bg-light  fw-bold" >
                            <tr class="bg-light">
                                <th>id</th>
                                <th>nom de langage</th>
                                <th>duree de coure</th>
                                <th>discription</th>
                                <th>Prix</th>
                            </tr>
                            <tbody style="height: 352px; text-align:center">
                                <?php
                                            $query=" SELECT * FROM `courses` ";
                                            $cour=mysqli_query($conn,$query);
                                            while ($course=mysqli_fetch_array($cour)) {//payment=arrary and['id .. in table cours]
                                                    echo'
                                                    <tr style=" border-bottom-width: 11px;" >
                                                    
                                                        <td>'. $course['id'].'</td>
                                                        <td>'. $course['nom'].'</td>
                                                        <td>'. $course['duree'].'</td>
                                                        <td>'. $course['discription'].'</td>
                                                        <td>'. $course['prix'].'</td>
                                                        <td class="text-primary ">
														<a href="deletcour.php?id='. $course['id'].'"><i class="fas fa-trash"></i></a>
													</td>
                                                        
                                                </tr>';	
                                            }
                                            mysqli_close($conn);

                                ?>	
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
