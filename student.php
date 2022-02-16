<?php include 'session.php'; ?>
<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>student</title>
            <link rel="stylesheet" href="stylestudent.css">
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
				<?php include('sidebar.php'); ?>
					<!-- ******************************** search******************************************* -->
					<div class=" col"  >
						<?php include 'navbar.php' ?>
						<div class="d-flex justify-content-between mt-3   ">
							<div class="">
								<a href="indexstudent.php " class=" phov fs-3 fw-bold me-3">Students List</a>
							</div>
							<div class="d-flex justify-content-between align-items-center gap-3">
								<i class="bi bi-chevron-expand fs-2 fw-bold" style="color:#00C1FE;"></i>
								<div> 
								<form class="d-flex">
									<button type="button" class="btn" style="background:#00C1FE ;">ADD NEW STUDENT</button>									
								</form>
								</div>
							</div>
						</div>
					   <!-- ******************************** table******************************************** -->
					 <div class="table-responsive-sm">
					   <table  width="100%" style="text-align:center "  class="table table-hover">
						<thead>
						<tr class="bg-light mt-5" style="color: #ACACAC;  height: 70px;">
									<th scope="col"></th>
									<th scope="col"  class="align-middle">Name</th>
									<th scope="col" class="align-middle">Email</th>
									<th scope="col" class="align-middle">Phone</th>
									<th scope="col" class="align-middle">Enroll number</th>
									<th scope="col" class="align-middle">Date of admission</th>
									<th scope="col" class="align-middle"></th>
								</tr>
						</thead>
						<tbody style="height: 352px; text-align:center">
                      
						<?php 
                              
								foreach ($student as $key => $p) {
						?>
							<tr style=" border-bottom-width: 11px;" >
							
								<th scope="row">
									<img src="photo2.jpg" alt="Pro-img" width="65" height="55">
								</th>
								<td><?php echo $p['Name'];?> </td>
								<td><?php echo $p['Email']; ?></td>
								<td><?php echo $p['Phone']; ?></td>
								<td><?php echo $p['Enroll number']; ?></td>
								<td><?php echo $p['Date of admission']; ?></td>
								<td class="text-primary align-middle">
									<i class="fas fa-pen pe-3"></i>
									<i class="fas fa-trash"></i>
								</td>
						</tr>
						<?php } ?>
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
       
		